<?php
    //require autoload file
    require('vendor/autoload.php');
    //create faker initializer with local country

    $faker = Faker\Factory::create('en_PH');
    //db connections
    $conn = mysqli_connect("localhost","root","gintoki00","mydatabase_gil");

    //check if connection fails
    if(!$conn){  
        die(mysqli_connect_error());
    }  

        for ($i=0; $i < 20; $i++)
        { 
        //random from 1-100
        $userid = rand(1,100);
        //insert into command
        $sql = "INSERT INTO mydatabase_gil.carddetail( creditcardtype, creditcardnumber, creditcardexpirationdate, useridnumber) values('".$faker->creditcardtype."','".$faker->creditcardnumber."','".$faker->creditcardexpirationdate->format('Y-m-d H:i:s')."', '".$userid."')";     
        //fetch insert into command and connection
        mysqli_query($conn, $sql);
        }

?>