<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>





</head>
<body>

<nav class="navbar navbar-inverse  navbar-dark" style="border-radius: 0; box-shadow:white;">

  <div class="container-fluid" >
    <div class="navbar-header"   >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="https://sundaram-dubey.imgbb.com/" style="font-family: cursive;"><i>HBTU HOstreets</i></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active "><a href="#" style="font-family: cursive,italic;"  ><span class="glyphicon glyphicon-home">&nbsp;<i>Home</i></span></a></li>
        
        <li ><a href= "#team"  style="font-family: cursive,italic;"><span class="glyphicon glyphicon-pencil" >&nbsp;<i>About-us</i></span></a></li>
        <li    ><a href="#complain" style="font-family: cursive;"><span class="glyphicon glyphicon-envelope"> <i>Complain</i></span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> profile</a></li>
          <li><a href="register.php"><span class="glyphicon glyphicon-plus"></span> enhance-profile</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
      </ul>
      <a class="navbar-brand"   href="https://hbtu.ac.in" style="font-family: cursive; float: right;"><i>Announcements</i></a>
    </div>
  </div>
</nav>
 
 
 
   <style>
 
 
.bottom-right {
  position: absolute;
  bottom: 1px;
  right: 200px;
  
}

</style>
</head>
<body> 

 
  <div style="margin-top: -60px">

 <img src="https://i.ibb.co/dPNqHK7/IMG-20190427-164252.jpg" alt="IMG-20190427-164252" border="0" width="99.99%" height="50%" class="img-responsive">

 
   <div class="carousel-caption">
    <div style="background-color:   rgba(0,0,0,.6);"><h3 class="h3" >Welcome to a platform specially made for hostelers</h3></div>
    <div style="background-color:   rgba(0,0,0,.6);"><p class="p">Hold the info, it all make sense</p></div>
  </div>

</div>  
<style type="text/css">


   @media only screen and (max-width: 700px) {
    .h3{
      font-size: 0px;
      text-align: center;
        background-color: none;

           }
           .p{
            font-size: 0px;
             background-color: none;
           }
    

   }
</style>
 





 
 
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  border-radius: 10px;
  margin-bottom: 16px;
  resize: vertical;

}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
   opacity: .7;
}

/* Style the container/contact section */
.container {
  border-radius: 15px;
  background-color: #f2f2f1;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 100%;
  align-self: center;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column{
    width: 100%;
    margin-top: 0;
  }
}

@media screen and (max-width: 600px) {
   input[type=submit] {
    width: 50%;
    margin-top: 0;
    border-radius: 5%;
    background-color: darkblue;
  }
}

</style>
</head>
<body>

 
<div class="container" id="complain">
  <div style="text-align:center ; font-family: cursive;">
    <h2><i>Feedback or Suggestion</i></h2>
  </div>
  
    <div class="column" id="complain">
      <form   method="post">
        <label for="fname">Name</label>
        <input type="text" id="fname" name="name" placeholder="Your name..">
        <label for="lname">university enrollment number:</label>
        <input type="text" id="lname" name="roll" placeholder="Enrollment no...">
 <label for="lname">Branch :</label>
        <input type="text" id="lname" name="branch" placeholder="Branch..">
                


<label>  your feedback/suggestion is related to :</label>
 <input type="text" id="lname" name="feed" placeholder="Feedback">

        




        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write your complain/Suggestion..." style="height:170px"></textarea>
       <center>
        <input type="submit" name="submit" value="Submit" style="border-radius: 100px ; margin-bottom: 20px">
      </center> 
 
 </form>
    </div>
  </div>
</div>















<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<div class="w3-display-container w3-animate-opacity">

<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>OUR TEAM</h2>


<div class="w3-row"><br>

<div class="w3-quarter">
 <a href="https://ibb.co/c32JYBD"><img src="https://i.ibb.co/mThJNj6/Whats-App-Image-2019-04-25-at-22-30-18.jpg" alt="Whats-App-Image-2019-04-25-at-22-30-18" border="0" style="width:45%" class="w3-circle w3-hover-opacity"></a>
  <h3>SAURABH GUPTA</h3>
  <p><BR>
  ANDROID DEVELOPER </p>
