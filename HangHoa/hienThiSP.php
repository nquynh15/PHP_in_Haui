<?php session_start(); $_SESSION['stt'] = 1; 
//session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            display: flex;
            justify-content: center;
            height: 100vh;
        }
        
        table{
            width: 900px;
            height: auto;
            border-collapse: collapse;
        }
        caption{
            margin-bottom: 30px;
        }
        .giohang{
            margin-left: 600px;
        }
        .add{
            margin-top: 20px;
        }
        table .image img{
            height: 80px;
            width: 60px;
        }
    </style>
    <div class="frame">
        <table border="1">
            <caption><h1>Hiển thị sản phẩm</h1></caption>
            <tr>
                <th>Mã hàng</th>
                <th>Tên hàng</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Hình ảnh</th>
                <th>Mua</th>
            </tr>
            <?php
            $arr = array();
            $file = 'hang.txt';
            if(file_exists($file)) {
                $r = fopen($file, 'r');
                while(!feof($r)) {
                    $row = fgets($r);
                    if($row != null) {
                        $arr[] = explode("|", $row);
                    }
                }
                fclose($r);
            }
            else {
                echo "File don't exists";
            }

            foreach($arr as $value) {
            ?>
            <tr>
                <th><?php echo $value[0] ?></th>
                <th><?php echo $value[1] ?></th>
                <th><?php echo $value[3] ?></th>
                <th><?php echo $value[4] ?></th>
                <th class="image"><img src="img/<?php echo $value[5] ?>" alt=""></th>
                <th><a href="file_giohang.php?ma=<?php echo $value[0] ?>">Mua</a></th>
            </tr>
            <?php } ?>
        </table>
        <div class="add">
            <a href="form_sanpham.php">Thêm sản phẩm</a>
        </div>
        <div class="giohang">
        <a href="giohang.php">Giỏ hàng</a>
        </div>
    </div>
</body>
</html>