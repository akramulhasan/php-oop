<?php
$username = $_COOKIE['username'] ?? 'Guest';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inner Page</title>
</head>

<body>
    <h2>This is Inner page</h2>

    <?php echo $username; ?>

    <a href="destroy.php">Destroy Cookie</a>
</body>

</html>