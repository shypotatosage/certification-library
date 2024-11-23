@extends('layouts.layout')

@section('title', $title)

@section('content')
    <div class="container mx-auto p-4 md:p-6 pt-6">
        <div class="flex justify-center mb-12">
            <h2 class="text-4xl font-semibold text-black dark:text-white pt-4">My Books</h2>
        </div>

        <div class="mb-6">
            <x-search-filter-form :categories=$categories action="{{ url('/my-books') }}" />
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($books as $book)
                <x-book-card :book=$book />
            @endforeach
        </div>
    </div>
@endsection