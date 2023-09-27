<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1 style="text-align: center">Calculator Online</h1>
    <form action="" method="get" >
        <input type="number" name="a" step="0.1" size="100" placeholder="Nhập tham số a" value="{{ $a }}">
        <br><br>
        <input type="number" name="b" step="0.1" size="100" placeholder="Nhập tham số b" value="{{ $b }}">
        <br><br>
        <h4>Result: {{ $result }}</h4>
        <br><br>
        <button value="+" name="cal">Tính tổng</button>
        <button value="-" name="cal">Tính hiệu</button>
        <button value="*" name="cal">Tính tích</button>
        <button value="/" name="cal">Tính thương</button>
    </form>
</body>
</html>