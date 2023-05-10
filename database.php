<?php
////  Kết nối database
//$host = "localhost";
//$user = "root";
//$pwd = "";
//$db = "t2207a";
//
//$conn = new mysqli($host,$user,$pwd,$db);
//if($conn->connect_error){
//    die("Connect error...");
//}
//
////  Ra đây tức là kết nối thành công
////echo "Connected...";
//
////  Truy vấn
//$sql = "select * from sinhvien";
//$result = $conn->query($sql);
//
////  var dump($result);die();
//$student = [];
//if ($result->num_rows > 0){
//    while ($row = $result -> fetch_assoc()){
//        $student[] = $row;
//    }
//}
//?>
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<div class="section">-->
<!--    <div class="container">-->
<!--        <br>-->
<!--        <a href="createStudent.php" class="btn btn-primary md-2">Add Student</a>-->
<!--        <br>-->
<!--        <table class="table table-bordered">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th scope="col">name</th>-->
<!--                <th scope="col">email</th>-->
<!--                <th scope="col">birthday</th>-->
<!--                <th scope="col">gender</th>-->
<!--                <th scope="col">class id</th>-->
<!--                <th scope="col">edit</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            --><?php //foreach ($student as $st): ?>
<!--                <tr>-->
<!--                    --><?php
//                    echo "<td>".$st["name"]."</td>";
//                    echo "<td>".$st["email"]."</td>";
//                    echo "<td>".$st["birthday"]."</td>";
//                    echo "<td>".$st["gender"]."</td>";
//                    echo "<td>".$st["class_id"]."</td>";
//                    ?>
<!--                    <td>-->
<!--                        <a href="editStudent.php?id=--><?php //echo $st["id"]; ?><!--">Sửa</a>-->
<!--                    </td>-->
<!--                </tr>-->
<!--            --><?php //  endforeach; ?>
<!--            </tbody>-->
<!--        </table>-->
<!--    </div>-->
<!--</div>-->
<!--</body>-->
<!--</html>-->
<?php
session_start();
$logn_user = $_SESSION["user"]?$_SESSION["user"]:null;
if(!$logn_user){
    header("Location: login.php");
    die("Vui lòng đăng nhập trước khi sử dụng");
}
// ket noi db
$host = "localhost";
$user = "root";
$pwd = "root";
$db = "t2207a";

$conn = new mysqli($host,$user,$pwd,$db);
if($conn->connect_error){
    die("Connect error...");
}
// Ra day tuc la ket noi thanh cong
// Truy van
$sql = "select * from sinhvien";
$result = $conn->query($sql);
//var_dump($result);die();
$students = [];
if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        $students[] = $row;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Bạn đang đăng nhập dưới tên: <?php echo $logn_user["name"]; ?></h1>
    <a href="form.php" class="btn btn-primary">Thêm sinh viên</a>
    <table class="table">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>email</th>
        <th>action</th>
        </thead>
        <tbody>
        <?php foreach ($students as $s):?>
            <tr>
                <td><?php echo $s["id"];?></td>
                <td><?php echo $s["name"];?></td>
                <td><?php echo $s["email"];?></td>
                <td>
                    <a href="editstudent.php?id=<?php echo $s["id"]; ?>">Sửa</a>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
</body>
</html>