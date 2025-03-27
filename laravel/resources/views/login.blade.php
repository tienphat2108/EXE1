<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <style>
        /* CSS cơ bản, bạn có thể tách ra file .css riêng */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
        }
        .container {
            width: 360px;
            margin: 60px auto;
            padding: 20px;
            background: #fff;
            border: 1px solid #ccc;
        }
        h2 {
            text-align: center;
        }
        .form-group {
            margin: 15px 0;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #2E86C1;
            border: none;
            color: #fff;
            cursor: pointer;
        }
        .footer {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
        }
        .footer a {
            color: #2E86C1;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Đăng Nhập</h2>
        <form action="#" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" placeholder="Nhập email">
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" name="password" id="password" placeholder="Nhập mật khẩu">
            </div>
            <button type="submit">Đăng nhập</button>
        </form>
        <div class="footer">
            <p>Bạn chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký ngay</a></p>
        </div>
    </div>

</body>
</html>
