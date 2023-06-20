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
            width: 500px;
            height: 160px;
        }
    </style>
    <div class="frame">
    <form action="file_nhomhang.php" method="post">
        <table>
            <caption><h2>Nhập thông tin nhóm hàng</h2></caption>
            <tr>
                <th>Mã nhóm:</th>
                <th><input type="text" name="manhom"></th>
            </tr>
            <tr>
                <th>Tên nhóm:</th>
                <th><input type="text" name="tennhom"></th>
            </tr>
            <tr>
                <th>Mô tả:</th>
                <th><input type="text" name="mota"></th>
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