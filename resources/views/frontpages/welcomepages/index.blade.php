@extends('frontpages.layouts.master')
@section('content')
    <header class="masthead text-center text-white"
        style="background-image: url({{ asset('frontend/img/header.jpg') }}); height: 100vh">
        <div class="masthead-content">
            <div class="container px-5">
                <h2 class=" mb-0">Welcome to My Blog!</h2>
                <p class=" mb-0">Let's Create our blog in this website.</p>
            </div>
        </div>
    </header>
@endsection
