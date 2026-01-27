<?php
session_start();
include 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$res = $conn->query("SELECT * FROM users WHERE email='$email'");
$user = $res->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
  $_SESSION['user_id'] = $user['id'];
  $_SESSION['user_name'] = $user['name'];
  echo "success";
} else {
  echo "invalid";
}
