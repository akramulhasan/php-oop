<?php
setcookie('username', 'ak8048', time() + 3600, '/');



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coolie Learning</title>
</head>

<body>
    <?php
    $username = $_COOKIE['username'] ?? 'Guest';

    echo 'Welcome ' . $username;

    ?>

    <a href="inner-page.php">Go to other page</a>
</body>

</html>