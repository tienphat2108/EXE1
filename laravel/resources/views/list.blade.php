<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách người dùng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }
        .container {
            width: 800px;
            margin: 40px auto;
            background: #fff;
            padding: 20px;
            border: 1px solid #ccc;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table thead {
            background: #3498DB;
            color: #fff;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        .btn {
            text-decoration: none;
            padding: 6px 12px;
            margin: 0 2px;
            border-radius: 4px;
        }
        .btn-view {
            background: #2ECC71;
            color: #fff;
        }
        .btn-update {
            background: #F1C40F;
            color: #fff;
        }
        .btn-delete {
            background: #E74C3C;
            color: #fff;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Danh sách người dùng</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <!-- Giả sử bạn có danh sách users -->
                <!-- @foreach($users as $user) -->
                <tr>
                    <td>1</td>
                    <td>Nguyễn Văn A</td>
                    <td>nva@example.com</td>
                    <td>
                        <a href="{{ route('view', ['id' => 1]) }}" class="btn btn-view">Xem</a>
                        <a href="{{ route('update', ['id' => 1]) }}" class="btn btn-update">Sửa</a>
                        <a href="#" class="btn btn-delete">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Trần Thị B</td>
                    <td>ttb@example.com</td>
                    <td>
                        <a href="#" class="btn btn-view">Xem</a>
                        <a href="#" class="btn btn-update">Sửa</a>
                        <a href="#" class="btn btn-delete">Xóa</a>
                    </td>
                </tr>
                <!-- @endforeach -->
            </tbody>
        </table>
    </div>

</body>
</html>
