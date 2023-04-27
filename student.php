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
<?php
    $list = [
        [
            "name" => "Nguyễn Văn Nam",
            "age" => 18,
            "mark" => 9
        ],
        [
            "name" => "Nguyễn Duy Anh",
            "age" => 20,
            "mark" => 7
        ],
    ];
    ?>
<?php include ("header.php"); ?>
<section>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Mark</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $l): ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $l["name"]; ?></td>
                    <td><?php echo $l["age"]; ?></td>
                    <td><?php echo $l["mark"]; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
</body>
</html>
