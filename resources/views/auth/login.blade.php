<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Login Page
  </title>
  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 80%;
            max-width: 1200px;
            background: linear-gradient(to right, #e0f7fa, #ffffff);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .left-section {
            text-align: center;
            flex: 1;
        }
        .left-section img {
            max-width: 150px;
            margin-bottom: 20px;
        }
        .left-section h1 {
            font-size: 24px;
            color: #333;
        }
        .right-section {
            flex: 1;
            display: flex;
            justify-content: center;
        }
        .login-box {
            background-color: #e0f7fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-box h2 {
            font-size: 18px;
            margin-bottom: 20px;
            color: #333;
        }
        .login-box .form-control {
            margin-bottom: 10px;
        }
        .login-box .btn-primary {
            width: 100%;
        }
        .login-box .form-check-label {
            margin-bottom: 10px;
        }
        .login-box a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
        .login-box a:hover {
            text-decoration: underline;
        }
        .login-box .footer-text {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #666;
        }
  </style>
 </head>
 <body>
  <div class="container">
   <div class="left-section">
    <img alt="University logo" height="150" src="{{ asset('assets/images/logo/logo_guideon.png') }}" width="150"/>
    <h1>
     Welcome TO
    </h1>
    <h3>Catalog of Modules UIN Jakarta</h3>
   </div>
   <div class="right-section">
    <div class="login-box">
     <h2>
      Masuk untuk memulai sesi Anda
     </h2>
     <form method="POST" action="{{ route('login') }}" class="needs-validation mt-2" novalidate="">
        @csrf
      <div class="mb-3">
       <label class="form-label" for="email">
        Email
       </label>
       <div class="input-group">
        <input id="email" type="email" class="form-control" name="email" tabindex="1" required
        value="{{ old('email') }}" autofocus>
        <span class="input-group-text">
         <i class="fas fa-envelope">
         </i>
        </span>
       </div>
      </div>
      <div class="mb-3">
       <label class="form-label" for="password">
        Kata sandi
       </label>
       <div class="input-group">
        <input id="password" type="password" class="form-control" name="password" tabindex="2"
        required>
        <span class="input-group-text">
         <i class="fas fa-lock">
         </i>
        </span>
       </div>
      </div>
      <div class="form-check mb-3">
       <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
       id="remember-me">
       <label class="form-check-label" for="rememberMe">
        Ingat Saya
       </label>
      </div>
      <button class="btn btn-primary" type="submit">
       Masuk
      </button>
     </form>
     <a href="{{ route('forgot.password') }}" class="text-small">
      Saya lupa kata sandi
     </a>
     <a href="#">
      Daftar sebagai anggota baru
     </a>
     <a href="#">
      Hubungi kami via WhatsApp
     </a>
     <div class="footer-text">
      © Fakultas Sains dan Teknologi UIN Jakarta 2024
     </div>
    </div>
   </div>
  </div>
 </body>
</html>