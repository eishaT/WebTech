
<?php
session_start();
?>





<!DOCTYPE html>
<html >
<fieldset>
  <head> 
    <title>CHANGE PASSWORD </title>
    
 
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>




<style>


div a:hover{

background: skyblue;

color:black;

}

body{
	background-image: url(../uploads/44.png);
	background-repeat: no-repeat;
  	background-attachment: fixed;
  	background-size: cover;
	
  }

</style>



  </head>
  <body>

		
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="../view/Dashboad.php">Dashboad</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/ViewProfile.php">View Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/Editprofile.php">Edit Profile</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="../view/Changepass.php">Change Password</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="../view/showAllProduct.php">Packages</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="../view/sabid.php">Search</a>
        </li>
        </div>
  <p style="float: left;">
			Logged in as<span style ="color:SlateBlu; "  href= "../view/ViewProfile.php"> <?php  echo $_SESSION["Name"]?>| </span>
		    
			<a style="color:SlateBlu;" href="../view/Homepage.php"> <i class="bi bi-box-arrow-left"></i>    </a>  
	

			</p> 
    
        
        
      </ul>
	  
	  
		
    </div>
  </div>
 
</nav>

    
	      <div>
		  <br> 
		  <fieldset align="center">
         
          <form  method="post" action="../Controller/Pass.php"> <br>
          	<fieldset>
		  
		  <legend><h2 align="center"> CHANGE PASSWORD  </h2></legend>
		  
		  <p align="center">
		  
	  
          <label>Current Password:</label> 
		      <input type="password" name="currentPassword"  id="currentPassword" onkeyup="cpassValidation()"   >               
          <span id="cpassErr"></span>
          
          <br/><br/>
		  
		  
          <label style="color:green">New Password:</label>
          <input type="password" name="newpassword" id="newpassword" onkeyup="newpassValidation()"   >               
          <span id="newpassErr"></span>
          
         
          <br/><br/>
		  
		  
          <label style="color:Red">Retype Password:</label>
          <input type="password" name="rnewpassword" id="rnewpassword" onkeyup="rnewpassValidation()"   >               
          <span id="rnewpassErr"></span>
          
    
          
		  
		  <hr> 
		 
         <h4 align = "center"> <input type="submit" name="submit" value="Submit"> </h4>
		 
          <br/>
		    
		  </p>


				
                 <br>
               </fieldset>
      </form>
   

      </fieldset>  

    

<script>
   function cpassValidation() {
        var currentPassword, msg;
      
       
        currentPassword = document.getElementById("currentPassword").value;
        
        
        if (currentPassword=="") {
          msg = "Can not be empty";
        } 
        else{
          if (currentPassword.length<6 ) {
            msg = "Must not be less than (6)characters"
          } else {
            msg = ""
          }   
        }
        

        document.getElementById("cpassErr").innerHTML = msg;
      }

      function newpassValidation() {
        var newpassword, msg;
      
       
        newpassword = document.getElementById("newpassword").value;
        
        
        if (newpassword=="") {
          msg = "Can not be empty";
        } 
        else{
          if (newpassword.length<6 ) {
            msg = "Must not be less than (6)characters"
          } else {
            msg = ""
          }   
        }
        

        document.getElementById("newpassErr").innerHTML = msg;
      }



      function rnewpassValidation() {
        var rnewpassword, msg;
      
       
        rnewpassword = document.getElementById("rnewpassword").value;
        
        
        if (rnewpassword=="") {
          msg = "Can not be empty";
        } 
        else{
          if (rnewpassword.length<6 ) {
            msg = "Must not be less than (6)characters"
          } else {
            msg = ""
          }   
        }
        

        document.getElementById("rnewpassErr").innerHTML = msg;
      }



</script>


  </body>
    
        
</html>
