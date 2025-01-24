<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

//php artisan make:contoroller コントローラー名（ターミナル）でテンプレート作れる
class TaskController extends Controller
{
    public function index(Request $request) {
        $tasks=Task::all();//modelの操作たくさんのメソットがある
        //tasksの中身 例 2次元リストの辞書形式で保存されている
        //$tasks=[
        //    [
        //        "id"=>1,
        //        "name"=>"Task_1",
        //        "content"=>"content",
        //        "created_at"=>"yyyy-mm-dd 00:00:00",
        //        "updated_at"=>"yyyy-mm-dd 00:00:00",
     //       ]
     //   ]
        return view("task.index",compact("tasks"));
    }

    public function create()
    {
        return view("task.create");
    }

    public function store(Request $request)
    {
        Task::create([
            "name"=>$request["name"],//=>はphpの辞書の書き方
            "content"=>$request["content"],
        ]);
        return redirect()->route("task.index");//name属性
    }

    public function edit($id)
    {
        $task=Task::find($id);//findはpkでソート
        return view("task.edit",compact("task"));
    }

    public function update(Request $request,$id)
    {
        $task=Task::find($id);
        $task->update([
            "name"=>$request["name"],
            "content"=>$request["content"],
        ]);
        return redirect()->route("task.index");
    }
    public function destroy($id)
    {
        $task=Task::find($id);
        $task->delete();

        return redirect()->route('task.index');
    }
}

