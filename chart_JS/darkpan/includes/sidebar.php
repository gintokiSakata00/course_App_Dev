<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/gintoki.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">GIL PADON</h6>
                        <span>STUDENT</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="bar_task_1.php" class="nav-item nav-link <?php if(basename($_SERVER['PHP_SELF'])=="bar_task_1.php"){
                        echo "active";
                    }else{
                        echo "";
                    } ?>"><i class="fa fa-chart-bar me-2" ></i>EXPENSIVE</a>
                    <a href="bar_task_2.php" class="nav-item nav-link <?php if(basename($_SERVER['PHP_SELF'])=="bar_task_2.php"){
                        echo "active";
                    }else{
                        echo "";
                    } ?>"><i class="fa fa-chart-bar me-2"></i>ASSISTED</a>
                    <a href="bar_task_3.php" class="nav-item nav-link <?php if(basename($_SERVER['PHP_SELF'])=="bar_task_3.php"){
                        echo "active";
                    }else{
                        echo "";
                    } ?>"><i class="fa fa-chart-bar me-2"></i>ORDER COUNT</a>
                    <a href="bar_task_4.php" class="nav-item nav-link <?php if(basename($_SERVER['PHP_SELF'])=="bar_task_4.php"){
                        echo "active";
                    }else{
                        echo "";
                    } ?>"><i class="fa fa-chart-bar me-2"></i>CHEAPEST</a>
                   
                </div>
            </nav>
        </div>