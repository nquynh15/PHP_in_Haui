<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Statements</title>
</head>
<body>
    <h1>Chào mừng bạn đến với trang web của tôi!</h1>
    <?php
        $h = date('H');
        if($h<12){
            echo "<h3>Chúc buổi sáng tốt lành!</h3>";
        }
        elseif($h<13){
            echo "<h3>Chúc buổi trưa tốt lành!</h3>";
        }
        elseif($h<18){
            echo "<h3>Chúc buổi chiều tốt lành!</h3>";
        }
        else{
            echo "<h3>Chúc buổi tối tốt lành!</h3>";
        }
    ?>
</body>
</html>
