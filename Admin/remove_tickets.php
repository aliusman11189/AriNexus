<?php include('header.php'); $id = $_GET['id']; $sql = mysqli_query($con, "DELETE FROM `tickets` WHERE `priority`='$id'");echo '<script>window.open(\'tickets.php\',\'_self\');</script>';  include('footer.php'); ?>