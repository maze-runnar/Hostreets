<!DOCTYPE html>
<html>
<head>
	<title>register.php</title>
</head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
  
input[type=text], input[type=password], input[type=email] {
  width: 80%;

  padding: 12px 20px;
  margin: 10px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;

border-radius: 20px;

}

</style>


<style type="text/css">
  .container{
     background-color: lightgray;
     width: 100%;
     border-radius: 13px;
  }

</style>


<body><center><div class="container">
<h1     > <span class="glyphicon glyphicon-user" ><i> EnhanceYourProfile</i>  </span> </h1>  </center>


  <center>
<form method="post" enctype="multipart/form-data" action="register.php">
	<input type="text" name="name" placeholder="enter your name..">
	<input type="text" name="course" placeholder="B.TECH/MCA/M.TECH">
	<input type="text" name="year" placeholder="Year..">
	<input type="text" name="sr" placeholder="sr. number..">
	<input type="email" name="email" placeholder="email">
	<input type="password" name="password" placeholder="enter password">
 
	<h3>Add profiles links :</h3>
        
       <input type="text" name="linkedin" placeholder="linkedin profile..">
        
       <input type="text" name="competition" placeholder="Any competition profile(if any)..">
       <h3 class="glyphicon glyphicon-plus"> uploadprofilepicture :</h3><br><br>
<input type="file" name="image" value="upload profile picture"><br><br>
 <input type="submit" name="submit" class="btn btn-success" onclick="button()" style="width: 200px">
</form></center>

<script type="text/javascript">
  function button(){
    window.alert("info added successfully! ");
    window.location.replace("main.php");
  }

</script>

</body>
</html>




<?php

$conn = mysqli_connect("localhost", "root", "" , "sign-up");  
if(isset($_POST["submit"])){

  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $course = mysqli_real_escape_string($conn,$_POST['course']);
  $year = mysqli_real_escape_string($conn,$_POST['year']);
  $sr = mysqli_real_escape_string($conn,$_POST['sr']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $linkedin = mysqli_real_escape_string($conn,$_POST['linkedin']);
        $competition = mysqli_real_escape_string($conn,$_POST['competition']);

        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        move_uploaded_file($image_tmp,"images/$image");

               $query  =    "INSERT INTO `register`(`name`, `course`,   `year`,    `sr`, `email`, `linkedin`, `competition`, `image`, `password`) VALUES ($name,$course,$year,$sr,$email,$linkedin,$competition,$image,$password)";
        
    if(mysqli_query($conn, $query)){
    echo "recoeds inserted successfully";
}else{
 echo "try again !";
} 
}



?>