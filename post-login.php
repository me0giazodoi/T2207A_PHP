<?php
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$host = "localhost";
$user = "root";
$pwd = "root";
$db = "t2207a";

$conn = new mysqli($host,$user,$pwd,$db);
if($conn->connect_error){
    die("Connect error...");
}
$sql_check = "select * from users where email like '$email'";
$check = $conn->query($sql_check);
if($check->num_rows == 0){
    die("Email hoặc mật khẩu không chính xác");
}
$user = null;
while ($row = $check->fetch_assoc()){
    $user = $row;
}
$compare = password_verify($password,$user["password"]);
if($compare){
    $_SESSION["user"]=$user;
    die("Đăng nhập thành công");
}else{
    die("Email hoặc mật khẩu không chính xác");
}