<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function test()
    {
        //=创建图书=
        //方法一   ：    Book::create(['name'=>'红楼梦']);
        /*方法二：
         * $book = new Book();
        $book->name = '水浒传';
        $book->save();*/
        //=获取图书=
        //获取所有图书
        //Book::all();
        //获取一本图片
        //$book = Book::find(2);
        $book = Book::where('name','水浒传')->first();
        //var_dump($book);die();
        //dd($book);
        //dump($book);
        //dd($book);// dump() & die()

        //=修改图书=
        //找到这本书 修改名称 放回去
       /* 方法一：  $book->name ='红楼梦';
        $book->save();*/

       //方法二：
        //$book->update(['name'=>'红楼梦']);


        //根据身份证号码获取生日
        $no = '510110201810150011';
        //方法一：
        //preg_match('/^\d{6}(\d{8})\d{4}$/',$no,$matches);//20181015
        //preg_match('/^\d{6}(\d{4})(\d{2})(\d{2})\d{4}$/',$no,$matches);//2018-10-15
        //$birthday = $matches[1].'-'.$matches[2].'-'.$matches[3];

        //方法2：
        $birthday = preg_replace('/^\d{6}(\d{4})(\d{2})(\d{2})\d{4}$/','$1-$2-$3',$no);
        dd($birthday);

        return '操作成功';

    }
}
