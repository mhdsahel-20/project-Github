<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    // Halaman utama portofolio
    public function index()
    {
        // Data atau teks yang kamu tulis di Blade bisa dimasukkan sebagai variable di sini
        $title = "Welcome";
        $name = "Muh Sahel Muawwal";

        $intro = "I'm $name, a web developer passionate about building elegant and functional web applications using Laravel, Tailwind CSS, and modern web technologies.";

        $features = [
            [
                'title' => 'Web Development',
                'desc' => 'I create responsive, modern, and secure web applications using Laravel and Tailwind CSS.'
            ],
            [
                'title' => 'UI/UX Design',
                'desc' => 'I design clean, intuitive interfaces that deliver great user experiences.'
            ],
            [
                'title' => 'Continuous Learning',
                'desc' => 'I’m always learning new tools and frameworks to stay ahead in web technology trends.'
            ],
        ];

        // Return ke Blade
        return view('welcome', compact('title', 'name', 'intro', 'features'));
    }

        public function about()
    {
        $title = "Tentang Saya";

        $name = "Muh Sahel Muawwal";
        $description = "Halo! Nama saya $name, saya seorang pengembang web yang tertarik pada desain modern dan teknologi web.";

        $skills = [
            "💻 Laravel & PHP",
            "🎨 HTML, CSS, Tailwind",
            "⚙️ JavaScript & React",
        ];

        $photo = "images/WhatsApp Image 2025-11-10 at 20.56.37_3c469093.jpg";

        return view('about', compact('title', 'name', 'description', 'skills', 'photo'));

}

    public function contact()
    {
        $title = "Kontak Saya";

        $intro = "Jika kamu ingin berkolaborasi, menanyakan proyek, atau sekadar menyapa, silakan kirim pesan melalui form di bawah ini 👇";

        return view('portofolio.contact', compact('title', 'intro'));
    }
}
