@extends('tasks.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> دیدن برنامه</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('tasks.index') }}"> بازگشت</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>عنوان برنامه:</strong>
            {{ $task->title }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>توضیحات:</strong>
            {{ $task->description }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>انجام شده:</strong>
            {{ $task->completed }}
        </div>
    </div>

@endsection