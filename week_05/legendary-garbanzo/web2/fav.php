<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
        //no need to check if the length of the input is greater than 0
        //if the condition isset is true meaning the input has value meaning length is already greater than 0
        if(isset($_POST['username']))
        { 
            //store the value of input named username to the php variable container
            $username = $_POST['username'];
            echo "Thanks for your selection $username";
                if(isset($_POST['color']) and isset($_POST['dish']) )
                { 
                    //same goes here
                    $color = $_POST['color'];
                    $dish = $_POST['dish'];
                    echo "You really enjoy $dish especially with a nice $color wine";
                }
                else
                {
                    echo "Both color and dish must be set to something";
                }
        } 
        else 
        {
            echo "Give a name";
        }
    ?>
</body>
</html>