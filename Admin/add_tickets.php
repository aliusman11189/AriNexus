<?php 
                    include('header.php'); 
                    if(isset($_POST['submit'])){$id = $_POST['id'];$sender = $_POST['sender'];$reciever = $_POST['reciever'];$message = $_POST['message'];$file = $_POST['file'];$sql = mysqli_query($con, "INSERT INTO `tickets` 
                            VALUES ('','$id','$sender','$reciever','$message','$file',)");
                            echo '<script>window.open(\'tickets.php\',\'_self\');</script>';
                    }
                ?><h2>Tickets</h2>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Tickets</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Tickets</li>
  </ol>
</nav><form action='' method='POST'><div class='row m-0 p-0'><div class='col-md-6 col-12'><label>Id</label><input name='id' type='number' class='form-control col-12'></div><div class='col-md-6 col-12'><label>Sender</label><input name='sender' type='text' class='form-control col-12'></div><div class='col-md-6 col-12'><label>Reciever</label><input name='reciever' type='text' class='form-control col-12'></div><div class='col-md-6 col-12'><label>Message</label><input name='message' type='text' class='form-control col-12'></div><div class='col-md-6 col-12'><label>File</label><input name='file' type='text' class='form-control col-12'></div><div class='col-12'><input name='submit' type='submit' value='Submit' class='btn btn-success'></div></div>
</form><?php include('footer.php'); ?>