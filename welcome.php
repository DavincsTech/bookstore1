
<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: login.html");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Welcome</title></head>
<body>
  <h1>Welcome <?php echo htmlspecialchars($_SESSION['user']); ?>!</h1>
  <a href="logout.php">Logout</a>
</body>
</html>
