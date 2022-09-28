<?php
    if(isset($_COOKIE['username'])){
        echo 'User '. $_COOKIE['username'] . ' is set<br>';
    } else {
        echo 'User is not set';
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Still Logged In</title>
</head>
<body>
    You are still logged in...
</body>
</html>