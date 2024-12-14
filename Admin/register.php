
<?php include "db_config.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OMS</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="main-content container">

<div class="register_form">
  
<h2>OMS <br> <small>Register</small></h2>
<?php
if (isset($_POST['submit'])) {$name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $status = $_POST['status'];

    if(strlen($_POST['password']) > 9){
      echo "<div classs='alert alert-danger'>Password should be in 9 characters limit.</div>";
      exit();
    }
    $sql = mysqli_query($con, "INSERT INTO `user` VALUES ('','$name','$phone_number','$email','$password','$status')");
    echo '<script>window.open(\'user.php\',\'_self\');</script>';
}
?>
<form action='' method='POST'>
    <div class='row m-0 p-0'>
        <div class='col-12 input-bar'><label>Full Name</label><input name='name' type='text' class='form-control col-12'>
        </div>
        <div class='col-12 input-bar'><label>Phone Number</label><input name='phone_number' type='text'
                class='form-control col-12'></div>
        <div class='col-12 input-bar'><label>Email</label><input name='email' type='text' class='form-control col-12'>
        </div>
        <div class='col-12 input-bar'><label>Password</label><input name='password' type='text'
                class='form-control col-12'></div>
        <div class='col-12 input-bar'><label>Status</label><input name='status' type='number'
                class='form-control col-12'></div>
        <div class='col-12'>
          <input name='submit' type='submit' value='Register' class='btn btn-success'>
          <p class="mt-2">Already have an account? <a href="login.php">Login Here</a></p>
        </div>
    </div>
</form>
</div>
</div>
<style>
  .register_form{
    width: 350px !important;
    height: fit-content;
    position: absolute;
    top: 0px;
    bottom: 0px;
    right: 0px;
    left: 0px;
    margin: auto;
    box-shadow: 0px 0px 4px 4px lightgray;
    border-radius: 10px;
    padding: 10px;
  }
  .register_form h2{
    text-align: center;
  }

  .register_form .input-bar{
    margin-top: 10px;
    margin-bottom: 5px;
  }

  .register_form input[type='submit']{
    margin-top: 10px;
    border-radius: 10px;
  }
</style>

<script src="js/bootstrap.js"></script>
<script src="js/jquery.js"></script>
<script src="js/datatable.js"></script>
<script src="js/main.js"></script>
</body>

</html>