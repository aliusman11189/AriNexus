<?php include('header.php'); ?><h2>Customers <a href='add_customers.php' class='btn btn-success'
        style='float: right;'>Insert</a></h2>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Customers</a></li>
          </ol>
        </nav><table class='table table-bordered table-highlighted table-striped'><tr><th>Id</th><th>Full Name</th><th>Email</th><th>Phone Number</th><th>Address</th><th>Subscription</th><th>Status</th><th>Action</th></tr><?php
            $sql = mysqli_query($con, 'SELECT * FROM `customers`');

            while($row = mysqli_fetch_array($sql)){

                ?><tr><td><?php echo $row['id']; ?></td><td><?php echo $row['name']; ?></td><td><?php echo $row['email']; ?></td><td><?php echo $row['phone_number']; ?></td><td><?php echo $row['address']; ?></td><td><?php echo $row['subscription']; ?></td><td><?php echo $row['status']; ?></td>
        <td>
            <a href='edit_customers.php?id=<?php echo $row['subscription']; ?>'>
                Update
            </a>
            <a href='remove_customers.php?id=<?php echo $row['subscription']; ?>'>
                Delete
            </a>
        </td>
    </tr><?php

            }

        ?></table><?php include('footer.php'); ?>