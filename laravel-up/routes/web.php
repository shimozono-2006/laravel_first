<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

// ルーティングの書き方
Route::get("/top", [TopController::class, "index"])->name("top.index");
Route::get("/top/get", [TopController::class, "get"])->name("top.get");

Route::get("/create",[CreateController::class,"create"])->name("create.create");
Route::get("/create/calculate",[CreateController::class,"calculate"])->name("create.calculate");
Route::get("/create/judge",[CreateController::class,"judge"])->name("create.judge");

Route::get("/cat",[CatController::class,"cat_create"]);

//ルーティングまとめた書き方
Route::prefix("task")->group(function(){
    Route::get("/",[TaskController::class,"index"])->name("task.index");//タスク一覧
    Route::get("/create",[TaskController::class,"create"])->name("task.create");//タスク追加
    Route::post("/",[TaskController::class,"store"])->name("task.store");//追加したタスクを保存
    Route::get("{id}/edit",[TaskController::class,"edit"])->name("task.edit");//タスク編集フォーム
    Route::put('{id}', [TaskController::class,"update"])->name("task.update");
    Route::delete("{id}",[TaskController::class,"destroy"])->name("task.destroy");
});


