<?php include('header.php'); $id = $_GET['id']; $sql = mysqli_query($con, "DELETE FROM `subscription` WHERE ``='$id'");echo '<script>window.open(\'subscription.php\',\'_self\');</script>';  include('footer.php'); ?>