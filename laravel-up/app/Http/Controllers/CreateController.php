<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create(Request $request) { //publicはファイル外からアクセスするため
        $result = $request["result"];
        $judge = $request["judge"];
        return view("create",compact("result","judge"));
    }

    public function calculate(Request $request){
        $str_1 =$request["str1"];
        $str_2 =$request["str2"];
        $result =$str_1 . $str_2;
        return redirect()->route("create.create",["result" => $result]);
    }

    public function judge(Request $request){
        $number =$request["number"];
        if ($number>=0){
            $judge="正の数";
        }else{
            $judge="負の数";
        };
        return redirect()->route("create.create",["judge" => $judge]);
    }
}