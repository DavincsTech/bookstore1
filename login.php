
<?php
include 'db.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT id, fullname, password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $fullname, $hashed_password);
$stmt->fetch();

if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
  $_SESSION['user'] = $fullname;
  echo "success";
} else {
  echo "Invalid credentials";
}
?>
