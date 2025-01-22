@extends('layouts.main')

@section('title', 'Raksa Cyber')

@section('content')
    <main class="space-y-40 mb-40">
        <x-home.hero-section></x-home.hero-section>
        <x-home.why-me-section></x-home.why-me-section>
        <x-home.testimonial-section></x-home.testimonial-section>
        <x-home.call-to-action></x-home.call-to-action>
    </main>
@endsection
