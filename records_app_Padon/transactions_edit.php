<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body>

<?php
            require('config/config.php');
            require('config/db.php');

                if(isset( $_GET['id']) ){
                    $id = $_GET['id'];
                }
                
                $query = "SELECT * FROM transaction where id=". $id;
                
                //get result query
                $result = mysqli_query($conn,$query);
                
                
                //initilize table colum values from inputs
                if(mysqli_num_rows($result)==1){

                    //fetch data
                    $transaction = mysqli_fetch_array($result);
                    $employee_id = $transaction['employee_id'];
                    $office_id = $transaction['office_id'];
                    $action = $transaction['action'];
                    $remarks = $transaction['remarks'];
                    $documentcode = $transaction['documentcode'];
                
            }
                //free connection
            mysqli_free_result($result);
                //close connection
            mysqli_close($conn);

            ?>

    <div class="wrapper">
        <div class="sidebar" data-color="orange" data-image="assets/img/sidebar-5.jpg">

            <div class="sidebar-wrapper">
                <?php include('includes/sidebar.php'); ?>
      
            </div>
        </div>
        <div class="main-panel">
         
            <?php include('includes/navbar.php'); ?>
      
            <?php
          
            require('config/db.php');


            //chech button submit if submitted
            // id int AI PK 
            // employee_id int 
            // office_id int 
            // datelog varchar(45) 
            // action enum('IN','OUT') 
            // remarks varchar(100) 
            // documentcode varchar(45)
            if(isset($_POST['submit'])){
                $employee_id = mysqli_real_escape_string($conn,$_POST['employee_id']);
                $office_id = mysqli_real_escape_string($conn,$_POST['office_id']);
                $action = mysqli_real_escape_string($conn,$_POST['action']);
                $remarks = mysqli_real_escape_string($conn,$_POST['remarks']);
                $documentcode = mysqli_real_escape_string($conn,$_POST['documentcode']);
              
                //create insert query
                $query = "UPDATE transaction set employee_id ='$employee_id' ,office_id='$office_id' ,datelog =now() ,action ='$action', remarks= '$remarks' ,documentcode ='$documentcode'
                where id =".$id;


                //execute query
                if(mysqli_query($conn,$query)){
                  //you can use this to check if query has been executed
                }else{
                    echo 'Error : '.mysqli_error($conn);
                }
            }
            ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="section">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">UPDATE TRANSACTIONS</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                                        <div class="row">
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>Document Code</label>
                                                    <input type="text" class="form-control" name="documentcode" value="<?php echo $documentcode; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Action</label>
                                                    <select name="action" class="form-control" value="<?php echo $action; ?>">
                                                        <option>IN</option>
                                                        <option>OUT</option>
                                                        <option>COMPLETE</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label for="remarks">Remarks</label>
                                                    <input type="text" class="form-control" name="remarks" value="<?php echo $remarks; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                        <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="firstname">Firstname</label>
                                                    
                                                    <input type="text" class="form-control" name="firstname" value="<?php 
                                                     $query = "SELECT emp.firstname as firstname FROM transaction tra
                                                     inner join employee emp on tra.employee_id = emp.id where tra.id =". $id;
                                                    $result = mysqli_query($conn,$query);
                                                    $employee = mysqli_fetch_array($result);
                                                    echo $employee['firstname'];
                                                  
                                                    ?>
                                                    ">
                                                </div>
                                            </div>
                                            <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="lastname">Lastname</label>
                                                    <input type="text" class="form-control" name="lastname" value="<?php  
                                                    $query = "SELECT emp.lastname as lastname FROM transaction tra
                                                    inner join employee emp on tra.employee_id = emp.id where tra.id =". $id;
                                                    $result = mysqli_query($conn,$query);
                                                    $employee = mysqli_fetch_array($result);
                                                    echo $employee['lastname'];
                                              
                                                    ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Office</label>
                                                    <select name="office_id" class="form-control" >
                                                  
                                                    <?PHP
                                                            $query = "SELECT tra.office_id as office_id, ofc.name as name FROM transaction tra inner join office ofc on tra.office_id = ofc.id group by name";
                                                            $result = mysqli_query($conn, $query);
                                                            while ($row = mysqli_fetch_array($result)){
                                                                if($row['office_id']==$id){
                                                                    echo "<option value=".$row['id']."selected>".$row['name']."</option>";
                                                                }else{
                                                                    echo "<option value=".$row['id'].">".$row['name']."</option>";

                                                                }
                                                             
                                                            }
                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                        <!-- </div>
                                        <div class="row"> -->
                                   
                                       
                                        </div>
                                   
                                        <button type="submit" name="submit" value="submit" class="btn btn-info btn-fill pull-right">Save Info</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="../assets/img/faces/face-3.jpg" alt="...">
                                            <h5 class="title">Mike Andrew</h5>
                                        </a>
                                        <p class="description">
                                            michael24
                                        </p>
                                    </div>
                                    <p class="description text-center">
                                        "Lamborghini Mercy
                                        <br> Your chick she so thirsty
                                        <br> I'm in that two seat Lambo"
                                    </p>
                                </div>
                                <hr>
                                <div class="button-container mr-auto ml-auto">
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-google-plus-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
   
 -->
</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
</html>
