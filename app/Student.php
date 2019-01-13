<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //声明哪些属性可以被赋值
    protected $fillable = ['name','age'];
}
