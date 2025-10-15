<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NidhiRajput Form</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #4b6cb7, #182848);
      font-family: 'Poppins', sans-serif;
    }

    .register {
      margin-top: 5%;
      padding: 3%;
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .register-left {
      text-align: center;
      color: #fff;
      background: linear-gradient(135deg, #3931af, #00c6ff);
      border-top-left-radius: 15px;
      border-bottom-left-radius: 15px;
      padding: 40px 20px;
    }

    .register-left img {
      width: 120px;
      margin-bottom: 20px;
      animation: float 2s ease-in-out infinite alternate;
    }

    @keyframes float {
      0% { transform: translateY(0); }
      100% { transform: translateY(-10px); }
    }

    .register-left h3 {
      margin-top: 10px;
      font-weight: 600;
    }

    .register-left p {
      margin: 20px 0;
      font-size: 15px;
      color: #e6e6e6;
    }

    .register-left .btn-login {
      background: #fff;
      color: #3931af;
      border-radius: 30px;
      padding: 10px 30px;
      font-weight: 600;
      border: none;
      transition: 0.3s;
    }

    .register-left .btn-login:hover {
      background: #3931af;
      color: #fff;
    }

    .register-right {
      padding: 40px 30px;
    }

    .register-heading {
      text-align: center;
      margin-bottom: 30px;
      color: #495057;
      font-weight: 700;
    }

    .form-control {
      border-radius: 10px;
    }

    .btnRegister {
      background: #0062cc;
      color: #fff;
      font-weight: 600;
      border: none;
      border-radius: 30px;
      padding: 10px 30px;
      transition: 0.3s;
    }

    .btnRegister:hover {
      background: #004c99;
    }

    .alert {
      text-align: center;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

  <div class="container">
    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <form method="POST" action="{{ route('form.submit') }}">
      @csrf

      <div class="row register">
        <div class="col-md-4 register-left d-flex flex-column justify-content-center align-items-center">
          <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="Logo">
          <h3>Welcome</h3>
          <p>You are 30 seconds away from your goal!</p>
          <button type="button" class="btn-login">Login</button>
        </div>

        <div class="col-md-8 register-right">
          <h3 class="register-heading">Register as a User</h3>
          <div class="row g-3">
            <div class="col-md-6">
              <input type="text" name="first_name" class="form-control" placeholder="First Name *" required>
            </div>
            <div class="col-md-6">
              <input type="text" name="last_name" class="form-control" placeholder="Last Name *" required>
            </div>
            <div class="col-md-6">
              <input type="email" name="email" class="form-control" placeholder="Email *" required>
            </div>
            <div class="col-md-6">
              <input type="text" name="phone" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" required>
            </div>
            <div class="col-md-6">
              <input type="password" name="password" class="form-control" placeholder="Password *" required>
            </div>
            <div class="col-md-6">
              <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password *" required>
            </div>
            <div class="col-md-6">
              <select class="form-control" name="security_question" required>
                <option selected disabled>Choose a Security Question *</option>
                <option>What is your Birthdate?</option>
                <option>What is your old Phone Number?</option>
                <option>What is your Pet's Name?</option>
              </select>
            </div>
            <div class="col-md-6">
              <input type="text" name="security_answer" class="form-control" placeholder="Enter Your Answer *" required>
            </div>
            <div class="col-12 text-center mt-3">
              <button type="submit" class="btnRegister">Register</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
