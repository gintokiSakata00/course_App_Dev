<?php

    //include db connection
    include('config/config.php');
    include('config/db.php');


    //putting db connection into variable $connection
    $connection = $conn;
    //mysql query for rows that has admin role
    $db_table_guest = " SELECT * FROM guest where role ='admin'";
    //fetch data mysql query  and db connection
    $table_guest = $connection->query($db_table_guest);
    $connection->close(); //close connection
?>

<!-- add header  -->
<?php include('inc/header.php'); ?>
	<div class="container">
    <br/>
		<h2>ADMIN LIST's Log</h2>
        <!-- table -->
        <table class="table">
                <thead class="thead-dark">
                    <!-- table row -->
                    <tr>
                        <!-- table head -->
                    <th scope="col">Fullname</th>
                    <th scope="col">Job</th>
                    <th scope="col">Address</th>
                    <th scope="col">Log Date and Time</th>
                    </tr>
                </thead>
		
			<div class="well">
                    <!-- table body -->
                <tbody>
                    <!-- foreach loop -->
                <?php foreach($table_guest as $guest) : ?>
                    <!-- table row -->
                    <tr>
                        <!-- table data -->
                    <td><?php echo $guest['fullname'];?></td>
                    <td><?php echo $guest['job'];?></td>
                    <td><?php echo $guest['Address'];?></td>
                    <td><?php echo $guest['Tlog'];?></td>
                    </tr>
                <?php endforeach; ?>   
                <!-- end table body -->
                </tbody>

            </div>

            <!--end table -->
        </table>
        <br/>

            <button type="button" class="btn btn-dark btn-sm" onclick="document.location='guestbook-login.php'">Logout</button>
</div>
<!-- include footer -->
<?php include('inc/footer.php'); ?>