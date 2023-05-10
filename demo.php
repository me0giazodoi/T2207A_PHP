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
// cho nay viet dc code php
$menu = [
    "Cơm rang dưa bò",
    "Phở bò Kobe",
    "Mỳ Ý",
    "Bò bít tết"
];
$sv = [
    "name"=> "Nguyễn Văn An",
    "age"=> 19,
    "tel"=>"0987654321"
];
//        $sv["name"]= "Nguyeen Van An";
//        $sv["age"]= "Nguyeen Van An";
//        $sv["tel"]= "Nguyeen Van An";
?>
<ul>
    <?php foreach ($menu as $m): ?>
        <li><?php echo $m;?></li>
    <?php  endforeach; ?>
</ul>
<h2><?php echo $sv["name"];?></h2>
<h2><?php echo $sv["age"];?></h2>
<h2><?php echo $sv["tel"];?></h2>
</body>
</html>