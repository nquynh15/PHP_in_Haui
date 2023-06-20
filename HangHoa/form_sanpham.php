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
            align-items: center;
            height: 100vh;
        }
        .frame{
            margin-top: -200px;
            background-color: aquamarine;
        }
        table{
            width: 700px;
            height: 260px;
        }
        .select select{
            width: 163px;
            height: 20px;
        }
    </style>
    <div class="frame">
    <form action="file_sanpham.php" method="post">
        <table>
            <caption><h2>Nhập thông tin sản phẩm</h2></caption>
            <tr>
                <th><a href="form_nhomhang.php">Thêm nhóm hàng</a></th>
                <th></th>
            </tr>
            <tr>
                <th>Mã hàng:</th>
                <th><input type="text" name="mahang"></th>
            </tr>
            <tr>
                <th>Tên hàng:</th>
                <th><input type="text" name="tenhang"></th>
            </tr>
            <tr>
                <th>Nhóm hàng:</th>
                <th class="select">
                    <?php 
                    $arr = array();
                    $file = 'category.txt';
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
                    ?>
                    <select name="nhomhang" id="">
                        <?php foreach($arr as $x) { ?>
                            <option value="<?php echo $x[0] ?>"><?php echo $x[1] ?></option>
                        <?php } ?>
                    </select>
                </th>
            </tr>
            <tr>
                <th>Số lượng:</th>
                <th><input type="number" name="soluong"></th>
            </tr>
            <tr>
                <th>Đơn giá:</th>
                <th><input type="number" name="dongia"></th>
            </tr>
            <tr>
                <th>Hình ảnh:</th>
                <th><input type="file" name="hinhanh"></th>
            </tr>
            <tr>
                <th></th>
                <th><input type="submit" value="Thêm">
                <input type="reset" value="Reset">
            </th>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>