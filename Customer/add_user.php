<?php 
                    include('header.php'); 
                    if(isset($_POST['submit'])){$name = $_POST['name'];$phone_number = $_POST['phone_number'];$email = $_POST['email'];$password = $_POST['password'];$status = $_POST['status'];$sql = mysqli_query($con, "INSERT INTO `user` 
                            VALUES ('','$name','$phone_number','$email','$password','$status')");
                            echo '<script>window.open(\'user.php\',\'_self\');</script>';
                    }
                ?><h2>Users</h2>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Users</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Users</li>
  </ol>
</nav><form action='' method='POST'><div class='row m-0 p-0'><div class='col-md-6 col-12'><label>Full Name</label><input name='name' type='text' class='form-control col-12'></div><div class='col-md-6 col-12'><label>Phone Number</label><input name='phone_number' type='text' class='form-control col-12'></div><div class='col-md-6 col-12'><label>Email</label><input name='email' type='text' class='form-control col-12'></div><div class='col-md-6 col-12'><label>Password</label><input name='password' type='text' class='form-control col-12'></div><div class='col-md-6 col-12'><label>Status</label><input name='status' type='number' class='form-control col-12'></div><div class='col-12'><input name='submit' type='submit' value='Submit' class='btn btn-success'></div></div>
</form><?php include('footer.php'); ?>