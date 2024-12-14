<?php 
                    include('header.php'); 
                    if(isset($_POST['submit'])){
                      $title = $_POST['title'];
                      $pay = $_POST['pay'];
                      $detail = $_POST['detail'];
                      $subs_type = $_POST['subs_type'];
                      $sql = mysqli_query($con, "INSERT INTO `subscription` VALUES (NULL,'$title','$pay','$detail','$subs_type')");
                      echo '<script>window.open(\'subscription.php\',\'_self\');</script>';
                    }
                ?><h2>Subscriptions</h2>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Subscriptions</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Subscriptions</li>
    </ol>
</nav>
<form action='' method='POST'>
    <div class='row m-0 p-0'>
        <div class='col-md-6 col-12'><label>Title</label><input name='title' type='text' class='form-control col-12'>
        </div>
        <div class='col-md-6 col-12'><label>Pay</label><input name='pay' type='text' class='form-control col-12'></div>
        <div class='col-md-6 col-12'><label>Details</label><input name='detail' type='text' class='form-control col-12'>
        </div>
        <div class='col-md-6 col-12'>

            <label>Type</label>
            <select name='subs_type' class="form-select">
                <option value="Weekly">Weekly</option>
                <option value="Monthly">Monthly</option>
                <option value="Yearly">Yearly</option>
            </select>
        </div>
        <div class='col-12 mt-2'>
            <input name='submit' type='submit' value='Submit' class='btn btn-success'>
        </div>
    </div>
</form><?php include('footer.php'); ?>