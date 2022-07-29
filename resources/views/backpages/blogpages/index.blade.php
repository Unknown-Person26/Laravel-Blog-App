@extends('backpages.layouts.master')
@section('cdn')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <x-app-layout>
        <x-slot name="header">
            <div class="h-56 grid grid-cols-3  content-start ">
                <div>
                    <button
                        class="btn btn-primary text-gray hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out"
                        id="sidebarToggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </button>
                </div>
                <div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Create New Post') }}
                    </h2>
                </div>
            </div>
        </x-slot>

        {{-- Form Input Data --}}
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gradient-to-r from-red-600 to-black  h-screen overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-gradient-to-r from-red-600 to-black ">
                        <div class=" p-6 rounded-lg shadow-lg bg-white ">
                            @include('includes.flash-message')
                            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{-- Image --}}
                                <label for="formFile" class="form-label inline-block mb-2 text-gray-500">Post
                                    Image 'Must a Landscape Image 1920x1080px (1080P)' </label>
                                <div class="form-group mb-6">
                                    <input
                                        class="form-control 
                                    block
                                    w-full
                                    px-3
                                    py-1.5
                                    text-base
                                    font-normal
                                    text-gray-700
                                    bg-white bg-clip-padding
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-red-600 focus:outline-none"
                                        type="file" id="image" name="image">
                                    @error('image')
                                        {{-- The $attributeValue filed is/must be $validationRule --}}
                                        <p class="pt-2 text-danger"> {{ $message }}</p>
                                    @enderror
                                </div>
                                {{-- Category --}}
                                <label for="formFile" class="form-label inline-block mb-2 text-gray-500">Post
                                    Category</label>
                                <div class="form-group mb-6">
                                    <select
                                        class="form-select appearance-none
                                    block
                                    w-full
                                    px-3
                                    py-1.5
                                    text-base
                                    font-normal
                                    text-gray-700
                                    bg-white bg-clip-padding bg-no-repeat
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        aria-label="Default select example" name="category_id" id="category_id">
                                        <option selected disabled>Select category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        {{-- The $attributeValue filed is/must be $validationRule --}}
                                        <p class="pt-2 text-danger"> {{ $message }}</p>
                                    @enderror
                                </div>
                                {{-- Title --}}
                                <label for="formFile" class="form-label inline-block mb-2 text-gray-500">Post Title</label>
                                <div class="form-group mb-6">
                                    <input type="text"
                                        class="form-control 
                                        w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding
                                        border border-solid border-gray-300 rounded transition ease-in-out m-0
                                        focus:text-gray-700 focus:bg-white focus:border-red-600 focus:outline-none"
                                        id="title" name="title" value=" {{ old('title') }} ">
                                    @error('title')
                                        {{-- The $attributeValue filed is/must be $validationRule --}}
                                        <p class="pt-2 text-danger"> {{ $message }}</p>
                                    @enderror
                                </div>
                                {{-- Body --}}
                                <label for="formFile" class="form-label inline-block mb-2 text-gray-500">Post
                                    Body</label>
                                <div class="form-group mb-6">
                                    <textarea
                                        class="
                                  form-control
                                  h-70
                                  w-full
                                  px-3
                                  py-1.5
                                  text-base
                                  font-normal
                                  text-gray-700
                                  bg-white bg-clip-padding
                                  border border-solid border-gray-300
                                  rounded
                                  transition
                                  ease-in-out
                                  m-0
                                  focus:text-gray-700 focus:bg-white focus:border-red-600 focus:outline-none
                                "
                                        id="body" name="body">{{ old('body') }}</textarea>
                                    @error('body')
                                        {{-- The $attributeValue filed is/must be $validationRule --}}
                                        <p class="pt-2 text-danger"> {{ $message }}</p>
                                    @enderror
                                </div>
                                {{-- Button --}}
                                <button type="submit" value="submit"
                                    class="
                                w-full
                                px-6
                                py-2.5
                                bg-red-600
                                text-white
                                font-medium
                                text-xs
                                leading-tight
                                uppercase
                                rounded
                                shadow-md
                                hover:bg-red-700 hover:shadow-lg
                                focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0
                                active:bg-red-800 active:shadow-lg
                                transition
                                duration-150
                                ease-in-out">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </x-app-layout>
@endsection
@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#body'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
