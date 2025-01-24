<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        @foreach ($tasks as $task)
            <tr>
                <td>{{$task["name"]}}</td>
                <td>{{$task["content"]}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
