<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.html");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>
<a href="logout.php">Logout</a>

</body>
</html>
