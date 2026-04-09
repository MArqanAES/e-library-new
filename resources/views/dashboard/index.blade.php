@extends('layouts.dashboard')

@section('content')
    <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
        <h1 class="text-xl font-semibold text-gray-900">Dashboard</h1>
        <p class="mt-2 text-sm text-gray-600">User yang sedang login {{ auth()->user()->name }}</p>
    </div>
@endsection
