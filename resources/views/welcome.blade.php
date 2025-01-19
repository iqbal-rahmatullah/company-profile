@extends('layouts.main')

@section('title', 'Raksa Cyber')

@section('content')
    <main class="space-y-40 mb-40">
        <x-hero-section></x-hero-section>
        <x-feature-section></x-feature-section>
        <x-stats-section></x-stats-section>
        <x-testimonial-section></x-testimonial-section>
        <x-call-to-action></x-call-to-action>
        <x-blog-section></x-blog-section>
    </main>
@endsection
