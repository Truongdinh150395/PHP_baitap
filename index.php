<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thanh toan tien taxi</title>
</head>
<body>
    <form method="post">
        <input type="number" name="input" placeholder="nhap km">
        <button type="submit">Tinh</button>
    </form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $kilometer = $_POST["input"];

        if($kilometer <= 0) {
            echo "Nhập lại số Kilometer";
        }elseif ($kilometer < 2){
            echo "So tien la:". $kilometer * 15000 . "VND";
        } elseif ($kilometer >= 2 && $kilometer <=5) {
            echo "So tien la:". ($kilometer - 1) * 13500 + 15000;
        } elseif ($kilometer <=  120) {
            echo "So tien la:". 15000 + (4 * 13500) + ($kilometer -  5) * 11100 . "VND";
        } else {
            echo "So tien la:". (15000 + (4 * 13500) + ($kilometer -  5) * 11100) * 0.9 ."VND";
        }
    }
?>
</body>
</html>

