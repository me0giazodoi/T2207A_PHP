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
$product = [
    [
        "name"=>"Rem",
        "price"=>100,
        "thumbnail"=>"image/rem.jpg",
        "qty"=>1
    ],
    [
        "name"=>"Rem",
        "price"=>100,
        "thumbnail"=>"image/rem.jpg",
        "qty"=>1
    ],
];
?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <?php foreach ($product as $pr): ?>
                            <img src="<?php echo $pr["thumbnail"]; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div><?php echo "Tên sản phẩm: ".$pr["name"]; ?></div>
                            <div><?php echo "Giá: ".$pr["price"]; ?></div>
                            <div><?php echo "Số lượng: ".$pr["qty"]; ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
