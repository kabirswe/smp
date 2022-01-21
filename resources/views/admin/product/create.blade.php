@extends('admin.layouts.app')

@push('custom-style')
<!-- Styles -->
@endpush

@section('content')    
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-block dashboard">
    <section class="main-content">  
        <div class="title-section d-flex justify-content-between align-items-center">
            <div class="text-block">
                <h1 class="title">New Product Create</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-block">
                <a class="btn btn-primary" href="{{ route('product.index') }}">
                <ion-icon name="list-outline"></ion-icon>
                    <span>Product List</span>
                </a>
            </div>
        </div>
        <div class="form-block">
            {!! Form::open(array('route' => 'product.store', 'method'=> 'POST', 'class'=> 'row g-3', 'enctype' => 'multipart/form-data')) !!}
                @csrf
                <div class="col-md-8">
                    {!! Form::label('name', 'Name', ['class' => 'form-label']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    @if($errors->has('name'))
                        <div class="error_msg">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-8">
                    {!! Form::label('quantity', 'Quantity', ['class' => 'form-label']) !!}
                    {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
                    @if($errors->has('quantity'))
                        <div class="error_msg">
                            {{ $errors->first('quantity') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-8">
                    {!! Form::label('description', 'Description', ['class' => 'form-label']) !!}
                    {!! Form::text('description', null, ['class' => 'form-control']) !!}
                    @if($errors->has('description'))
                        <div class="error_msg">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-8">
                    {!! Form::label('label', 'Label', ['class' => 'form-label']) !!}
                    {!! Form::text('label', null, ['class' => 'form-control']) !!}
                    @if($errors->has('label'))
                        <div class="error_msg">
                            {{ $errors->first('label') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-8">
                    {!! Form::label('category', 'category', ['class' => 'form-label']) !!}
                    {!! Form::text('category', null, ['class' => 'form-control']) !!}
                    @if($errors->has('category'))
                        <div class="error_msg">
                            {{ $errors->first('category') }}
                        </div>
                    @endif
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            {!! Form::close() !!}
        </div>
    </section>
</main>
@endsection
            