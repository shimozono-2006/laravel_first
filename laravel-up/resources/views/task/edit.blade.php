<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>タスク追加ページ</h1>
        <p>タイトル</p>
        <form action="{{route("task.update",["id"=>$task["id"]])}}" method="POST">
            {{-- postは安全性のあるメソットなので@csrfをつけないと処理されない --}}
            @method('PUT')
            @csrf
            {{-- htmlはmethodにputがないので、@でプロパティ変更 --}}
            {{-- inputにvalueを入れるとvalueの中の要素がインプットの中に書かれた状態で始まる --}}
            <input type="text" name="name" value="{{$task["name"]}}">
            <p>内容</p>
            <input type="text" name="content" value="{{$task["content"]}}">
            <button type="submit">決定</button>
        </form>
        <a href="{{route("task.index")}}">戻る</a>
    </div>
</body>
</html>
