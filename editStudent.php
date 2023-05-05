<?php
$id = $_GET["id"];
// ket noi db
$host = "localhost";
$user = "root";
$pwd = "";
$db = "t2207a";

$conn = new mysqli($host, $user, $pwd, $db);
if ($conn -> connect_error){
    die("Connect error...");
}

// ra day tuc la ket noi thanh cong

// truy van
$sql = "SELECT * FROM lophoc";
$result = $conn -> query($sql);

//var_dump($result);die();
$class = [];
if ($result -> num_rows > 0){
    while ($row = $result -> fetch_assoc()){
        $class[] = $row;
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
<section>
    <div class="container">
        <h1>Edit Infomation Student</h1>
        <form action="addStudent.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Birthday</label>
                <input type="date" name="birthday" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Gender</label>
                <select name="gender" class="form-control">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Gender</label>
                <select name="class_id" class="form-control">
                    <?php foreach ($class as $c): ?>
                        <option value="<?php echo $c["id"] ?>"><?php echo $c["name"] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>
</body>
</html>
