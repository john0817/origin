@extends('layout.default')

@section('contents')
    <form method="post" action="/student/save">
        <div class="form-group">
            <label>姓名</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>年龄</label>
            <input type="text" name="age" class="form-control">
        </div>

        {{ csrf_field() }}
        <button class="btn btn-primary btn-block">提交</button>
    </form>
@stop