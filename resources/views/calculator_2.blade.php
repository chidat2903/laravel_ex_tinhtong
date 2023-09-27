<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1 style="text-align: center">calculator</h1>
    <form action="" method="post">
        <input type="number" name="a" step="0.1" size="100" placeholder="Nhập tham số a" value="{{ $a }}">
        <br>
        <input type="number" name="b" step="0.1" size="100" placeholder="Nhập tham số b" value="{{ $b }}">
        <br>
        Result: {{ $result }}
        <br>
        <button value="+" name="cal">Tính tổng</button>
        <button value="-" name="cal">Tính hiệu</button>
        <button value="*" name="cal">Tính tích</button>
        <button value="/" name="cal">Tính thương</button>
    </form>
</body>
</html>