<?php

require('vendor/autoload.php');
$faker = Faker\Factory::create('en_PH');
$conn = mysqli_connect("localhost","root","gintoki00","mydatabase_gil");

if(!$conn)
{   
die(mysqli_connect_error());
}  

    for ($i=0; $i < 100; $i++)
    {  
        //filter password only contains numeric and letters
        $fakepass = preg_replace('/[^a-z 0-9]/i','a',$faker->password);
        $sql = "INSERT INTO mydatabase_gil.userdata(email, firstname, lastname, username, password) values('".$faker->email."','".$faker->firstName."','".$faker->lastName."', '".$faker->userName."', '".$fakepass."')";     
        mysqli_query($conn, $sql);
    }

?>