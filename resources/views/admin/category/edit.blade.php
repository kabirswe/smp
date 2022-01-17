@extends('admin.layouts.app')

@push('custom-style')
<!-- Styles -->
@endpush

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-block dashboard">
    <section class="main-content"> 
        <div class="title-section d-flex justify-content-between align-items-center">
            <div class="text-block">
                <h1 class="title">Category Update</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Category</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-block">
                <a class="btn btn-primary" href="{{ route('category.index') }}">
                    <img src="{{ asset('images/icons/view.svg') }}" class="icon-inner" alt="view icon">
                    <span>Category List</span>
                </a>
                <a class="btn btn-primary" href="{{ route('category.create') }}">
                    <img src="{{ asset('images/icons/icon-plus.svg') }}" class="icon-inner" alt="plus icon">
                    <span>Category Create</span>
                </a>
            </div>
        </div>
        <div class="form-block">
            {!! Form::open(array('route' => ['category.update', $category->id], 'class'=> 'row g-3', 'method'=>'PUT', 'enctype' => 'multipart/form-data')) !!}
            @csrf
                <div class="col-md-8">
                    {!! Form::label('name', 'Name', ['class' => 'form-label']) !!}
                    {!! Form::text('name', $category->name, ['class' => 'form-control']) !!}
                    @if($errors->has('name'))
                        <div class="error_msg">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div> 
                <div class="col-md-8">
                    {!! Form::label('price', 'Price', ['class' => 'form-label']) !!}
                    {!! Form::number('price', $category->price, ['class' => 'form-control']) !!}
                    @if($errors->has('price'))
                        <div class="error_msg">
                            {{ $errors->first('price') }}
                        </div>
                    @endif
                </div>                 
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            {!! Form::close() !!}
        </div>
    </section>
</main>
@endsection
