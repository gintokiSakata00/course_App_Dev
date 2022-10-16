11 Seeding Database using PHP Faker
⛳️ Learning Outcomes

At the end of this lesson you will be able to:

Create a PHP file that populates fake data in your database.

 

PHP Faker is a PHP library that generates fake data. Fake data are used for testing or filling databases with dummy data.

When you want to test your application you have to populate your database with data; doing it manually using MySQL Workbench or PhpMyAdmin or other DBMS is tedious. Hence, using PHP Faker will help you to efficiently do the task. This library is not only available in PHP but also in Ruby, Pearl, Python, and various programming languages.

You can check the repository of PHP Faker here https://github.com/fzaninotto/FakerLinks to an external site.

The author Francois Zaninotto sunsetted the project because of time constraints, but developers can still use it. If you want to know more about that decision check the article written by the author himself explaining why and what happened to PHP Faker here https://marmelab.com/blog/2020/10/21/sunsetting-faker.htmlLinks to an external site.

How to set up a PHP faker?
The video provided 📹 01 setup PHP Faker.mp4 demonstrates how to set up the PHP faker using composer and a sample simple usage of faker.

$ composer req fzaninotto/faker
To create and initialize a faker generator, which can generate data by accessing properties named after the type of data you want.

Faker\Factory::create()


How to generate fake names?
The video  📹 02 Faking Names.mp4 demonstrates how to generate fake names, you can specify the gender of the name you want to generate as well as filter to the first name or last name.

Let’s take this Faker\Provider\en_US\Person from this link https://github.com/fzaninotto/FakerLinks to an external site. as an example. It shows how to generate fake data of a Person. For example, we want to form fake data which consists of title and name (e.g. Ms. Zane Stroman).


$faker->title()// this is for Title
$faker->name()// this is for Full name
How to use it in PHP code?
To display the generated fake data; encapsulate it in an echo.

```
<?php
require ('vendor/autoload.php');
$faker = Faker\Factory::create();
echo $faker->title() . " " . $faker->name() . "\n";
?>
```

To assign it in variables.

```
<?php
require ('vendor/autoload.php');
$faker = Faker\Factory::create();
$title = $faker->title(); 
$name = $faker->name();
?>
```

How to localize fake data?
Faker\Factory can take a locale as an argument, to return localized data. You can check here https://github.com/fzaninotto/Faker/tree/master/src/Faker/ProviderLinks to an external site. the list of available Fake locales.

```
$faker = Faker\Factory::create('en_PH');
```

The code above is the initialization of Faker\Factory accepting ‘en_PH’ as locale. Watch the video  📹 03 Localizing Philippines.mp4; this demonstrates how to use en_PH in generating Faker data.

How to fake optional value?
There are fields in your database that are optional such as Middle name. With an optional() modifier, you can produce optional fake values. Optional values can be null.

The code below will generate 5 last names (there is no middleName in Faker because middle names are last names too) and there is a 10% chance that it is null. The optional() function accepts a weight argument to specify the probability of receiving the default value.

optional($weight=0.5, $default=false) means there is a 50% chance that it will return false as a value.

```
<?php

require('vendor/autoload.php');
$faker = Faker\Factory::create();
for ($i = 0; $i < 6; $i++) 
{ 
echo $faker->optional($weight=.9, $default='null')->lastName . "\n";
}
?>
```

There are various fake data that you can use to populate your database from Person, Address, Phone Number to Html Lorem. Check the repository mentioned above for further details of the documentation.

After learning how to generate fake data using PHP Faker, you will now learn how to put those fake data in your database in an efficient manner.

For demonstration purposes let’s use your database in the logApp project. Go to your logApp local repository, add a folder named faker. Inside the faker folder create a file named insert_person.php.

Modify the code based on the settings in your DBMS and database. Change the password and database name in the initialization of variable $conn according to your connection string.

```
<?php

require('vendor/autoload.php');
$faker = Faker\Factory::create();
$conn = mysqli_connect("localhost","root","mypassword","mydatabasename");

if(!$conn)
{   
die(mysqli_error());
}  

for ($i=0; $i <= 10; $i++){   
$sql = "INSERT INTO mydatabasename.person(lname, fname, address, logdt) values('".$faker->lastName."','".$faker->firstName."', '".$faker->address."', '".$faker->date($format = 'Y-m-d H:i:s', $max = 'now')."')";     

mysqli_query($conn, $sql);}

?>
```

for ($i=0; $i <= 10; $i++){   
$sql = "INSERT INTO mydatabasename.person(lname, fname, address, logdt) values('".$faker->lastName."','".$faker->firstName."', '".$faker->address."', '".$faker->date($format = 'Y-m-d H:i:s', $max = 'now')."')";     

mysqli_query($conn, $sql);}

?>
The for loop in the program above will populate ten (10) rows of fake data to your table. You can add as many rows as you want.

👾 Practice Set 11-01
Create a PHP file that will load 100 rows of fake data to the userAccount table. This table is composed of the following fields: id, email, lastName, firstName, userName, and password.

👾 Practice Set 11-02
Create a PHP file that will load 20 rows of fake data to the cardDetail table. This table is composed of the following fields: ccid, creditCardType, creditCardNumber, creditCardExpirationDate, userIdNumber. The userIdNumber should be numbers from 1 to 100 only; because this is a foreign key from the reference table userAccount.