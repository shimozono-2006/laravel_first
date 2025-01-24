<?php
namespace App\Http\Controllers;

class CatController extends Controller{
    public function cat_create(){
        return view("Cat_Create");
    }
}