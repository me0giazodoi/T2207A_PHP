<?php
$name = $_POST["name"];
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
// check user da ton tai hay chua
$sql_check = "select * from users where email like '$email'";
$check = $conn->query($sql_check);
if($check->num_rows > 0){
    die("Tài khoản này đã tồn tại");
}
// hash password
$hash_password = password_hash($password,PASSWORD_BCRYPT);
$sql = "insert into users(name,email,password)
            values('$name','$email','$hash_password')";
if($conn->query($sql)){
    die("Done");
}else{
    die("Error");
}