@extends('layouts.main')

@section('title', $title)

@section('content')
<section class="text-center py-12">
    <h2 class="text-4xl font-bold text-blue-600 mb-4">{{ $title }} to My Portfolio</h2>

    <p class="text-gray-700 max-w-2xl mx-auto mb-8">
        I'm <span class="font-semibold">{{ $name }}</span>, {{ $intro }}
    </p>

    <a href="/projects" 
       class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
       View My Projects
    </a>
</section>

<section class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
    @foreach($features as $f)
        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
            <h3 class="text-xl font-semibold mb-2 text-blue-600">{{ $f['title'] }}</h3>
            <p class="text-gray-600">{{ $f['desc'] }}</p>
        </div>
    @endforeach
</section>
@endsection
