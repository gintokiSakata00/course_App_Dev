<?php
// set cookies
    if(isset($_POST['username']) and  isset($_POST['password']))
    {
        $username = $_POST['username'];
        setcookie('user_name',$username , time() + (86400 * 30), "/");
        $name = "auth";
        $value = "ok";
        setcookie($name, $value, time() + (86400 * 30), "/");
        header("Location: loggedin.php");
        exit();
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Data</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="">
    Name: <input type="text" name="username">
    Password: <input type="text" name="password"><br/><br/>
    <input type="submit" value="Log Me In">
    </form>
</body>
</html>