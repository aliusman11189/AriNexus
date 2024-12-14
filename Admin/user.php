<?php include('header.php'); ?><h2>Users <a href='add_user.php' class='btn btn-success'
        style='float: right;'>Insert</a></h2>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Users</a></li>
          </ol>
        </nav><table class='table table-bordered table-highlighted table-striped'><tr><th>ID</th><th>Full Name</th><th>Phone Number</th><th>Email</th><th>Password</th><th>Status</th><th>Action</th></tr><?php
            $sql = mysqli_query($con, 'SELECT * FROM `user`');

            while($row = mysqli_fetch_array($sql)){

                ?><tr><td><?php echo $row['id']; ?></td><td><?php echo $row['name']; ?></td><td><?php echo $row['phone_number']; ?></td><td><?php echo $row['email']; ?></td><td><?php echo $row['password']; ?></td><td><?php echo $row['status']; ?></td>
        <td>
            <a href='edit_user.php?id=<?php echo $row['id']; ?>'>
                Update
            </a>
            <a href='remove_user.php?id=<?php echo $row['id']; ?>'>
                Delete
            </a>
        </td>
    </tr><?php

            }

        ?></table><?php include('footer.php'); ?>