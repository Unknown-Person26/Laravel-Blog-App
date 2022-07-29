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
                        {{ __('Edit Category') }}
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
                            <form action="{{ route('categories.update', $category) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                {{-- name --}}
                                <label for="formFile" class="form-label inline-block mb-2 text-gray-500"></label>
                                <div class="form-group mb-6">

                                </div>
                                {{-- name --}}
                                <label for="formFile" class="form-label inline-block mb-2 text-gray-500">Category
                                    Name</label>
                                <div class="form-group mb-6">
                                    <input type="text"
                                        class="form-control 
                                        w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding
                                        border border-solid border-gray-300 rounded
                                        focus:text-gray-700 focus:bg-white focus:border-red-600 focus:outline-none"
                                        id="name" name="name" value=" {{ $category->name }} ">
                                    @error('name')
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
                            <a href=" {{ route('categories.index') }} " class="btn btn-primary my-3">Category list -></a>
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
