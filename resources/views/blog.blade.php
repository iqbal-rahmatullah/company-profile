@extends('layouts.main')

@section('title', 'Raksa Cyber')

@section('content')
    <main class="space-y-40 mb-40">
        <x-blogs.blog-section :articles="$articles"></x-blogs.blog-section>
    </main>
@endsection
