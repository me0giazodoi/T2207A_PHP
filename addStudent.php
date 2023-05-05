//$name = $_GET["name"];
//$name = $_POST["name"];
//echo $name;
//
//$age = $_POST["age"];
//echo $age;
//
//$mark = $_POST["mark"];
//echo $mark;
//
//header("Location: student.php");
<?php
$sv = $_POST;
$name = $_POST["name"];
$email = $_POST["email"];
$birthday = $_POST["birthday"];
$gender = $_POST["gender"];
$class_id = $_POST["class_id"];

//  Lưu vào db
$host = "localhost";
$user = "root";
$pwd = "";
$db = "t2207a";

$conn = new mysqli($host,$user,$pwd,$db);
if($conn -> connect_error){
    die("Connect error...");
}

// truy van
$sql = "INSERT INTO sinhvien (name, email, birthday, gender, class_id) VALUES ('$name', '$email', '$birthday', '$gender', $class_id)";
if ($conn -> query($sql)){
    header("location: database.php");
} else{
    echo "Error";
}
?>
