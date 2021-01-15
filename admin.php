<?php
session_start();

include 'config.php';

$un = $_POST['email'];
$pass = $_POST['password'];

$sql = "SELECT * FROM admin_info where admin_email='$un' and admin_password='$pass' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

   // fetch data
// $uid = mysqli_fetch_array($result);
// $_SESSION['uid']=$uid['user_id'];
// $_SESSION['id'] = $uid['user_id'];
// $_SESSION["email"] = $un;
  header('Location:admin/index.php');
} else {
  echo "Invalid Details";
}
$conn->close();
?>