@extends('layouts.main')

@section('title', 'Raksa Cyber')

@section('content')
    <main class="space-y-40 mb-40">
        <x-products.product-section :products="$products"></x-products.product-section>
    </main>
@endsection
