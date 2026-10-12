@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="min-h-screen">
    <nav class="bg-white border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">
            <span class="font-semibold">Admin Dashboard</span>
            <div class="flex items-center gap-4 text-sm">
                <span class="text-gray-600">{{ auth()->user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-red-600 hover:underline">Log out</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-4 py-8">
        <h1 class="text-2xl font-semibold mb-2">Welcome, {{ auth()->user()->name }}</h1>
        <p class="text-gray-600">Dashboard content will go here.</p>
    </main>
</div>
@endsection
