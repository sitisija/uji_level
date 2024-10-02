@extends('layouts.master')

@section('title', 'Blog Detail')

@section('content')
<div class="container mt-5">
    <div class="row mt-2">
        <div class="col-8 p-4 ">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('slider/slider2.jpg') }}" class="card-img-top border-radius h-100 w-100"  alt="Gambar Blog 1">
                </div>
                <div class="col-12 ">
                    <h2 class="mb-3">Web Development: Apa Itu dan Mengapa Penting?</h2>
                    <p><strong>12 September 2024</strong></p>
                   <p>Web development adalah proses menciptakan dan mengelola situs web. Ini mencakup berbagai aspek mulai dari desain, pengkodean, hingga pemeliharaan situs. Dalam dunia yang semakin digital ini, kemampuan untuk membangun dan mengelola situs web adalah keterampilan yang sangat berharga. Berikut adalah beberapa elemen penting dari web development:

                    Desain Web: Desain web melibatkan tata letak dan estetika situs web. Desainer web menggunakan berbagai alat untuk membuat tampilan yang menarik dan user-friendly. Desain yang baik tidak hanya memikat secara visual, tetapi juga memastikan bahwa situs tersebut mudah digunakan.
                    
                    Pengkodean Front-End: Front-end development mencakup pembuatan elemen yang dapat dilihat dan berinteraksi langsung dengan pengguna di situs web. Teknologi utama dalam front-end development adalah HTML (Hypertext Markup Language), CSS (Cascading Style Sheets), dan JavaScript. HTML memberikan struktur, CSS menangani styling, dan JavaScript menambahkan interaktivitas.
                    
                    Pengkodean Back-End: Back-end development berurusan dengan server, database, dan aplikasi yang tidak terlihat oleh pengguna akhir. Ini termasuk bahasa pemrograman seperti PHP, Python, Ruby, dan framework seperti Laravel yang membantu membangun aplikasi web yang kompleks.
                    
                    Manajemen Database: Database adalah tempat penyimpanan data untuk situs web. Sistem manajemen database seperti MySQL, PostgreSQL, atau MongoDB digunakan untuk menyimpan, mengelola, dan mengambil data yang diperlukan oleh situs web.
                    
                    Tren Terbaru dalam Web Development:
                    
                    Progressive Web Apps (PWAs): Aplikasi web yang memberikan pengalaman seperti aplikasi mobile dengan kemampuan offline.
                    Single Page Applications (SPA): Aplikasi web yang memuat satu halaman dan menggunakan JavaScript untuk memperbarui konten secara dinamis.
                    Serverless Architecture: Menggunakan layanan seperti AWS Lambda untuk menjalankan kode tanpa mengelola server.
                    Desain Responsif: Membuat situs web yang berfungsi dengan baik di berbagai perangkat, dari smartphone hingga desktop.
                    AI dan Chatbots: Menerapkan kecerdasan buatan untuk meningkatkan pengalaman pengguna dengan bantuan virtual assistants dan customer support otomatis.
                    Tips untuk Pemula:
                    
                    Mulailah dengan belajar HTML dan CSS untuk memahami dasar-dasar pembuatan situs web.
                    Eksplorasi JavaScript untuk menambahkan interaktivitas ke situs Anda.
                    Pelajari tentang framework seperti Bootstrap untuk mempercepat pengembangan dan memastikan desain yang responsif.
                    Cobalah proyek kecil untuk menerapkan apa yang telah dipelajari dan bangun portofolio Anda.
                    Web development adalah bidang yang dinamis dan terus berkembang. Dengan memahami dasar-dasarnya dan mengikuti tren terbaru, Anda bisa tetap relevan dan efisien dalam menciptakan situs web yang berkualitas tinggi.</p>
                </div>
            </div>
        </div>
        
        <div class="col-4 p-4 ">
            <b>Blog Terbaru</b>
            <div class="row mt-3">
                <div class="col-3  ">
                    <img src="{{ asset('slider/slider3.jpg') }}" class="border-radius w-100 h-100" alt="Gambar Blog 3">
                </div>
                <div class="col-9  ">
                    <h6>Annyeongg</h6>
                    <p>12 September 2024</p>
                </div>
              </div>              
              <div class="row mt-3">
                <div class="col-3">
                    <img src="{{ asset('slider/slider2.jpg') }}" class="border-radius w-100 h-100" alt="Gambar Blog 2">
                </div>
                <div class="col-9 ">
                    <h6>Annyeongg</h6>
                    <p>12 September 2024</p>
                </div>
              </div> 
        </div>
    </div>
</div>
@endsection
