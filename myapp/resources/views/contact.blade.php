@extends('layouts.main')

@section('title', 'Kontak Saya')

@section('content')
    <section class="contact-section">
        <h2>Hubungi Saya</h2>
        <p>Jika kamu ingin berkolaborasi, menanyakan proyek, atau sekadar menyapa, silakan kirim pesan melalui form di bawah ini 👇</p>

        <form action="#" method="POST" class="contact-form">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
            </div>

            <div class="form-group">
                <label for="message">Pesan</label>
                <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda..." required></textarea>
            </div>

            <button type="submit" class="btn-send">Kirim Pesan</button>
        </form>
    </section>
@endsection
