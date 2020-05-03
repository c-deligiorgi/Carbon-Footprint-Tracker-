<?php
include 'Database.php' ;

if(isset($_POST['Company_ID'])){
	$uname = $_POST['Company_ID'];
	$Password = $_POST['Password'];

	$sql = "SELECT * FROM user WHERE Company_ID='".$uname."' AND Password='".$Password."'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_num_rows($result);

	if($row > 0){
                                               session_start();
                                              $_SESSION["uname"]=$uname;
		echo "<script>alert('Welcome to Sage');</script>";
                                                echo  "<script >window.location.href='/2019-20/csc8005/Team-1/Final/main.php';</script>";
                                              
                                               exit();
	} else{
		echo "<script>alert('Incorrect Please try again.');window.location.href='/2019-20/csc8005/Team-1/Final/logout.php';</script>";
		
                                               
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!--To ensure proper rendering and touch zooming-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="css/global.css" type="text/css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="icon" href="img/icon.png">
</head>
<body>
<div class="container-fluid bg">
	<div class="row">
		<div class = "col-md-4 col-sm-4 col-xs-12"></div>
		<div class = "col-md-4 col-sm-4 col-xs-12">
			<!--code from Bootstrap CSS begin-->
			<form method="POST" action="" class="form-container">  <!--USERPAGE REMEMBER TO CHANGE HERE! -->
				<h1>Login Form</h1> 
				<div class="form-group">
					<label for="exampleInputID1">Company_ID</label>
			    	<input type="Company_ID" class="form-control" name="Company_ID" placeholder="Company_ID">
			  </div>
			  <div class="form-group">
			    	<label for="exampleInputPassword1">Password</label>
			    	<input type="Password" class="form-control" name="Password" placeholder="Password">
			  </div>
			  <div class="checkbox">
			  	<label>
			  		<input type="checkbox"> Remember me
			    </label>
			  </div>
			  <button type="submit" class="btn btn-success btn-block">Submit</button>
			</form>
			<!--code from Bootstrap CSS end-->
		</div>
		<div class = "col-md-4 col-sm-4 col-xs-12"></div>
	</div>
</div>
<img src="img/Sage_logo.png" alt="SageLogo" />
<div class ="inscription-container">
	<address>
		<strong>Sage Group plc</strong><br>
		North Park<br>
		Newcastle upon Tyne<br>
		NE13 9AA<br>
		Phone: (+44) 1914795955
	</address>

	<address>
		<strong>Website:</strong><br>
		<a href="https://www.sage.com/en-gb/" target="_blank">https://www.sage.com/en-gb/</a>
	</address>
</div>

</body>
</html>