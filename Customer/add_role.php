<?php 
                    include('header.php'); 
                    if(isset($_POST['submit'])){$id = $_POST['id'];$name = $_POST['name'];$sql = mysqli_query($con, "INSERT INTO `role` 
                            VALUES ('','$id','$name')");
                            echo '<script>window.open(\'role.php\',\'_self\');</script>';
                    }
                ?><h2>Role</h2>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Role</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Role</li>
  </ol>
</nav><form action='' method='POST'><div class='row m-0 p-0'><div class='col-md-6 col-12'><label>Id</label><input name='id' type='number' class='form-control col-12'></div><div class='col-md-6 col-12'><label>Name</label><input name='name' type='text' class='form-control col-12'></div><div class='col-12'><input name='submit' type='submit' value='Submit' class='btn btn-success'></div></div>
</form><?php include('footer.php'); ?>