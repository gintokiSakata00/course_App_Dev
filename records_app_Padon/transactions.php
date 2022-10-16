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
<!-- -- datelog, documentcode, action, office , employe (first and last_name), remarks -- -->
<body>

<?php 
        require('config/config.php');
        require('config/db.php');


        //get the value sent over search form
      
     
       
        //Define total number of results I want per page set to 8
        $number_per_page =10;

        //find the total number of results /rows stored in the db
        $query = "SELECT * FROM transaction";
        $result = mysqli_query($conn,$query);
        $num_of_results = mysqli_num_rows($result);

        //determine the total number of pages available
        $left_page = ceil($num_of_results/ $number_per_page);

        //determine which page is the visitor on
        if(!isset($_GET['page'])){
            $page =1;
        }else{
            $page =$_GET['page'];
        }
        //determine the sql limit starting number for the results on the display page
        $first_page_results = ($page-1) * $number_per_page;

        //CREATE QUERY FOR TRANSACTIONS CONNECTED TO OFFICE AND EMPLOYEE
        if(isset($_GET['search'])){

            $search = $_GET['search'];
       
                    if(strlen($search) > 0)
                    {
                    $query = 'SELECT * FROM record_app.transaction_ofc_emp where documentcode = ' .$search. ' order by documentcode , datelog  limit '.$first_page_results. ',' .$number_per_page; 
                    }
                    else{
                        $query = 'SELECT * FROM record_app.transaction_ofc_emp limit '.$first_page_results. ',' .$number_per_page; 
                    }
        }
        else
        {
            $query = 'SELECT * FROM record_app.transaction_ofc_emp limit '.$first_page_results. ',' .$number_per_page; 
        } 

        $result = mysqli_query($conn,$query);

        $transaction_table = mysqli_fetch_all($result, MYSQLI_ASSOC);

        mysqli_free_result($result);

        mysqli_close($conn);

?>
    <div class="wrapper">
        <div class="sidebar" data-color="orange" data-image="/assets/img/sidebar-5.jpg">

            <div class="sidebar-wrapper">
                <?php include('includes/sidebar.php'); ?>
               
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <?php include('includes/navbar.php'); ?>
          
            <div class="content">
                <div class="container-fluid">
                    <div class="section">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                            <br>
                            <div class="col-md-12">
                                <form action="transactions.php" method="GET">
                                    <input type="text" name="search" >
                                    <input type="submit" value="Search" class="btn btn-info btn-fill" >
                                </form>
                            </div>
                            <div class="col-md-12">
                            <a href="transactions_edit.php">
                                <button type="submit" class="btn btn-info btn-fill pull-right">ADD NEW RECORD</button>
                            </a>
                            <div class="card-header ">
                                    <h4 class="card-title">TRANSACTIONS TABLE</h4>
                                    <p class="card-category">The table row belows shows data from office table inside of record app database.</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">

                           <!-- -- datelog, documentcode, action, office , employe (first and last_name), remarks -- -->
                                        <thead>
                                            <th>NO</th>
                                            <th>Date Log</th>
                                            <th>Document Code</th>
                                            <th>Action</th>
                                            <th>Office Name</th>
                                            <th>Employee Name</th>
                                            <th>Remarks</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($transaction_table as $transaction_view_col): ?>
                                            <tr>
                                            <!-- datelog varchar(45) 
                                            action enum('IN','OUT') 
                                            name varchar(45) 
                                            emp_fullname varchar(92) 
                                            remarks varchar(100) -->
                                                <td><?php echo $transaction_view_col['id'] ?></td>
                                                <td><?php echo $transaction_view_col['datelog'] ?></td>
                                                <td><?php echo $transaction_view_col['documentcode'] ?></td>
                                                <td><?php echo $transaction_view_col['action'] ?></td>
                                                <td><?php echo $transaction_view_col['name'] ?></td>
                                                <td><?php echo $transaction_view_col['emp_fullname'] ?></td>
                                                <td><?php echo $transaction_view_col['remarks'] ?></td>
                                                <td>
                                                    <a href="transactions_edit.php?id=<?php echo $transaction_view_col['id']; ?>">
                                                    <button type="submit" class="btn btn-warning btn-fill pull-right">Edit</button>
                                                </a>
                                                </td>
                                            </tr>
                                           <?php endforeach ?>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <?php 
                        for($page=1; $page<=$left_page; $page++){
                            echo '<a href="transactions.php?page='.$page.'">'.$page.'</a>';
                        }
                    ?>
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
    <!--   -->
    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
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
