@extends('admin.layouts.app')

@push('custom-style')
<!-- Styles -->
@endpush

@section('content')    
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-block dashboard">
    <section class="main-content">  
        <div class="title-section d-flex justify-content-between align-items-center">
            <div class="text-block">
                <h1 class="title">New Product Image Create</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Product Image</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-block">
                <a class="btn btn-primary" href="{{ route('product_image.index') }}">
                <ion-icon name="list-outline"></ion-icon>
                    <span>Product Image List</span>
                </a>
            </div>
        </div>
        <div class="form-block">
            {!! Form::open(array('route' => 'product_image.store', 'method'=> 'POST', 'class'=> 'row g-3', 'enctype' => 'multipart/form-data')) !!}
                @csrf
                <div class="col-md-8">
                    {!! Form::label('cover_image', 'Cover Image', ['class' => 'form-label']) !!}
                    {!! Form::text('cover_image', null, ['class' => 'form-control']) !!}
                    @if($errors->has('cover_image'))
                        <div class="error_msg">
                            {{ $errors->first('cover_image') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-8">
                    {!! Form::label('image', 'Image', ['class' => 'form-label']) !!}
                    {!! Form::text('image', null, ['class' => 'form-control']) !!}
                    @if($errors->has('image'))
                        <div class="error_msg">
                            {{ $errors->first('image') }}
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
            