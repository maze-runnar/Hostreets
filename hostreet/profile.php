<?php
session_start();
$conn = mysqli_connect("localhost", "root", "" , "sign-up");  
$emails =  $_SESSION["email"];
$query ="SELECT * FROM `sundaram`where (email='$emails') ";
      $result3 = mysqli_query($conn,$query);
while ($row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC)) {
	$name  = $row3["name"];
	$email =  $row3["email"];
    $password = $row3["password"];
    $passwords = $row3["passwords"];
}

?>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>




 
<h1>your profile information : </h1>
<table>
	 
	<TR><td> <?php echo "NAME : . $name"   ?></td></TR>
<tr><td> <?php echo"EMAIL ID: . $email " ?></td></tr>
 <tr><?php   echo "USER-NAME: .$passwords"  ?></tr>
 <img src="images/onedirection.jpg" style="border-radius: 50%;border-style: groove;" width="20%" align="right">
</table>

<table width="100%"   class="table1">
	<tr><th>MONTH-SESSION</th><th>ATTENDENCE</th></tr>
	<tr><td>January</td><td>89%</td></tr>
	<tr><td>february</td><td>89%</td></tr>
	<tr><td>March</td><td>89%</td></tr>
	<tr><td>April</td><td>56%</td></tr>
	<tr><td>May</td><td>67%</td></tr>
	 
</table>
<h3>
OverAll Attendence > 75%(ALLOWED)
</h3>
<style type="text/css">
	.table1{
		border-style: solid;
		border-width: 1px;
	}

</style>




<br><br>
 <button class="btn btn-primary" onclick="opens()"> Enhance your profile </button>

<script type="text/javascript">
	function opens() {
		window.open(" register.php");
	}
</script>

