<html>
<style>

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0px;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44333;
}

/* Float cancel and signup buttons and add an equal width */
 .signupbtn {
   float: center;
  width: 30%;

  margin-bottom: 30px;

}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}
</style>
 
<script src="https://apis.google.com/js/platform.js" async defer></script>

 <div class="imgcontainer">
      

      <img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/20/Harcourt_Butler_Technical_University_Logo_SSH.png/220px-Harcourt_Butler_Technical_University_Logo_SSH.png" style="width: 100px" alt="Avatar" class="avatar">
    </div>


<center><h2 style="font-family:Alzebrian "> <i>Sign</i> <i> Up </i></h2></center> 
 <form method="post" action="su.php">



      <label for="email"><b>Email : </b></label>
      <input type="text" placeholder="Enter Email" name="email" required style="border-radius: 100px">

      <label for="psw"><b>Password :</b></label>
      <input type="password" placeholder="Enter Password" name="password" required style="border-radius: 100px">

      <label for="psw-repeat"><b>Repeat Password :</b></label>
      <input type="password" placeholder="Repeat Password" name="passwords" required style="border-radius: 100px">
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
<center>
     
       
        <button   type="submit"  name="submit"  class="signupbtn  col-sm-12" style="border-radius: 600px; background-color: blue">Sign Up</button>
     
      </center>
    </div>

    
  </form>
</div>


 
 </script>

</body>
</html>





<?php

$conn = mysqli_connect("localhost", "root", "" , "sign-up");  
      
if(isset($_POST["submit"])){
//$email = $_POST["email"];
//$password= $_POST["password"];
//$passwords = $_POST["passwords"];

        $email  = mysqli_real_escape_string($conn,$_POST["email"]);
        $password     = mysqli_real_escape_string($conn,$_POST["password"]);
        $passwords   = mysqli_real_escape_string($conn,$_POST["passwords"]);





$query = "SELECT 'email' FROM `sundaram` where email='".$email."'";
        $result = mysqli_query($conn,$query); 
        $numResults = mysqli_num_rows($result);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
            $message =  "Invalid email address please type a valid email!!";
            
        }
        elseif($numResults>=1)
        {
            $message = $email." Email already exist!!";
            
        }
        else
        {
          $quer = "INSERT INTO `sundaram` (`name`, `email`, `password`, `passwords`) VALUES ('saurabh', '$email', '$password', '$passwords')";
      if(mysqli_query($conn, $quer)){
      echo "<script type='text/javascript'>alert('signup successfully!')</script>";
        //header("Location:localhost/hostreet/login.php");
         echo '<script>window.location.href = "login.php";</script>';
        exit();
      }else
      {
        echo "here is error";
  }
            $message = "Signup Sucessfully!!";
echo "$message";
        }
    }

?>


