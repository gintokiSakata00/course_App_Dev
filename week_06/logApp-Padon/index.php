<?php

    // require db connection
      require('config/config.php');
      require('config/db.php');

      // Check For Submit if it set 
      if(isset($_POST['submit']))
      {
            // Get form data
            // Use of mysql real escape function to remove characters that are often used in sql injection
            $lname = mysqli_real_escape_string($conn,$_POST['lname']);
            $fname = mysqli_real_escape_string($conn,$_POST['fname']);
            $address = mysqli_real_escape_string($conn,$_POST['address']);
            $gtype = mysqli_real_escape_string($conn,$_POST['gtype']);
            $role = mysqli_real_escape_string($conn,$_POST['role']);
            $pin = mysqli_real_escape_string($conn,$_POST['pin']);

            //concatenate first and lastname put to variable fullname
            $fullname = $fname;
            $fullname .=" ";
            $fullname .= $lname;
      
            //check if pin has lenght of 4 and if all is numeric
              if(is_numeric($pin) and strlen($pin)==4)
                {
                  $insert_to_guest = "INSERT INTO guest(Lname, Fname,Address,job,role,Tlog,fullname,pin4digit) VALUES('$lname', '$fname', '$address', '$gtype','$role',now(), '$fullname','$pin')";
                }
              else
                {
                  echo "pin must be numeric and only 4 digits";
                }


              //The query() / mysqli_query() function performs a query against a database.
              //conn is the database connection
              //insert to guest is the query
              if(mysqli_query($conn, $insert_to_guest))
              {
                //if condition is met go to the location of root url 
                //ROOT URL is defined in the db connections
                header('Location: '.ROOT_URL.'');
                exit();
              } 
              else 
              {
                //print the error
                echo 'ERROR: '. mysqli_error($conn);
              }
        
      
        
      
      }

  
?>


<?php include('inc/header.php'); ?>
<div class="container">
<br/>
  <h2>Registration</h2>

  <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" class="was-validated">
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
      <label for="uname">Job type:</label>
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

