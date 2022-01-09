<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<table>
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
    </tr>
    <tbody>
    <?php
    $CustomerList = [
        "1" => [
            "Ten" => "Mai Van Hoan",
            "Ngaysinh" => "1983-08-20",
            "Diachi" => "Ha Noi",
        ],
        "2" => [
            "Ten" => "Nguyen Van Nam",
            "Ngaysinh" => "1983-08-21",
            "Diachi" => "Bac Giang",
        ],
        "3" => [
            "Ten" => "Nguyen Thai Hoa",
            "Ngaysinh" => "1983-08-22",
            "Diachi" => "Nam Dinh",
        ],
        "4" => [
            "Ten" => "Tran Dang Khoa",
            "Ngaysinh" => "1983-08-17",
            "Diachi" => "Ha Tay",
        ],
        "5" => [
            "Ten" => "Nguyen Dinh Thi",
            "Ngaysinh" => "1983-08-19",
            "Diachi" => "Ha Noi",
        ]
    ]
    ?>
    <?php foreach ($CustomerList as $key => $value): ?>
    <tr>
        <td><?php echo $key ?></td>
        <td><?php echo $value["Ten"] ?></td>
        <td><?php echo $value["Ngaysinh"] ?></td>
        <td><?php echo $value["Diachi"] ?></td>
    </tr>
    <?php endforeach;?>
    </tbody>

</table>

</body>
</html>
