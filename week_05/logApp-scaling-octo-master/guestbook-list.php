<?php
    include('config/config.php');
    include('config/db.php');


    $connection = $conn;
    $db_table_guest = " SELECT * FROM guest where role !='admin'";
    $table_guest = $connection->query($db_table_guest);
    $connection->close();
?>

<?php include('inc/header.php'); ?>
	<div class="container">
    <br/>
		<h2>GUEST LIST's Log</h2>
        <table class="table">
                <thead class="thead-dark">
                    <tr>
          
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Address</th>
                    <th scope="col">Job</th>
                    <th scope="col">Log Date and Time</th>
                    </tr>
                </thead>
		
			<div class="well">
                <tbody>
                <?php foreach($table_guest as $guest) : ?>
                    <tr>
             
                    <td><?php echo $guest['Lname'];?></td>
                    <td><?php echo $guest['Fname'];?></td>
                    <td><?php echo $guest['Address'];?></td>
                    <td><?php echo $guest['job'];?></td>
                    <td><?php echo $guest['Tlog'];?></td>
                    </tr>
                <?php endforeach; ?>   
                </tbody>
            </div>
        </table>
        <br/>

            <button type="button" class="btn btn-dark btn-sm" onclick="document.location='guestbook-login.php'">Logout</button>
</div>
<?php include('inc/footer.php'); ?>