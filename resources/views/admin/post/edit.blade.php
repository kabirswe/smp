@extends('admin.layouts.app')

@push('custom-style')
<!-- Styles -->
@endpush

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-block dashboard">
    <section class="main-content"> 
        <div class="title-section d-flex justify-content-between align-items-center">
            <div class="text-block">
                <h1 class="title">Post Update</h1>
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
                <a class="btn btn-primary" href="{{ route('post.create') }}">
                <ion-icon name="add-outline"></ion-icon>
                    <span>Post Create</span>
                </a>
            </div>
        </div>
        <div class="form-block">
            {!! Form::open(array('route' => ['post.update', $post->id], 'class'=> 'row g-3', 'method'=>'PUT', 'enctype' => 'multipart/form-data')) !!}
            @csrf
                <div class="col-md-8">
                    {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
                    {!! Form::text('title', $post->title, ['class' => 'form-control']) !!}
                    @if($errors->has('title'))
                        <div class="error_msg">
                            {{ $errors->first('title') }}
                        </div>
                    @endif
                </div> 
                <div class="col-md-8">
                    {!! Form::label('category', 'Category', ['class' => 'form-label']) !!}
                    {!! Form::text('category', $post->category, ['class' => 'form-control']) !!}
                    @if($errors->has('category'))
                        <div class="error_msg">
                            {{ $errors->first('category') }}
                        </div>
                    @endif
                </div> 
                <div class="col-md-8">
                    {!! Form::label('image', 'Image', ['class' => 'form-label']) !!}
                    {!! Form::text('image', $post->image, ['class' => 'form-control']) !!}
                    @if($errors->has('image'))
                        <div class="error_msg">
                            {{ $errors->first('image') }}
                        </div>
                    @endif
                </div> 
                <div class="col-md-8">
                    {!! Form::label('description', 'Description', ['class' => 'form-label']) !!}
                    {!! Form::text('description', $post->description, ['class' => 'form-control']) !!}
                    @if($errors->has('description'))
                        <div class="error_msg">
                            {{ $errors->first('description') }}
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
