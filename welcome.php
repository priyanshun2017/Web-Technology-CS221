<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_GET['username'])) {
        $username = htmlspecialchars($_GET['username']);
        echo "<h1>Welcome, " . $username . "!</h1>";
    } else {
        echo "<h1>Invalid Access</h1>";
    }
    ?>
</body>
</html>
