<?php
	require("connect.php");
	$con=connect_db();

	session_start();

	if (empty($_FILES['img']['name'])) {
		$img="";
	}
	else{
		$pic_name=$_FILES['img']['name']; //ชื่อไฟล์
		$img = str_shuffle("abcde".date("dmYHis"))."_".$pic_name; //ไม่ให้ชื่อไฟล์เหมือนกัน
		$pic_temp=$_FILES['img']['tmp_name'];
		copy($pic_temp,"img/$img"); //คัดลอกรูปภาพ
	}


	mysqli_query($con,"INSERT INTO user 
		(username,
			password,
			fname,
			lname,
			img) VALUES(
			'$_POST[username]',
			'$_POST[password]',
			'$_POST[fname]',
			'$_POST[lname]',
			'$img')") or die(mysqli_error($con));

	mysqli_close($con);
	header("Location:profile_form.php");
	?>