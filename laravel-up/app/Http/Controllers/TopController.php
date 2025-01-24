<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class TopController extends Controller
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
        return view("index",compact("tasks"));
    }

    public function get(Request $request) {
        $text = $request["text"];
        return redirect()->route("top.index", ["text" => $text]);
    }
}

