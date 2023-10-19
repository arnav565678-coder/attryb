<?php
session_start();




echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
  <a class="navbar-brand" href="#">Fin-saga</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
      </li>
    
      
      <li class="nav-item">
        <a class="nav-link " href="contact.php">Contact Us</a>
      </li>
    </ul>';
    
    
      echo '
      <div class="row mx-1">
    
      <button class="btn btn-outline-success mx-1" onClick="openReasons()" data-bs-toggle="modal" data-bs-target="#signupmodal1">Check Reasons</button></div>
</div>
</nav>';



include 'signupmodal.php';
if(isset($_GET['signupsucess']) && $_GET['signupsucess']=="true"){
  echo'
  <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
    <strong>Success..!</strong> You can now log in
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  
}



?>
<script>
  function openReasons(){
    console.log("heyyyyyy");
    let reasons = document.getElementById("modelReasonsContainer");
    reasons.classList.remove("reasonInVisible");

    // reasons.classList.add("reasonVisible");
  }
</script>

