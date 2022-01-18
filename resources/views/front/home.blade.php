
@extends('front.layouts.app')

@section('content')
<main class="main-container">
    <div class="video-container">
        <video autoplay muted loop id="myVideo">
            <source src="https://youtu.be/G1nZNpPBz1o" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
    </div>
</main>
@endsection
