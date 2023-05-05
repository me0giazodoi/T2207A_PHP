<?php
//  Kết nối database
$host = "localhost";
$user = "root";
$pwd = "";
$db = "t2207a";

$conn = new mysqli($host,$user,$pwd,$db);
if($conn->connect_error){
    die("Connect error...");
}

//  Ra đây tức là kết nối thành công
//echo "Connected...";

//  Truy vấn
$sql = "select * from sinhvien";
$result = $conn->query($sql);

//  var dump($result);die();
$student = [];
if ($result->num_rows > 0){
    while ($row = $result -> fetch_assoc()){
        $student[] = $row;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="section">
    <div class="container">
        <br>
        <a href="createStudent.php" class="btn btn-primary md-2">Add Student</a>
        <br>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">birthday</th>
                <th scope="col">gender</th>
                <th scope="col">class id</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($student as $st): ?>
                <tr>
                    <?php
                    echo "<td>".$st["name"]."</td>";
                    echo "<td>".$st["email"]."</td>";
                    echo "<td>".$st["birthday"]."</td>";
                    echo "<td>".$st["gender"]."</td>";
                    echo "<td>".$st["class_id"]."</td>";
                    ?>
                </tr>
            <?php   endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
