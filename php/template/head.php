<html>
<head>
  <?php 
    if(isset($row['product_name'])){
      $title = $row['product_name'];
    }
    else{
      $title = ".com Web Shop";
    }
    echo "<title>".$title."</title>";
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!---BOOTSTRAP & JQUERY--->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!---MATERIAL ICON--->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!---CSS--->
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <!---ANIMATE.CSS--->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <!---SWEET ALERT--->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!---TAB ICON--->
  <link rel="icon" type="image/png" href="img/payment/ikonica.png"/>
  <!---FONT AWESOME--->
  <script src="https://kit.fontawesome.com/07ea4034d1.js" crossorigin="anonymous"></script>
  <!---SWEET ALERT STYLE--->
  <link rel="stylesheet" href="@sweetalert2/theme-material-ui/material-ui.css">
  <script src="sweetalert2/dist/sweetalert2.min.js"></script>
</head>
<body>