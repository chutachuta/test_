<?php 
	require("connect.php");
	$con=connect_db();

	session_start();

	if (empty($_FILES['img']['name'])) {
		$img="";
		$update_pic="";
	}
	else{
		$pic_name=$_FILES['img']['name']; //ชื่อไฟล์
		$img = str_shuffle("abcde".date("dmYHis"))."_".$pic_name; //ไม่ให้ชื่อไฟล์เหมือนกัน
		$pic_temp=$_FILES['img']['tmp_name'];
		copy($pic_temp,"img/$img"); //คัดลอกรูปภาพ
		$update_pic=",img='$img'";
	}

	mysqli_query($con, "UPDATE user SET
		password='$_POST[password]',
		fname='$_POST[fname]',
		lname='$_POST[lname]'
		$update_pic
		WHERE id ='$_POST[id]';")or die(mysqli_error($con));

	$id = $_POST[id];
	$detail=mysqli_query($con,"SELECT * FROM user WHERE id='$id'")or die("query1 error".mysqli_error($con));
	list($id,$username,$password,$fname,$lname,$img) = mysqli_fetch_row($detail);


	mysqli_close($con);
	header("Location:profile_form.php");

?>