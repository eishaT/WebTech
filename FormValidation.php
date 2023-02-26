
<!DOCTYPE html>
<html>
<head>
   
</head>
<body>

    <?php

        $nameErr =  $emailErr =    $genderErr = $dobErr = $degreeErr= $bgErr ="";
        $name =   $email =  $gender = $dob = $degree = $bg ="";

        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "*Name is required";
          } 
          
        else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "*Only letters and white space allowed";
              }
            }
            
            
        if (empty($_POST["email"])) {
                $emailErr = "*Email is required";

              } 
        else {
                
                    $email = test_input($_POST["email"]);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                      $emailErr = "*Invalid email format";
                    }
                  }
            
          

            
              if (empty($_POST["gender"])) {
                $genderErr = "*Gender is required";
              } else {
                $gender = test_input($_POST["gender"]);
              }


              
              if (empty($_POST["dob"])) {
                $dobErr = "*dob is required";
              } else {
                $dob = test_input($_POST["dob"]);
              }


              if (empty($_POST["degree"])) {
                $degreeErr = "*Select your degree";
              } else {
                $degree = test_input($_POST["degree"]);
              }

              if(isset($_POST['submit'])){
                $blood =$_POST["blood"];
                echo $blood;
              }

       }

              
      
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
    ?>
   
        <fieldset>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

            <fieldset>
            <legend><b>Name</b></legend>
                <div>
                <label > Name: </label>
                <input  name="name" id="name" type="text" >
                <?php echo $nameErr;?>
                
            </div></fieldset><br><br>

            <fieldset>
            <legend><b>E-mail</b></legend> 
            <div>
                <label> E-mail  </label>
                <input  name="email" id="email" type="text" >
                 <?php ; echo $emailErr;?>
              
            </div></fieldset><br><br>

            <fieldset>
                <legend><h3 style=" text-align: center;color: black;">Date of Birth</h3></legend>
                <div>
                    <label> Date of Birth  </label>
                    <input  name="dob" id="dob" type="date"><br>
                    <?php echo $dobErr;?>
                </div></fieldset><br><br>


                <fieldset>
                <legend><h1 style=" text-align: center;color: black;">Gender</h1></legend>
                    <div>
                        <input name="gender" id="gender" value="male" type="radio">Male
                        <input name="gender" id="gender" value="female" type="radio">FeMale
                        <input name="gender" id="gender" value="other" type="radio">other <br>
                        <?php echo $genderErr;?>

                    </div>
                </fieldset><br><br>


                <fieldset>
                <legend><h3 style=" text-align: center;color: black;">Degree</h3></legend>
                <div >
                
                <input type="checkbox" id="ssc" name="ssc" value="ssc">SSC
                
                <input type="checkbox" id="hsc" name="hsc" value="hsc">HSC
                
                <input type="checkbox" id="bsc" name="bsc" value="bsc">BSc

                <input type="checkbox" id="msc" name="msc" value="msc">MSc <br>
                
               <span style = "color:red;"> <?php echo $degreeErr;?></span>
                </div></fieldset><br><br>


                <fieldset>
                <legend><h1 style=" text-align: center;color: black;">Blood Group</h1></legend>
                    <div>
                       <select name="blood">
                        <option>A+</option>
                        <option>A-</option>
                        <option>O+</option>
                        <option>AB+</option>
                        <option>AB-</option>
                       </select>

                    </div>
                </fieldset><br><br>

            
            <div>
               <button type="submit" value="submit"> Submit</button>
                
            </div>
            </fieldset>
        </form>
        </fieldset>
        
        <?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $dob;
?>

</body>
</html>