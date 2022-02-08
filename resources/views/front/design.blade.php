@extends('front.layouts.app')

@push('custom-style')
    <link rel="stylesheet" href="{{ asset('css/front/design.css') }}">
@endpush

@section('content')
<main class="design-container">
    <div class="container">
        <div class="design">
            <img src="{{ asset('images/front/home/300.jpg') }}" alt="">
        </div>
    </div>
</main>
@endsection
