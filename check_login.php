<?php
	session_start();

	require("connect.php");
	$con = connect_db();

	$user_form=$_POST['username'];
	$pwd_form=$_POST['password']; 

	$user=mysqli_query($con,"SELECT * FROM user WHERE username='$user_form' AND password='$pwd_form'")or die(mysqli_error());

	list($user_db,$pwd_db)=mysqli_fetch_row($user);

	if($user_form=$user_db and $pwd_form == $pwd_db){
		//echo "Login OK";
		$_SESSION['valid_user']=$user_db;
		echo "<script>alert('welcome')</script>";
	}else {
		//echo "Login Fail";
		$_SESSION['valid_user']="";
		echo "<script>alert('username or password is incorrect')</script>";
	}

	mysqli_free_result($user);
	mysqli_close($con);

	header("Location:profile_form.php");
?>
