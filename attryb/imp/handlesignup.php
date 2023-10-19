<?php
$showalert=false;



if($_SERVER["REQUEST_METHOD"]=="POST"){
    require 'dbconnect.php';
    $signupmail=$_POST["signupmail"];
  
  
    $pass=$_POST["pass"];
    $cpass=$_POST["cpass"];

    $existssql="SELECT * FROM `loginid` WHERE email = '$signupmail'";
  $result=mysqli_query($conn,$existssql);
  $numrows=mysqli_num_rows($result);
  if($numrows>0){
    $exist=true;
  
   //echo "fs";   
    $showerror="Mail-id already exists";

  }
  else{
    $exists=false;
   
    
    if($pass==$cpass && $exists==false){
      $hash=password_hash($pass,PASSWORD_DEFAULT);

      $sql="INSERT INTO `loginid` (`email`, `password`, `timestamp`) VALUES ('$signupmail', '$hash', CURRENT_TIMESTAMP)";
    
      $result=mysqli_query($conn,$sql);
      if($result){
        $showalert=true;
       // echo "da";
        header("Location: /forum/index.php?signupsuccess=true");
        exit();
      
    }
  
  
    }
    else{
      $showerror="passwords do not match";
  
    }

  }
  header("Location: /forum/index.php?signupsuccess=false&error=$showerror");

 



}


if($showalert=true){
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


?>
  
    