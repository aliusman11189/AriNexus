<?php include('header.php'); ?><h2>Subscriptions <a href='add_subscription.php' class='btn btn-success'
        style='float: right;'>Insert</a></h2>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Subscriptions</a></li>
          </ol>
        </nav><table class='table table-bordered table-highlighted table-striped'><tr><th>Title</th><th>Pay</th><th>Details</th><th>Type</th><th>Action</th></tr><?php
            $sql = mysqli_query($con, 'SELECT * FROM `subscription`');

            while($row = mysqli_fetch_array($sql)){

                ?><tr><td><?php echo $row['title']; ?></td><td><?php echo $row['pay']; ?></td><td><?php echo $row['detail']; ?></td><td><?php echo $row['subs_type']; ?></td>
        <td>
            <a href='edit_subscription.php?id=<?php echo $row['id']; ?>'>
                Update
            </a>
            <a href='remove_subscription.php?id=<?php echo $row['id']; ?>'>
                Delete
            </a>
        </td>
    </tr><?php

            }

        ?></table><?php include('footer.php'); ?>