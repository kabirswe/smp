@extends('admin.layouts.app')

@push('custom-style')
<!-- Styles -->
@endpush

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-block dashboard">
    <section class="main-content"> 
        <div class="title-section d-flex justify-content-between align-items-center">
            <div class="text-block">
                <h1 class="title">Ticket Update</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Ticket</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-block">
                <a class="btn btn-primary" href="{{ route('ticket.index') }}">              
                <ion-icon name="list-outline"></ion-icon>
                    <span>Ticket List</span>
                </a>
                <a class="btn btn-primary" href="{{ route('ticket.create') }}">
                    <ion-icon name="add-outline"></ion-icon>
                    <span>Ticket Create</span>
                </a>
            </div>
        </div>
        <div class="form-block">
            {!! Form::open(array('route' => ['ticket.update', $ticket->id], 'class'=> 'row g-3', 'method'=>'PUT', 'enctype' => 'multipart/form-data')) !!}
            @csrf
                <div class="col-md-8">
                    {!! Form::label('unit_price', 'Unit Price', ['class' => 'form-label']) !!}
                    {!! Form::text('unit_price', $ticket->unit_price, ['class' => 'form-control']) !!}
                    @if($errors->has('unit_price'))
                        <div class="error_msg">
                            {{ $errors->first('unit_price') }}
                        </div>
                    @endif
                </div> 
                <div class="col-md-8">
                    {!! Form::label('quantity', 'Quantity', ['class' => 'form-label']) !!}
                    {!! Form::text('quantity', $ticket->quantity, ['class' => 'form-control']) !!}
                    @if($errors->has('quantity'))
                        <div class="error_msg">
                            {{ $errors->first('quantity') }}
                        </div>
                    @endif
                </div> 
                <div class="col-md-8">
                    {!! Form::label('total_price', 'Total Price', ['class' => 'form-label']) !!}
                    {!! Form::text('total_price', $ticket->total_price, ['class' => 'form-control']) !!}
                    @if($errors->has('total_price'))
                        <div class="error_msg">
                            {{ $errors->first('total_price') }}
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
