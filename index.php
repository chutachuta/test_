<!DOCTYPE html>
<html>
<head>
  <title>home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://img.icons8.com/material/344/home-page.png">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap');

    body{
      font-family: 'Prompt', sans-serif;
      font-size: 15px;      
      padding: 50px;
    }
    .container{
      text-align: center;
    }
    .btn{
      width: 100px;
    }
    form{
      padding: 10px;
    }

  </style>
</head>
<body>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
  <div class="container">
    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Register</button>
  </div>

  <!-- Login -->
  <div class="modal" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form action="check_login.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label class="label">Username :</label>
              <input class="form-control" name="username" placeholder="Username" pattern="^[a-zA-Z0-9-_\.]+$" minlength="4" maxlength="12" title="A-Z, a-z, 0-9, _"  required>
            </div>
            <div class="mb-3">
              <label class="label">Password :</label>
              <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Register</button>
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
          </form>

      </div>
    </div>
  </div>

    <!-- Register -->
  <div class="modal" id="exampleModal2" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form action="add_user.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label class="label">Username :</label>
              <input class="form-control" name="username" placeholder="Username" pattern="^[a-zA-Z0-9-_\.]+$" minlength="4" maxlength="12" title="A-Z, a-z, 0-9, _"  required>
            </div>
            <div class="mb-3">
              <label class="label">Password :</label>
              <input class="form-control" name="password" placeholder="Password" minlength="6" required>
            </div>
            <div class="mb-3">
              <label class="label">First Name :</label>
              <input class="form-control" name="fname" placeholder="First Name" maxlength="60" required>
            </div>
            <div class="mb-3">
              <label class="label">Last Name :</label>
              <input class="form-control" name="lname" placeholder="Last Name" maxlength="60">
            </div>
            <label class="label">Profile Image :</label>
            <input class="form-control" type="file" name="img" accept=".jpg, .jpeg, .png, .bmp" required>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Register</button>
        </div>
          </form>

      </div>
    </div>
  </div>




  </body>
  </html>