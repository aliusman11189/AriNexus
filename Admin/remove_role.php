<?php include('header.php'); $id = $_GET['id']; $sql = mysqli_query($con, "DELETE FROM `role` WHERE ``='$id'");echo '<script>window.open(\'role.php\',\'_self\');</script>';  include('footer.php'); ?>