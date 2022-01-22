@extends('admin.layouts.app')

@push('custom-style')
<!-- Styles -->
@endpush

@section('content')    
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-block dashboard">
    <section class="main-content">  
        <div class="title-section d-flex justify-content-between align-items-center">
            <div class="text-block">
                <h1 class="title">New Post Create</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Post</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-block">
                <a class="btn btn-primary" href="{{ route('post.index') }}">
                <ion-icon name="list-outline"></ion-icon>
                    <span>Post List</span>
                </a>
            </div>
        </div>
        <div class="form-block">
            {!! Form::open(array('route' => 'post.store', 'method'=> 'POST', 'class'=> 'row g-3', 'enctype' => 'multipart/form-data')) !!}
                @csrf
                <div class="col-md-8">
                    {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    @if($errors->has('title'))
                        <div class="error_msg">
                            {{ $errors->first('title') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-8">
                    {!! Form::label('category', 'Category', ['class' => 'form-label']) !!}       
                    <select name="category" id="category" class="form-select" onchange="userFormatState('category')" required>
                        <option selected disabled value="">Choose...</option>
                        @foreach($product_categories as $product_category)
                            <option value="{{ $product_category->id }}">{{ $product_category->name }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('category'))
                        <div class="error_msg">
                            {{ $errors->first('category') }}
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
                <div class="col-md-8">
                    {!! Form::label('description', 'Description', ['class' => 'form-label']) !!}
                    {!! Form::textarea('description', null, ['placeholder' => 'Description', 'class' => 'form-control', 'id' => 'description', 'type' => 'textarea']) !!}
                    @if($errors->has('description'))
                        <div class="error_msg">
                            {{ $errors->first('description') }}
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

@push('custom-scripts')
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
     // ckeditor init js
     setTimeout(function(){
            CKEDITOR.replace('description', {
                filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });
        },100);
</script>
<script>
    $(document).ready( function () { 
        $('#category').select2();
    });
</script>
@endpush
            