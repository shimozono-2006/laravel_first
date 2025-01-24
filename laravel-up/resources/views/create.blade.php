<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>新しいホームページ</div>
    <form action="{{route("create.calculate")}}">
        <input type="text" name="str1" />
        <input type="text" name="str2" />
        <button type="submit">文字結合</button>
    </form>
        {{ $result }}
    <form action="{{route("create.judge")}}"><input type="text" name="number">
    <button type="submit">数値を入力</button></form>
    {{$judge}}
</body>
</html>