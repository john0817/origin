@extends('layout.default')

@section('contents')
    <h1>添加用户</h1>
    @include('layout._errors')
    <form method="post" action="{{ route('user.save') }}">
        <div class="form-group">
            <label>用户名</label>
            <input type="text" name="username" class="form-control" value="{{ old('username') }}">
        </div>
        <div class="form-group">
            <label>邮箱</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label>手机号码</label>
            <input type="number" name="tel" class="form-control" value="{{ old('tel') }}">
        </div>
        {{ csrf_field() }}
        <button class="btn btn-primary btn-block">提交</button>
    </form>
    @stop