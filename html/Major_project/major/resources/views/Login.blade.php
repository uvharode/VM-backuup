<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../resources/css/app.css">

    <title>LOGIN</title>
    <style>
        body{
        background-color:bisque;
        color:black;
    }
    </style>
</head>
<body>
    <h1>hhhhhhh</h1>
    <form action="signup.php" method="POST">
        Username: <input type="text" name="name" /><br />
        Email: <input type="text" name="email" /><br />
        Password: <input type="text" name="password" /><br />
        Confirm password: <input type="text" name="password_confirm" /><br />
        <input type="submit" value="Register" />
      </form>
</body>
</html>