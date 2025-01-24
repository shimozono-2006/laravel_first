<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable=["name","content"];//fillableの後の変数部分がカラムとして認識される！
}
