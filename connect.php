<?php
	function connect_db(){

		/* 
		if($type==1){
		$con = mysqli_connect("localhost","cistrain_b3r7","chutaporn","cistrain_b3r7"); //บน sever
		}
		else{ 
		*/

		$con = mysqli_connect("localhost","root","","screen_test");
		mysqli_set_charset($con,"utf8");
		return $con;
	}

	
?>