<?php include('header.php'); ?><h2>Role <a href='add_role.php' class='btn btn-success'
        style='float: right;'>Insert</a></h2>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Role</a></li>
          </ol>
        </nav><table class='table table-bordered table-highlighted table-striped'><tr><th>Id</th><th>Name</th><th>Action</th></tr><?php
            $sql = mysqli_query($con, 'SELECT * FROM `role`');

            while($row = mysqli_fetch_array($sql)){

                ?><tr><td><?php echo $row['id']; ?></td><td><?php echo $row['name']; ?></td>
        <td>
            <a href='edit_role.php?id=<?php echo $row['']; ?>'>
                Update
            </a>
            <a href='remove_role.php?id=<?php echo $row['']; ?>'>
                Delete
            </a>
        </td>
    </tr><?php

            }

        ?></table><?php include('footer.php'); ?>