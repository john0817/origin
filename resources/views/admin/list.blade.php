@extends('layout.default')

@section('contents')
    <table class="table table-bordered table-striped">
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>年龄</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->age }}</td>
            </tr>
        @endforeach
    </table>
    {{ $students->links() }}
@endsection