@extends('frontpages.layouts.master')
@section('content')
    <!-- Header-->
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container px-5">
                <h1 class="masthead-heading mb-0">About Me</h1>
            </div>
        </div>
    </header>
    <!-- Content section 1-->
    <section id="scroll">
        <div class="container px-5 text-white">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-5 order-lg-3">
                    <div class="p-5"><img class="img-thumbnail  rounded-circle" style="max-width:90%;"
                            src="{{ asset('frontend/img/profile.png') }}" />
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Introduction</h2>
                        <p>Hello, my name is Farhan. I'm 19 years old and i stay in Bandung. I'm a junior web programmer
                            using PHP, Javascript, HTML and CSS.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 2-->
    <section>
        <div class="container px-5 text-white">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="p-5"><img class="img-thumbnail "style="max-width:80%;"
                            src="{{ asset('frontend/img/laravel.png') }}" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4">About This App</h2>
                        <p>I'm using laravel framework to buld this apps for the backend. Bootstrap 5 and a little bit
                            Tailwind CSS for the frontend. The Database using Mysql and XAMPP for manage the table.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 3-->
    <section>
        <div class="container px-5 text-white">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-12 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">What this app Made for</h2>
                        <p>I'm making this app for my first project using laravel to see that i'm capable of. In this app
                            you can make your own blog and manage it by your self. When this app has a domain other people
                            can see your blog too but they cannot manage it or change anything in your blog. So that's from
                            me thanks for appreciate my project </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
