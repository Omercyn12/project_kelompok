<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="login-card">
        <h1>Log-in</h1><br>
      <form action="{{ route('login_proses')}}" method="POST">
        @csrf
        <div>
            <input type="text" name="email" placeholder="Email">
        </div>
       <div>
            <input type="password" name="pass" placeholder="Password">
        </div>
        <input type="submit" name="login" class="login login-submit" value="login">
      </form>
      <div class="login-help">
        <a href="{{ route('register')}}">Register</a> • <a href="#">Forgot Password</a>
      </div>
    </div>

    <!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
</body>
</html>
