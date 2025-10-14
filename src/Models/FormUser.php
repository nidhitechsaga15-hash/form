<?php

namespace NidhiRajput\Form\Models;

use Illuminate\Database\Eloquent\Model;

class FormUser extends Model
{
    protected $table = 'form_users'; // apni table ka naam
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
    ];
}
