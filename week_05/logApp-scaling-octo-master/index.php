<?php
	require('config/config.php');
	require('config/db.php');

	// Check For Submit
	if(isset($_POST['submit'])){
		// Get form data
		$lname = mysqli_real_escape_string($conn,$_POST['lname']);
		$fname = mysqli_real_escape_string($conn,$_POST['fname']);
		$address = mysqli_real_escape_string($conn,$_POST['address']);
    $gtype = mysqli_real_escape_string($conn,$_POST['gtype']);
    $role = mysqli_real_escape_string($conn,$_POST['role']);
    $pin = mysqli_real_escape_string($conn,$_POST['pin']);
    $fullname = $fname;
    $fullname .=" ";
    $fullname .= $lname;
   
    if(is_numeric($pin) and strlen($pin)==4){
      $insert_to_guest = "INSERT INTO guest(Lname, Fname,Address,job,role,Tlog,fullname,pin4digit) VALUES('$lname', '$fname', '$address', '$gtype','$role',now(), '$fullname','$pin')";
     
   
    }else{
      echo "pin must be numeric and only 4 digits";
    }
    
  
		

		if(mysqli_query($conn, $insert_to_guest)){
      header('Location: '.ROOT_URL.'');
   
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
    
   
    // header("location: index.php");
    // exit();
  
	}

  
?>


<?php include('inc/header.php'); ?>
<div class="container">
<br/>
  <h2>Registration</h2>

  <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" class="was-validated" >
    <div class="form-group">
      <label for="uname">Last name:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="lname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="uname">First name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="gtype" placeholder="Enter job type" name="gtype" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="uname">Role type:</label>
      <input type="text" class="form-control" id="role" placeholder="Enter role type" name="role" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="uname">4 digit Pin:</label>
      <input type="password" class="form-control" id="pin" placeholder="Enter 4 digit pin" name="pin" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="uname">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
    
  </form>
</div>
<?php include('inc/footer.php'); ?>

