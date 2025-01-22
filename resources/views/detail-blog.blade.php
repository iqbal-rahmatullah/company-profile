@extends('layouts.main')

@section('title', 'Raksa Cyber')

@section('content')
    <main class="space-y-40 mb-40 pt-24">
        <div class="container mx-auto px-4 py-8">
            <div class="max-w-4xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                <div class="relative overflow-hidden rounded-lg mb-6">
                    <img
                        src="{{ asset('storage/' . $article->banner) }}"
                        alt="Blog Banner"
                        class="w-full h-64 object-cover object-center">
                </div>
                <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">{{ $article->title }}</h1>
                <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">
                    By {{ $article->author }} - {{ $article->created_at->format('M d, Y') }}
                </p>
                <div class="text-gray-700 dark:text-gray-300 leading-relaxed">
                    {!! nl2br(e($article->content)) !!}
                </div>
            </div>
        </div>

    </main>
@endsection
