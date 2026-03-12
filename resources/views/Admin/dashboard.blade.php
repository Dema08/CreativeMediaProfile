@extends('admin.layout.main')

@section('content')
<div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <h5 class="font-bold">Welcome back, {{ auth()->guard('admin')->user()->username }}</h5>
                <p class="mb-0">Use the sidebar to navigate or click the button below to log out.</p>
                <form action="{{ route('admin.logout') }}" method="POST" class="mt-4">
                    @csrf
                    <button type="submit" class="inline-block px-6 py-3 bg-gradient-to-tl from-purple-700 to-pink-500 text-white font-semibold text-xs leading-tight uppercase rounded shadow-md hover:shadow-lg focus:outline-none transition duration-150">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
