<?php
session_start();
include_once 'include/voting-class.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Pemilu OSIS SMK NEGERI 1 CIKEDUNG</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="asset/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="asset/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="shortcut icon" href="asset/img/favicon.ico">

  <script src="asset/js/jquery-latest.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container text-center">
<div class="row">
<div class="col-sm-12">
  <?php 
  $user = new User();
  $db = new Database();

  $db->connectMySQL();


  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $login = $user->cek_login(mysql_real_escape_string($_POST['username']), mysql_real_escape_string($_POST['password']));
    if($login){
      if($user->sesi()==1){
        header("location:home.php");
      }elseif($user->sesi()==2){
        header("location:home.php");
      }
    }else{
      echo "
      <div class=\"alert alert-block\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
        <h4>LOGIN GAGAL!</h4>
        ID atau PASSWORD salah!
      </div>
      ";
    }
  }
  ?>
  <form style="text-align:center;" method="post" name="login">
    <!-- <img class="img-responsive" src="asset/img/leader.png" align="center" width="600" /> -->
     <div class="row">
       <div class="form">
       <div class="col-sm-12">
       <img src="asset/img/logoosis.png" class="img-circle" alt="">
       </div>
       <div class = "col-sm-12">
       <h1 style="color:white;">PEMILIHAN OSIS</h1>
       </div>
       <div class="col-sm-12">
       <P style="color:white">SMK NEGERI 1 CIKEDUNG</P>
       </div>
       <div class="col-sm-12">
       <input type="text" class="form-control" name="username" id="username" placeholder="USERNAME">
       </div>
       <div class="col-sm-12">
       <input type="password" class="form-control" name="password" id="password" placeholder="PASSWORD">
       </div>
       <div class="col-sm-12">
       <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
       </div>
       <div class="col-sm-12">
       <button type="reset" class="btn btn-danger btn-lg btn-block">Reset</button>
       </div>
       <div class="col-sm-12">
       <p style="color:white;">Gunakan Hak Pilih Anda</p>
       </div>
       </div>
     </div>
  </form>

 
</div> 
</div>
</div>
</container>
 <!-- Footer -->

  
  <!-- Akhir Footer -->


</body>
</html>
