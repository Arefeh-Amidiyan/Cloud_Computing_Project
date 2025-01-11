@extends('tasks.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>لیست برنامه</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('tasks.create') }}">ایجاد برنامه جدید</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ردیف</th>
        <th>ID</th>
        <th>عنوان برنامه </th>
        <th>توضیحات</th>
        <th>انجام شده</th>
        <th width="280px">عملیات</th>
    </tr>
    @foreach ($tasks as $index => $task)
    <tr>
        <td>{{ $index + 1 }}</td>  <!-- شماره ردیف را به صورت دستی اضافه کنید -->
        <td>{{ $task->id }}</td>
        <td>{{ $task->title }}</td>
        <td>{{ $task->description }}</td>
        <td>{{ $task->completed }}</td>
        <td>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('tasks.show', $task->id) }}">دیدن</a>
                <a class="btn btn-primary" href="{{ route('tasks.edit', $task->id) }}">ویرایش</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">حذف</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $tasks->links() }}
    
@endsection