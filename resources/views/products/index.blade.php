@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>سیستم مدیریت محصولات</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('products.create') }}">ایجاد محصول جدید</a>
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
        <th>نام محصول</th>
        <th>مشخصات</th>
        <th width="280px">عملیات</th>
    </tr>
    @foreach ($products as $index => $product)
    <tr>
        <td>{{ $index + 1 }}</td>  <!-- شماره ردیف را به صورت دستی اضافه کنید -->
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->detail }}</td>
        <td>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">دیدن</a>
                <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">ویرایش</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">حذف</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $products->links() }}
    
@endsection