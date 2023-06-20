<?php session_start() ?>
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
            
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .frame{
            margin-top: -400px;
        }
        table{
            width: 700px;
            height: auto;
            border-collapse: collapse;
        }
        caption{
            margin-bottom: 30px;
        }
        .dathang{
            margin-left: 600px;
            margin-top: 30px;
        }
    </style>
    <table border="1">
        <caption><h1>Giỏ hàng</h1></caption>
        <?php if(isset($_SESSION['giohang'])) { ?>
        <tr>
            <th>Mã hàng</th>
            <th>Tên hàng</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành Tiền</th>
            
        </tr>
        
        <?php
            $tong = 0; foreach($_SESSION['giohang'] as $key => $value) { ?>
            <tr>
                
                <?php 
                foreach($value as $k => $v) { ?>
                <th><?php echo $k ?></th>
                <th><?php echo $v[0] ?></th>
                <th><?php echo $v[1] ?></th>
                <th><?php echo $v[2] ?></th>
                <th><?php $thanhtien = $v[1] * $v[2]; $tong += $thanhtien; echo $thanhtien  ?></th>
               
                <?php  } ?>
            </tr>
            
        <?php } ?>
        <tr>
        <th colspan="4">Tổng tiền</th>
        <th><?php echo $tong ?></th>
        </tr>
        <?php }
        else{
            echo "Giỏ hàng trống"; }?>
        
       
        
        
    </table>
    <div class="dathang">
    <a href="donhang.php">Đặt hàng</a>
    </div>
</body>
</html>