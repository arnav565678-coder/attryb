<?php 
$showalert=false;
$showerror=false;





if($_SERVER["REQUEST_METHOD"]=="POST"){
  require 'db_connect_log.php';
  $uname=$_POST["uname"];


  $upass=$_POST["upass"];
  $cpass=$_POST["cpass"];

  

 
  $existssql="SELECT * FROM `data` WHERE uname = '$uname'";
  $result=mysqli_query($conn,$existssql);
  $numrows=mysqli_num_rows($result);
  if($numrows>0){
    $exist=true;
    
    $showerror="username already exists";

  }
  else{
    $exists=false;
    
    if($upass==$cpass && $exists==false){
      $hash=password_hash($password,PASSWORD_DEFAULT);

      $sql="INSERT INTO `data` (`uname`, `upass`, `date`) VALUES ('$uname', '$hash', current_timestamp())";
      $result=mysqli_query($conn,$sql);
      if($result){
        $showalert=true;
        header("location: login.php");
      }
  
  
    }
    else{
      $showerror="passwords do not match";
  
    }

  }
 



}





?>






<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    
<?php

if($showalert){
  echo'
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success..!</strong> You have successfully registered.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

}
if($showerror){
  echo'
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>warning..!</strong>' .$showerror.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

}

require 'design_sign.html';
?>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>