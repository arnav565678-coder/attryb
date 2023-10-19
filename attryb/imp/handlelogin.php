<?php 
$showalert=false;
$showerror=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  require 'dbconnect.php';
  $lemail=$_POST["lemail"];


  $pass=$_POST["pass"];
  //$cpass=$_POST["cpass"];

  $exists=false;
  
  $sql="Select * from loginid where email='$lemail'";
  $result=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($result);
  if($num==1){
    while($row=mysqli_fetch_assoc($result)){
      if(password_verify($pass,$row['password'])){
        $login=true;
        $showalert=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['lemail']=$lemail;
        $_SESSION['login_id']=$row['login_id'];
        //echo var_dump($row);
        header("location: /forum/index.php");
       
    
      }
      else{
        $showerror="invalid credentials";
        header("location: /forum/index.php");
      }
    }



  }
  else{
    $showerror="invalid credentials";
    header("location: /forum/index.php");
  }





}





?>
<?php
if($showalert){
  echo'
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success..!</strong> You have successfully logged in.
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


