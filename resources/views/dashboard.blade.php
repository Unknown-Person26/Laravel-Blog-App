@extends('backpages.layouts.master')
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
                        {{ __('Dashboard') }}
                    </h2>
                </div>
            </div>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gradient-to-r from-red-600 to-black  h-screen overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-white bg-gradient-to-r from-red-600 to-black ">
                        You're logged in!
                        <div class="mt-5">
                            <ul>
                                <li> <a href="{{ route('blog.create') }}" class="btn btn-primary mb-3">Create
                                        Post</a></li>
                            </ul>
                            <ul>
                                <li> <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Create
                                        Category</a></li>
                            </ul>
                            <ul>
                                <li> <a href="{{ route('categories.index') }}" class="btn btn-primary">Category List</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
@endsection
