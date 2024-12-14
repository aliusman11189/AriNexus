<?php
                        include('header.php');
                        $id = $_GET['id'];
                        $sql = mysqli_query($con,"SELECT * FROM `subscription` WHERE `id` = '$id'");
                        $row = mysqli_fetch_array($sql);
                        if(isset($_POST['submit'])){
                          $title = $_POST['title'];
                          $pay = $_POST['pay'];
                          $detail = $_POST['detail'];
                          $subs_type = $_POST['subs_type'];
                          $sql = mysqli_query($con, " UPDATE `subscription` SET `title`='$title',`pay`='$pay',`detail`='$detail',`subs_type`='$subs_type' WHERE `id`='$id' ") or die(mysqli_error($con));
                        echo '<script>window.open(\'subscription.php\',\'_self\');</script>';
                            }
                    ?><h2>Subscriptions</h2>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Subscriptions</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Subscriptions</li>
    </ol>
</nav>
<form action='' method='POST'>
    <div class='row m-0 p-0'>
        <div class='col-md-6 col-12'><label>Title</label><input name='title' type='number' class='form-control col-12'
                value='<?php echo $row['title']; ?>'></div>
        <div class='col-md-6 col-12'><label>Pay</label><input name='pay' type='text' class='form-control col-12'
                value='<?php echo $row['pay']; ?>'></div>
        <div class='col-md-6 col-12'><label>Details</label><input name='detail' type='text' class='form-control col-12'
                value='<?php echo $row['detail']; ?>'></div>
        <div class='col-md-6 col-12'><label>Type</label><input name='subs_type' type='text' class='form-control col-12'
                value='<?php echo $row['subs_type']; ?>'></div>
        <div class='col-12'><input name='submit' type='submit' value='Submit' class='btn btn-success'></div>
    </div>
</form><?php include('footer.php'); ?>