</div>

<div class="w3-quarter">
  <a href="https://ibb.co/b7qzBLN"><img src="https://i.ibb.co/b7qzBLN/Whats-App-Image-2019-04-25-at-20-55-32.jpg" alt="Whats-App-Image-2019-04-25-at-20-55-32" border="0" style="width:45%" class="w3-circle w3-hover-opacity"></a>
  <h3>SUNDARAM DUBEY</h3>
  <p>WEB,Django<BR>HASH CODE, CODEJAM <BR>ANDROID DEVELOPER<BR></p>
</div>

<div class="w3-quarter">
  <a href="https://ibb.co/THpHHQ8"><img src="https://i.ibb.co/zSjSS3R/Whats-App-Image-2019-04-25-at-22-44-00.jpg" alt="Whats-App-Image-2019-04-25-at-22-44-00" border="0" style="width:45%" class="w3-circle w3-hover-opacity" ></a>
  <h3>VARUN SINGH</h3>
  <p>ANDROID CERTIFIED</p>
</div>


<div class="w3-quarter">
 <a href="https://ibb.co/bLtqPPb"><img src="https://i.ibb.co/0Z58ccs/Whats-App-Image-2019-04-25-at-22-20-29.jpg" alt="Whats-App-Image-2019-04-25-at-22-20-29" border="0" style="width:45%" class="w3-circle w3-hover-opacity"></a>
  <h3>SARTHAK SINGH</h3>
  <p>WEB DESIGNER,PHOTOGRAPHY</p>
</div>

<div class="w3-quarter">
  <a href="https://ibb.co/xzcyfJn"><img src="https://i.ibb.co/ssDh6yT/Whats-App-Image-2019-04-25-at-23-28-13.jpg" alt="Whats-App-Image-2019-04-25-at-23-28-13" border="0" style="width:45%" class="w3-circle w3-hover-opacity"></a>
  <h3>ADITI MOGHA</h3>
  <p>WEB DESIGNER</p>
</div>

<div class="w3-quarter">
 <a href="https://ibb.co/8BP2WKf"><img src="https://i.ibb.co/H2GYWFb/Whats-App-Image-2019-04-25-at-23-16-46.jpg" alt="Whats-App-Image-2019-04-25-at-23-16-46" border="0" style="width:45%" class="w3-circle w3-hover-opacity"></a>
  <h3>NIKITA SINGH</h3>
  <p>WEB DESIGNER</p>
</div>
 





   
</div>
 
</div>
</div></div>


<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
 

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  
  </div>
  <div>
  <p>copyright@hbtu2019</p></div>
</footer>




</body>
</html>













<?php
$conn = mysqli_connect("localhost", "root", "" , "sign-up"); 
if(isset($_POST["submit"])){
//$email = $_POST["email"];
//$password= $_POST["password"];
//$passwords = $_POST["passwords"];

        $name  = mysqli_real_escape_string($conn,$_POST["name"]);
        $roll     = mysqli_real_escape_string($conn,$_POST["roll"]);
        $branch   = mysqli_real_escape_string($conn,$_POST["branch"]);
        $feed = mysqli_real_escape_string($conn,$_POST["feed"]);
        $subject = mysqli_real_escape_string($conn,$_POST["subject"]);




$query = "SELECT 'roll' FROM `feedback` where roll='".$roll."'";
        $result = mysqli_query($conn,$query); 
        $numResults = mysqli_num_rows($result);
        if($numResults>=1)
        {
            $message = " enrollment number already exist!!";
        }
        else
        {
          $quer = "INSERT INTO `feedback`(`name`, `roll`, `branch`, `feed`, `subject`)VALUES($name,$roll,$branch,$feed,$subject)";

      if(mysqli_query($conn, $quer)){
      echo "<script type='text/javascript'>alert('posted successfully!')</script>";
        ///header("Location:localhost/hostreet/login.php");
        header('profile.php');   
      }else
      {
        echo "here is error";
  }
          
        }
  }

?>


