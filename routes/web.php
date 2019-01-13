<?php



Route::get('/', function () {
    return view('welcome');
});
//定义三个路由  首页  关于 帮助
Route::get('/index','HomeController@index');  // index-->HomeController->index()
Route::get('/about','HomeController@about');

//添加学生
Route::get('/student/add','StudentController@add')->name('student.add');
Route::post('/student/save','StudentController@save');
//学生列表
Route::get('student/index','StudentController@index')->name('student.index');

//测试
Route::get('test','BookController@test');

//添加用户
Route::get('/user/add','Day2\AdminController@add')->name('user.add');
Route::post('/user/save','Day2\AdminController@save')->name('user.save');


Route::get('/user/test','Day2\AdminController@test')->name('user.test');
Route::get('/user/list','Day2\AdminController@list')->name('user.list');
//修改用户
Route::get('/user/edit/{admin}','Day2\AdminController@edit')->name('user.edit');
Route::post('/user/update/{admin}','Day2\AdminController@update')->name('user.update');
//删除用户
Route::get('/user/delete/{admin}','Day2\AdminController@delete')->name('user.delete');

//数据表操作
Route::get('/db','Day2\DbController@index');
