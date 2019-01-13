<?php

namespace App\Http\Controllers\Day2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    //
    public function index(Request $request)
    {
        //原生sql操作
        //select
        //$name = $request->name;
        //$result = DB::select('SELECT * FROM `students` WHERE name=? AND id=?',['张飞',1]);
        //$result = DB::select('SELECT * FROM `students` WHERE name=:name AND id=:id',['id'=>1,'name'=>'张飞']);
        //dd($result);

        //insert 返回值是bool
       //$result = DB::insert('INSERT INTO students (name,age) VALUES (?,?)',['小乔',18]);
       //var_dump($result);
        //update
        //DB::update('UPDATE students SET age=? WHERE name=?',[19,'大乔']);
        //statement 无返回值的一些操作


        //事务 方法一 自动提交和回滚
        /*DB::transaction(function () {
            //小乔少一岁
            DB::update('UPDATE students SET age=age-1 WHERE name=?',['小乔']);
            //大乔多一岁
            DB::update('UPDATE students SET age=age+1 WHERE name=?',['大乔']);
        });*/
        //方法二：手动处理事务
        /*DB::beginTransaction();//开始事务
        try{
            DB::update('UPDATE students SET age=age-1 WHERE name=?',['小乔']);
            DB::update('UPDATE students SET age=age+1 WHERE name=?',['大乔']);

            DB::commit();//提交事务
        }catch (\Exception $e){
            DB::rollBack();
            //事务回滚
        }*/

        //查询生成器
        //1 获取表中所有数据
        //$result = DB::table('students')->get();
        //2 获取一条数据
        //$result = DB::table('students')->where('id',1)->first();
        //$result = DB::table('students')->where('id',1)->value('name');
        //3 获取一列的值
        //$result = DB::table('students')->pluck('name');
        //4 聚合
        //$result = DB::table('students')->count();
        //$result = DB::table('students')->max('age');
        //$result = DB::table('students')->min('age');
        //$result = DB::table('students')->avg('age');

        //selects
        //$result = DB::table('students')->select('name as realname','age')->get();
        //$result = DB::table('students')->select('name','age')->where('age','>',16)->grouBy()->orderBy()->get();
        //$sql = "select name ,age from xxx group by xxx order by xxx  where age > 16";
        //dd($result);

    }
}
