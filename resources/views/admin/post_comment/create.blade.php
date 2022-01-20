@extends('admin.layouts.app')

@push('custom-style')
<!-- Styles -->
@endpush

@section('content')    
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-block dashboard">
    <section class="main-content">  
        <div class="title-section d-flex justify-content-between align-items-center">
            <div class="text-block">
                <h1 class="title">New Post Comment Create</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Post Comment</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-block">
                <a class="btn btn-primary" href="{{ route('post_comment.index') }}">
                <ion-icon name="list-outline"></ion-icon>
                    <span>Post Comment List</span>
                </a>
            </div>
        </div>
        <div class="form-block">
            {!! Form::open(array('route' => 'post_comment.store', 'method'=> 'POST', 'class'=> 'row g-3', 'enctype' => 'multipart/form-data')) !!}
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
                    {!! Form::label('email', 'Email', ['class' => 'form-label']) !!}
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    @if($errors->has('email'))
                        <div class="error_msg">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-8">
                    {!! Form::label('website', 'Website', ['class' => 'form-label']) !!}
                    {!! Form::text('website', null, ['class' => 'form-control']) !!}
                    @if($errors->has('website'))
                        <div class="error_msg">
                            {{ $errors->first('website') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-8">
                    {!! Form::label('comment', 'Comment', ['class' => 'form-label']) !!}
                    {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
                    @if($errors->has('comment'))
                        <div class="error_msg">
                            {{ $errors->first('comment') }}
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
            