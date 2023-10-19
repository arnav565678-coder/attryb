
<?php
    include 'imp/header3.php';

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('Desktop - 2.png');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
align-items: center;
justify-content: center;
}

.next-button {
    position: absolute;
    left: 740;
    top: 470;
}

.reasonVisible{
    visibility:visible;
}

.reasonInVisible{
    visibility:hidden;
}

    </style>
    <title>login</title>
    


</head>
<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>


<div id="modelReasonsContainer" class="reasonInVisible">
    <div class="modal-dialog">
      <div class="modal-content"> 
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="reasonModal">Reason </h1>
          <button type="button" class="btn-close" onClick="closeReasons()" data-bs-dismiss="modal" aria-label="Close"></button></div>
          <form >
              <div class="modal-body">
                
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">•	Increased demand for oil and gas: The Russia-Ukraine war has led to an increase in the demand for oil and gas, as countries around the world look to reduce their reliance on Russian energy supplies. IOC is the largest oil and gas company in India and is well-positioned to benefit from this increased demand.
                            •	Increased demand for medicines and vaccines: The war has also led to an increase in the demand for medicines and vaccines, as people in Ukraine and other countries affected by the war seek treatment for injuries and illnesses. Sun Pharma is a leading pharmaceutical company in India that produces a wide range of generic and branded medicines.
                            •	Increased demand for port services: The war has also led to an increase in the demand for port services, as countries around the world look to import goods from other countries. Adani Ports is a leading port management company in India and is well-positioned to benefit from this increased demand.</label>
                          <!-- <input type="text" class="form-control" id="cpass" name="cpass"> -->
                      </div>
                      
                      
                  
              </div>
  
  
              </form>
        
      </div>
    </div>
  </div>
   </div>
   <script>
  function closeReasons(){
    console.log("bieeeee");
    let reasons = document.getElementById("modelReasonsContainer");
    reasons.classList.add("reasonInVisible");

    // reasons.classList.add("reasonVisible");
  }
</script>

</body>
</html>
   
</body>
</html>
 