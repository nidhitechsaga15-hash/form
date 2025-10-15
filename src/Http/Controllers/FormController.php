<?php

namespace NidhiRajput\Form\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use App\Http\Controllers\Controller;
use NidhiRajput\Form\Models\FormUser;

class FormController extends Controller
{
    public function index()
    {
        return view('form::index'); // form.blade.php
    }

    public function submit(Request $request)
    {
       $request->validate([
        'first_name'        => 'required|string|max:255',
        'last_name'         => 'required|string|max:255',
        'email'             => 'required|email|unique:form_users,email',
        'phone'             => 'required|min:10|max:10',
        'password'          => 'required|min:6',
        'confirm_password'  => 'required|same:password',
    ]);

         FormUser::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'password'   => bcrypt($request->password),
        ]);

        return redirect()->back()->with('success', 'Form submitted!');
    }
}
