
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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

 
<div class="container">
  <div style="text-align:center ; font-family: cursive;">
    <h2><i>Feedback or Suggestion</i></h2>
  </div>
  
    <div class="column">
      <form   method="post" action="feedback.php">
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
     $quer = " INSERT INTO `feedback`(`name`, `roll`, `branch`, `feed`, `subject`) VALUES ($name,$roll,$branch,$feed,$subject)";

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