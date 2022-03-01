<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

  <title>Document</title>
</head>

<?php
  include('functions.php');
?>


<body>
<div class="container">
    <div class="msg">
    </div>
    <center>
    <h1>Register</h1>

    <form method="POST" class="form-inline" role="form">
      <div class="form-group">
        <label class="sr-only" for="">Username</label>
        <input type="text" class="form-control" id="" name="lUsername" placeholder="Your username">
      </div>
      <div class="form-group">
        <label class="sr-only" for="">Password</label>
        <input type="password" class="form-control" id="" name="lPassword" placeholder="Your password">
      </div>

        <select id="role" class="form-control" name="roles" >
            <option value="Administrador">Administrador</option>
            <option value="Estudiante">Estudiante</option>
        </select>

      <button type="submit" name= "btnRegister" class="btn btn-primary">Register</button>
    </form>
    <br><br><br>
    <h1>Login</h1>
    <form method="POST" class="form-inline" role="form">
      <div class="form-group">
        <label class="sr-only" for="">Username</label>
        <input type="text" class="form-control" id="" name="username" placeholder="Your username">
      </div>
      <div class="form-group">
        <label class="sr-only" for="">Password</label>
        <input type="password" class="form-control" id="" name="password" placeholder="Your password">
      </div>

      <button type="submit" name = "btnLogin" class="btn btn-primary">Login</button>
    </form>
</div>
</center>
<?php
    if (isset($_POST["btnRegister"])) {
    saveUser(credentials(),"lUsername","lPassword","roles");
    }

    if (isset($_POST["btnLogin"])) { 
        $ResultAuthenticate = authenticate(credentials(), "username", "password");
        if ($ResultAuthenticate == true ){
            session_start();
            $_SESSION['user'] = $ResultAuthenticate;
            if($ResultAuthenticate[2]== "Administrador"){
            header('Location: form.php');
            }else if ($ResultAuthenticate[2]== "Estudiante"){
                echo ("WELCOME " . "$ResultAuthenticate[0]") ;
            }
        }else {
            header('Location: index.php');
        }

        }

    ?>
</body>
</html>