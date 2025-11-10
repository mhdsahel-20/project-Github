@extends('layouts.main')

@section('title', 'Welcome')

@section('content')
<section class="text-center py-12">
    <h2 class="text-4xl font-bold text-blue-600 mb-4">Welcome to My Portfolio</h2>
    <p class="text-gray-700 max-w-2xl mx-auto mb-8">
        I'm <span class="font-semibold">Muh Sahel Muawwal</span>, a web developer passionate about building
        elegant and functional web applications using Laravel, Tailwind CSS, and modern web technologies.
    </p>

    <a href="/projects" 
       class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
       View My Projects
    </a>
</section>

<section class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="text-xl font-semibold mb-2 text-blue-600">Web Development</h3>
        <p class="text-gray-600">I create responsive, modern, and secure web applications using Laravel and Tailwind CSS.</p>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="text-xl font-semibold mb-2 text-blue-600">UI/UX Design</h3>
        <p class="text-gray-600">I design clean, intuitive interfaces that deliver great user experiences.</p>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="text-xl font-semibold mb-2 text-blue-600">Continuous Learning</h3>
        <p class="text-gray-600">I’m always learning new tools and frameworks to stay ahead in web technology trends.</p>
    </div>
</section>
@endsection
