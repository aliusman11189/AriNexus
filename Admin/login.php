
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
  
<h2>OMS <br> <small>Login</small></h2>

<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = mysqli_query($con, "SELECT * FROM `users` WHERE `email` = '".$email."' AND `password`='".$password."'");
    if($sql){while($row = mysqli_fetch_array($sql)){
        session_start();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['role'] = $row['role'];
        echo '<script>window.open(\'user.php\',\'_self\');</script>';
    }}
    echo '<script>window.open(\'user.php\',\'_self\');</script>';
}
?>

<form action='' method='POST'>
    <div class='row m-0 p-0'>
        <div class='col-12 input-bar'>
            <label>Email</label>
            <input name='email' type='text' class='form-control col-12'>
        </div>
        <div class='col-12 input-bar'>
            <label>Password</label>
            <input name='password' type='text' class='form-control col-12'>
        </div>
        <div class='col-12'>
            <input name='submit' type='submit' value='Login' class='btn btn-success'>
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