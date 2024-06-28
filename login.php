<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_1034 = $_POST['username'];
    $password_1034 = $_POST['password'];

    if ($username_1034 <> ' ' && $password_1034 <> ' ') {
        header("Location: welcome.php?username=" . urlencode($username_1034));
        exit();
    } else {
        echo "<h2>Login failed!</h2>";
    }
}
?>
