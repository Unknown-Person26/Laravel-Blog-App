@extends('frontpages.layouts.master')
@section('content')
    <!-- Header-->
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container px-5">
                <h1 class="masthead-heading mb-0">All Topic</h1>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container container-t" id="topic">
        <div class="row">
            @include('includes.flash-message')
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    @forelse ($posts as $post)
                        <div class="col-md-6">
                            <!-- Blog post-->
                            <div class="card bg-dark mb-4">
                                <a href="#!"><img class="card-img-top img-fluid" src=" {{ asset($post->imagePath) }} "
                                        alt="..." /></a>
                                <div class="card-body bg-dark">
                                    <div class="small text-muted"> {{ $post->created_at->diffForHumans() }} </div>
                                    <div class="small text-muted">Post by {{ $post->user->name }} </div>
                                    <h2 class="text-white h4">{{ $post->title }}</h2>
                                    <a class="btn btn-primary" href="{{ route('blog.show', $post) }}">Read more →</a>
                                    @auth
                                        @if (auth()->user()->id === $post->user_id)
                                            <a class="btn btn-success" href="{{ route('blog.edit', $post) }}">Edit</a>
                                            <form class="pt-1" action="{{ route('blog.destroy', $post) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-warning" type="submit" value="delete">Delete</button>
                                            </form>
                                        @endif
                                    @endauth
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-white h4 mb-5">Sorry, currently there is no blog post related to that search!</p>
                    @endforelse
                </div>
                {{ $posts->links() }}
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card bg-dark mb-4">
                    <div class="card-header bg-dark h4 text-white">Search</div>
                    <div class="card-body bg-dark">
                        <form action="">
                            <div class="input-group">
                                <input class="form-control " type="text" name="search" placeholder="Enter search " />
                                <button class="btn btn-primary " id="button-search" type="submit">Go!</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card bg-dark mb-4">
                    <div class="card-header bg-dark h4 text-white">Categories</div>
                    <div class="card-body bg-dark">
                        <div class="row">
                            @foreach ($categories as $category)
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a
                                                href="{{ route('blog.index', ['category' => $category->name]) }}">{{ $category->name }}</a>
                                        </li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
