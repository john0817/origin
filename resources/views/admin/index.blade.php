@extends('layout.default')

@section('contents')
    <table class="table table-bordered table-striped">
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>邮箱</th>
            <th>手机</th>
            <th>操作</th>
        </tr>
        @foreach ($admins as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->username }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->tel }}</td>
                <td><a href="{{ route('user.edit',[$student]) }}" class="btn btn-warning btn-xs">修改</a>

                    <a href="{{ route('user.delete',[$student]) }}" class="btn btn-danger btn-xs">删除</a> </td>
            </tr>
        @endforeach
    </table>
    {{ $admins->links() }}
@endsection