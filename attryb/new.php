<?php include 'db_connect_log.php';?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Form..!!</title>
  
  </head>
  <body>
 

  
  

 
<div class="container mt-3">
<h1>Please enter the required details</h1>
    <form action="/attryb/home.php" method="post">
       
<div class="mb-3">
    <label for="ci">Category ID</label>
    <input type="number"  name="ci"  id="adcim_no" font="white">
  </div>
  <div class="mb-3">
    <label for="cn" class="form-label">Category Name</label>
    <input type="text" class="form-control" id="cn"  name="cn">
  </div>
  <div class="mb-3">
    <label for="cd" class="form-label">Category Details</label>
    <input type="text" class="form-control" id="cd"  name="cd">
  </div>
 
  <div class="mb-3">
    <label for="img" >image path</label>
    <input type="text"  id="img" name="img">
  </div>
 
  
  
  <button type="submit" class="btn btn-primary" name="submit1">Submit</button>
</form>
</div>

      
      <?php
   
//       if (isset($_POST["submit"])){
//         echo"heyyyyyyy";

      
//       $name=$_POST['names'];
//       $parent_name=$_POST['parent_name'];
//       $dob=$_POST['dob'];
//       $roll_no=$_POST['roll_no'];
//       $adm_no=$_POST['adm_no'];
//       $pincode=$_POST['pincode'];
//       $locality=$_POST['locality'];
//       $age=$_POST['age'];
//       $class=$_POST['class'];
//       $phone_number=$_POST['phone_number'];
      
     

//       // Submit these to a database
    
  
    
//     // Submit these to a database
//     // Sql query to be executed 
   
//     //entering data from server into table-->
// $sql="INSERT INTO `students` (`name`, `parent_name`,  `dob`, `roll_no`,  `adm_no`,`pincode`,`locality`,`age`,`class`,`phone_number`) VALUES ('$name', '$parent_name', '$dob', '$roll_no', '$adm_no', '$pincode', '$locality', '$age', '$class', '$phone_number')";
// $result=mysqli_query($conn,$sql);
//       }


?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

