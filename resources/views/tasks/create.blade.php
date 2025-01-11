@extends('tasks.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>اضافه کردن برنامه جدید</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('tasks.index') }}"> بازگشت</a>
        </div>
    </div>
</div>  

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> عنوان برنامه:</strong>
                <input type="text" name="title" class="form-control" placeholder="عنوان">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>توضیحات:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="توضیحات"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>انجام شده:</strong>
                <input type="text" name="completed" class="form-control" placeholder="انجام شده">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ثبت</button>
        </div>
    </div>
</form>
@endsection