<?php include('header.php'); ?><h2>Tickets <a href='add_tickets.php' class='btn btn-success'
        style='float: right;'>Insert</a></h2>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tickets</a></li>
          </ol>
        </nav><table class='table table-bordered table-highlighted table-striped'><tr><th>Id</th><th>Sender</th><th>Reciever</th><th>Message</th><th>File</th><th>Priority</th><th>Action</th></tr><?php
            $sql = mysqli_query($con, 'SELECT * FROM `tickets`');

            while($row = mysqli_fetch_array($sql)){

                ?><tr><td><?php echo $row['id']; ?></td><td><?php echo $row['sender']; ?></td><td><?php echo $row['reciever']; ?></td><td><?php echo $row['message']; ?></td><td><?php echo $row['file']; ?></td><td><?php echo $row['priority']; ?></td>
        <td>
            <a href='edit_tickets.php?id=<?php echo $row['priority']; ?>'>
                Update
            </a>
            <a href='remove_tickets.php?id=<?php echo $row['priority']; ?>'>
                Delete
            </a>
        </td>
    </tr><?php

            }

        ?></table><?php include('footer.php'); ?>