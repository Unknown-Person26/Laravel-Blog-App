@extends('frontpages.layouts.master')
@section('content')
    <!-- Header-->
    <header class="masthead  img-fluid mb-3" style="background-image: url({{ asset($post->imagePath) }} ); height: 600px;">
        <h1 class="text-center text-white bg-dark opacity-75 ">
            {{ $post->title }}</h1>
    </header>

    <!-- Content section 1-->
    <section id="scroll">
        <div class="container px-5 text-white ">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-8 order-lg-1">
                    <div class="p-5">
                        <div class="small  text-muted"> {{ $post->created_at->diffForHumans() }}
                        </div>
                        <div class="small text-muted">Post by {{ $post->user->name }}
                        </div>
                        <div class="pt-5 mb-5">
                            {!! $post->body !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects -->
    <section id="projects">
        <div class="container container-t">
            <div class="row text-white">
                <div class="col mb-3">
                    <h2>Related</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($relatedPosts as $relatedPost)
                    <div class="col-md-4 mb-3">
                        <div class="card bg-dark">
                            <a href="#!"><img class="card-img-top img-fluid"
                                    src=" {{ asset($relatedPost->imagePath) }} " alt="..." /></a>
                            <!-- Blog post-->
                            <div class="card-body bg-dark">
                                <div class="small text-muted"> {{ $relatedPost->created_at->diffForHumans() }} </div>
                                <div class="small text-muted">Post by {{ $relatedPost->user->name }} </div>
                                <h2 class="text-white h4">{{ $relatedPost->title }}</h2>
                                <a class="btn btn-primary" href="{{ route('blog.show', $relatedPost) }}">Read more →</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Project -->
@endsection
