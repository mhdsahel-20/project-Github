@extends('layouts.main')

@section('title', $title)

@section('content')
    <h2>{{ $title }}</h2>

    {{-- Foto profil --}}
    <img src="{{ asset($photo) }}" alt="Foto Saya"
         style="width: 180px; height: 180px; border-radius: 50%; object-fit: cover; margin-bottom: 20px; box-shadow: 0 4px 10px rgba(0,0,0,0.2);">

    <p>
        Halo! Nama saya <strong>{{ $name }}</strong>, {{ $description }}
    </p>

    <section style="margin-top: 30px;">
        <h3>Keahlian</h3>
        <ul style="list-style: none; padding: 0;">
            @foreach($skills as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>
    </section>
@endsection
