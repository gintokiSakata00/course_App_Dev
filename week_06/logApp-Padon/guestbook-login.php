<?php
    //include db connection and configuration
    include('config/config.php');
    include('config/db.php');




    //check if input name and pass where set (not null)
    if(isset($_POST['name']) and isset($_POST['pass'])) {
        //get the set values of inputs to php variable container  
        $firstname = $_POST['name'];
        $guest_pass = $_POST['pass'];

        //guery to filter records that has the value of firstname
        $db_table_member = "SELECT * FROM guest where Fname ='$firstname'";
        //fetch the results of query and the $conn which is the db config variable
        $table_member = mysqli_fetch_array(mysqli_query($conn,$db_table_member));
        
            //check if user exists and if role is admin
            //square brackets defines the column name which has one value filtered by the query
            if($firstname == $table_member['Fname']  and $guest_pass == $table_member['pin4digit']  and $table_member['role'] == 'admin')
            {
              //go to admin-list
              header("Location: admin-list.php");
              exit();
              

            } 
            //check if user exists and if roles is member
            else if ($firstname == $table_member['Fname'] and $guest_pass == $table_member['pin4digit'] and $table_member['role']  == 'member'){
              //go to member-list
              header("Location: guestbook-list.php");
              exit();
            }
            else
            {
              //print user does not exist
              echo "user is not admin or a member, make sure you are";
            }

        
      
    }
 

?>
<?php include('inc/header.php'); ?>
  <br/>
  <div style="width:30%; margin: auto; text-align: center;">
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" class="form-signin">

          <img class="mb-4" src="img/bootstrap.svg" alt="" width="100" height="100">
          <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

          <label for="inputEmail" class="sr-only">Enter First Name</label>
          <input type="text" id="role" name="name" class="form-control" placeholder="Enter First name" required="" autofocus="">
          <br>

          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="pass" name="pass" class="form-control" placeholder="4 digit Pin" required="">
          <br>
        
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button type="submit" name="submit" value="Submit" class="btn btn-lg btn-primary btn-block">Sign in</button>

        </form>
  </div>

<?php include('inc/footer.php'); ?>