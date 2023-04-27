<?php
//$name = $_GET["name"];
$name = $_POST["name"];
echo $name;

$age = $_POST["age"];
echo $age;

$mark = $_POST["mark"];
echo $mark;

header("Location: student.php");
