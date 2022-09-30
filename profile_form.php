<?php
	session_start();

	require("connect.php");
	$con = connect_db();

	$detail=mysqli_query($con,"SELECT * FROM user")or die("query1 error =>".mysqli_error($con));
	list($id,$username,$password,$fname,$lname,$img) = mysqli_fetch_row($detail);
?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="https://img.icons8.com/material/344/home-page.png">

  <!-- Bootstrap -->
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  	<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap');

    body{
      font-family: 'Prompt', sans-serif;
      margin-top:30px;
    }
	.card {
		padding: 20px;
	    position: relative;
	    background-color: #fff;
	    border: 0 solid transparent;
	    border-radius: .25rem;
	    margin-bottom: 1.5rem;
	    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
	}
	.btn{
      width: 140px;
    }

	</style>

</head>
<body>

	<!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  

	<div class="container">
	<div class="main-body">
		<div class="row">
			<div class="col-lg-3">
			<div class="card">
				<div class="card-body">
					<div class="d-flex flex-column align-items-center text-center">
						<?php							
							echo "<img src='img/$img' width=150 height=150>";  
						?>
					</div>
				</div>
			</div>

			<div class="row lo">
				<div class="col-sm-3"></div>
				<div class="col-sm-8 text-secondary">
					<a type="button" class="btn btn-secondary" href="index.php">Log out</a>
				</div>
			</div>

		</div>
			<div class="col-lg-9">
				<div class="card">
					<div class="card-body">
						<div class="row mb-3">
							<div class="col-sm-3">
								<h6 class="mb-0">Username :</h6>
							</div>
								<div class="col-sm-8 text-secondary">
									<input type="hidden" name="id" value="<?php echo $id ?>" required>
								<input class="form-control" type="text" name="username" value="<?php echo "$username"; ?>" readonly>
							</div>
						</div>
							<div class="row mb-3">
							<div class="col-sm-3">
								<h6 class="mb-0">Password :</h6>
							</div>
							<div class="col-sm-8 text-secondary">
								<input class="form-control" type="text" name="password" value="<?php echo "$password"; ?>" readonly>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-sm-3">
								<h6 class="mb-0">First Name :</h6>
							</div>
							<div class="col-sm-8 text-secondary">
								<input class="form-control" type="text" name="fname" value="<?php echo "$fname"; ?>" readonly>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-sm-3">
								<h6 class="mb-0">Last Name :</h6>
							</div>
							<div class="col-sm-8 text-secondary">
								<input class="form-control" type="text" name="lname" value="<?php echo "$lname"; ?>" readonly>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3"></div>
							<div class="col-sm-8 text-secondary">
								<?php 
									echo "<a class='btn btn-primary' href='profile_edit_form.php?id=$id'>Edit Profile</a>";
								?>
							</div>
						</div>
					</div>		
				</div>
			</div>
	</div>
	</div>
	






</body>
</html>