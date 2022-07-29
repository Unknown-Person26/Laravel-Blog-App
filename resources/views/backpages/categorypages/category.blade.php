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
                        {{ __('Create Category') }}
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
                            <table class="table table-hover table-white">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $row => $category)
                                        <tr>
                                            <th scope="row">{{ $row + 1 }}</th>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary text-dark dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Dropdown button
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href=" {{ route('categories.edit', $category) }} ">Edit</a>
                                                        </li>
                                                        <li>
                                                            <form action="{{ route('categories.destroy', $category) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <button class="dropdown-item" type="submit"
                                                                    value="delete">Delete</button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href=" {{ route('categories.create') }} " class="btn btn-primary my-3">Create Categories
                                -></a>
                        </div>
                    </div>
                </div>
            </div>
    </x-app-layout>
@endsection
