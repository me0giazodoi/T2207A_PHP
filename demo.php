<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Danh sách thực đơn hôm nay</h1>
    <?php
        $sv = [
            "name"=> "Nguyễn Văn An",
            "age"=> 19,
            "tel"=> "0987654321"
        ];
        $sv["name"] = "Nguyễn Văn An";
        $sv["age"] = 19;
        $sv["tel"] = "0987654321"
    ?>
    <h2><?php echo $sv["name"]; ?></h2>
    <h2><?php echo $sv["age"]; ?></h2>
    <h2><?php echo $sv["tel"]; ?></h2>
</body>
</html>