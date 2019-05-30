<?php
include_once 'include/voting-class.php';


?>
<h2>Print Data</h2>
<?php 
  $user = new User();
  $db = new Database();

  $db->connectMySQL();
  $result = mysql_query("SELECT * FROM user");
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Print</title>

    <!-- Bootstrap -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <table border="1" cellpadding="10" cellspacing="0">

  <?php while($row = mysql_fetch_array($result)) :  $data[]=$row;?>
  <tr>
  <td>
  <p>Username : <?php echo $row["username"]?></p>
  <p>Password :</p>
  <td>
  <p>Username ;</p>
  <p>Password :</p>
  </td>
  </td>
  </tr>
    <?php endwhile; ?>

  <tr>
  <td><p>abu</p></td></tr>
  
   </table>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>