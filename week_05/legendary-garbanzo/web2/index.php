<html>
<head><title>Your Favorite</title>
<style>
    .form{
        margin: 0 auto; 
        width:250px;
    }
</style>
</head>
<body>

    <form action="fav.php" method="post" class="form">
        <b>Please enter your first name: </b><br/>
        <input type="text" size="45" name="username"><br/>

        <b>Please select your favorite wine:</b><br/>
        <input type="radio" name="color" value="white">White</input><br/>
        <input type="radio" name="color" value="rose">Rose</input><br/>
        <input type="radio" name="color" value="red">Red</input><br/>
        <b>Please enter your favorite dish: </b><br/>

        <input type="text" size="45" name="dish"><br/><br/>
        <input type="submit" value="Submit this form"><br/>
    </form>
</body>

</html>