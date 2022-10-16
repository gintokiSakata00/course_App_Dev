<?php
require('vendor/autoload.php');
$faker = Faker\Factory::create('en_PH');
echo $faker->date('Y-m-d h:m:s');

?>