<?php 
                    include('header.php'); 
                    if(isset($_POST['submit'])){$id = $_POST['id'];$name = $_POST['name'];$email = $_POST['email'];$phone_number = $_POST['phone_number'];$address = $_POST['address'];$status = $_POST['status'];$sql = mysqli_query($con, "INSERT INTO `customers` 
                            VALUES ('','$id','$name','$email','$phone_number','$address','$status')");
                            echo '<script>window.open(\'customers.php\',\'_self\');</script>';
                    }
                ?><h2>Customers</h2>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Customers</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Customers</li>
  </ol>
</nav><form action='' method='POST'><div class='row m-0 p-0'><div class='col-md-6 col-12'><label>Id</label><input name='id' type='number' class='form-control col-12'></div><div class='col-md-6 col-12'><label>Full Name</label><input name='name' type='text' class='form-control col-12'></div><div class='col-md-6 col-12'><label>Email</label><input name='email' type='text' class='form-control col-12'></div><div class='col-md-6 col-12'><label>Phone Number</label><input name='phone_number' type='text' class='form-control col-12'></div><div class='col-md-6 col-12'><label>Address</label><input name='address' type='text' class='form-control col-12'></div><div class='col-md-6 col-12'><label>Status</label><input name='status' type='number' class='form-control col-12'></div><div class='col-12'><input name='submit' type='submit' value='Submit' class='btn btn-success'></div></div>
</form><?php include('footer.php'); ?>