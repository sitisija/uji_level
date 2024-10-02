@extends('layouts.master')

@section('title', 'Blog Detail')

@section('content')
<div class="container mt-5">
    <div class="row mt-2">
        <div class="col-8 p-4 ">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('slider/slider3.jpg') }}" class="card-img-top border-radius h-100 w-100"  alt="Gambar Blog 1">
                </div>
                <div class="col-12 ">
                    <h2 class="mb-3">Cybersecurity: Apa Itu dan Mengapa Penting?</h2>
                    <p><strong>12 September 2024</strong></p>
                   <p>Cybersecurity, atau keamanan siber, adalah praktek melindungi sistem komputer, jaringan, dan data dari serangan, kerusakan, atau akses tidak sah. Dengan semakin banyaknya aktivitas yang bergantung pada teknologi digital, cybersecurity menjadi aspek krusial untuk menjaga keamanan informasi dan sistem dari berbagai ancaman siber.

                    1. Apa Itu Cybersecurity?
                    Cybersecurity mencakup berbagai teknik dan alat yang dirancang untuk melindungi perangkat keras, perangkat lunak, dan data dari ancaman dan serangan yang dapat merusak atau mencuri informasi penting. Ini melibatkan pengembangan strategi untuk mengidentifikasi, mengatasi, dan mencegah potensi risiko keamanan.
                    
                    2. Jenis Ancaman Cybersecurity
                    Malware: Perangkat lunak berbahaya yang dirancang untuk merusak sistem atau mencuri data, seperti virus, trojan, dan ransomware.
                    Phishing: Teknik penipuan di mana penyerang mencoba memperoleh informasi pribadi atau data sensitif melalui email atau pesan palsu.
                    Hacking: Akses tidak sah ke sistem komputer atau jaringan untuk mencuri data atau menyebabkan kerusakan.
                    DDoS (Distributed Denial of Service): Serangan yang bertujuan untuk membuat layanan online tidak dapat diakses dengan membanjiri server dengan lalu lintas berlebih.
                    Insider Threats: Ancaman yang berasal dari dalam organisasi, seperti karyawan yang menyalahgunakan akses mereka untuk merusak atau mencuri data.
                    3. Komponen Utama Cybersecurity
                    Kebijakan Keamanan: Aturan dan prosedur yang mengatur cara melindungi data dan sistem. Ini mencakup aspek seperti pengelolaan akses, penggunaan perangkat, dan penanganan insiden.
                    Kontrol Akses: Teknik untuk mengatur siapa yang memiliki izin untuk mengakses sistem dan data. Ini termasuk autentikasi (misalnya, password, biometrik) dan otorisasi (misalnya, hak akses).
                    Enkripsi: Proses mengubah data menjadi format yang tidak dapat dibaca tanpa kunci dekripsi, untuk melindungi data saat disimpan atau ditransmisikan.
                    Firewall: Sistem yang memantau dan mengontrol lalu lintas jaringan untuk mencegah akses tidak sah.
                    Antivirus dan Antimalware: Program yang dirancang untuk mendeteksi, mencegah, dan menghapus perangkat lunak berbahaya.
                    Pemantauan dan Deteksi: Alat yang memantau aktivitas jaringan dan sistem untuk mendeteksi ancaman atau aktivitas yang mencurigakan.
                    4. Praktik Terbaik dalam Cybersecurity
                    Pendidikan dan Kesadaran: Mengedukasi pengguna dan karyawan tentang risiko keamanan dan praktik terbaik, seperti mengenali email phishing dan menggunakan kata sandi yang kuat.
                    Pembaruan Rutin: Menjaga sistem dan perangkat lunak tetap diperbarui dengan patch keamanan terbaru untuk melindungi dari kerentanan yang diketahui.
                    Backup Data: Secara rutin membuat salinan data penting dan menyimpannya di lokasi yang aman untuk mencegah kehilangan data akibat serangan atau bencana.
                    Penilaian Keamanan: Melakukan penilaian dan audit keamanan secara berkala untuk mengidentifikasi dan memperbaiki potensi kelemahan dalam sistem.
                    5. Mengapa Cybersecurity Penting?
                    Melindungi Data Sensitif: Keamanan siber membantu melindungi informasi pribadi, finansial, dan bisnis yang penting dari pencurian atau kebocoran.
                    Mencegah Kerugian Finansial: Serangan siber dapat menyebabkan kerugian finansial yang signifikan, baik melalui pencurian data atau biaya pemulihan setelah serangan.
                    Menjaga Reputasi: Serangan siber dapat merusak reputasi perusahaan dan kehilangan kepercayaan pelanggan. Cybersecurity membantu menjaga integritas dan kepercayaan.
                    Mematuhi Regulasi: Banyak industri memiliki peraturan dan standar keamanan yang harus dipatuhi. Memiliki strategi cybersecurity yang kuat membantu memastikan kepatuhan terhadap regulasi tersebut.</p>
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
