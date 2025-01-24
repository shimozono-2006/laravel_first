<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/index.css")}}">
</head>
<body>
    <h1 class="title">タスク一覧</h1>
    <table>
    <thead>
        <tr>
            <th>タスクタイトル</th>
            <th>タスク内容</th>
            <th>編集ボタン</th>
        </tr>
    </thead>
        @foreach ($tasks as $task)
            <tr>
                <td>{{$task["name"]}}</td>
                <td>{{$task["content"]}}</td>
                <td><a href="{{route("task.edit",["id"=>$task["id"]])}}">編集</a></td>
                <td>
                    <form method="POST" action="{{route("task.destroy",["id"=>$task["id"]])}}">
                        @method("DELETE")
                        @csrf
                        <button type="submit">
                            削除
                        </button></form>
                </td>
            </tr>
        @endforeach
    </table>
    <p class="task_create_button"><a href="{{route("task.create")}}">タスクを作成</a></p>
</body>
</html>
