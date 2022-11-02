<?php
session_start();
    if(isset($_SESSION['visit_counter'])){
    $_SESSION['visit_counter']+=1; 

        switch($_SESSION['visit_counter']){
            case 5:
                echo "Thank you for visiting a lot";
            break;
            case 10:
                header('Location: congratulations.php');
                exit();
            break;
        }
    } 
    else 
    {
    $_SESSION['visit_counter']=1; 
    }

    if(isset($_GET['reset'])){
    session_destroy();
    header("Location: index.php");
    exit();
    } 
?>

<h1>Hello</h1>
<p>You have visited this page <?php echo $_SESSION['visit_counter']; ?> times</p>
<p><a href="?reset=true">Reset</a></p>
