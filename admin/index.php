<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/admin.css">
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <div class="fadeIn first">
      <img src="../img/payment/form-img.png" id="icon" alt="User Icon" />
    </div>
    <form action="action/adminLogin.php" method="POST">
      <input type="text" id="login" class="fadeIn second" name="uname" placeholder="Username" autocomplete="off">
      <input type="password" id="password" class="fadeIn third" name="pass" placeholder="Password" autocomplete="off">
      <input type="submit" name="adminSubmit" class="fadeIn fourth" value="Log In">
    </form>
    <div id="formFooter">
      <p>Username = "Aleksandar"</p>
      <p>Password = "Djukic"</p>
    </div>
  </div>
</div>
<div class="demo-alert">
  <p>Don't insert your real private information this is Demo version of website !</p>
</div>
</body>
