@extends('layouts.main')

@section('title', 'Tentang Saya')

@section('content')
    <h2>Tentang Saya</h2>

    {{-- Foto profil --}}
    <img src="{{ asset('images/WhatsApp Image 2025-11-10 at 20.56.37_3c469093.jpg') }}" alt="Foto Saya"
         style="width: 180px; height: 180px; border-radius: 50%; object-fit: cover; margin-bottom: 20px; box-shadow: 0 4px 10px rgba(0,0,0,0.2);">

    <p>Halo! Nama saya <strong>Muh Sahel Muawwal</strong>, saya seorang pengembang web yang tertarik pada desain modern dan teknologi web.</p>

    <section style="margin-top: 30px;">
        <h3>Keahlian</h3>
        <ul style="list-style: none; padding: 0;">
            <li>💻 Laravel & PHP</li>
            <li>🎨 HTML, CSS, Tailwind</li>
            <li>⚙️ JavaScript & React</li>
        </ul>
    </section>
@endsection
