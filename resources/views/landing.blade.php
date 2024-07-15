<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHIP ALERT</title>
    <link rel="icon" type="image/png" href="{{ asset('asset/logo_title.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
 /* CSS Responsif untuk bagian .solutions dan elemen lainnya */

body {
    font-family: 'Inter', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}
.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    height: 100vh;
}
section {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}
.header img {
    width: 213px;
    height: 209px;
    margin-top: -10px;
}
.header h1 {
    margin: 20px 0 10px;
    font-size: 90px;
}
.header p {
    font-size: 30px;
    margin-bottom: 20px;
}
.header button {
    background-color: #5bc0de;
    color: white;
    border: none;
    padding: 20px 40px;
    font-size: 1.2em;
    cursor: pointer;
    border-radius: 24px;
    width: 350px;
    height: 70px;
    display: inline-block;
    text-align: center;
    margin-bottom: 40px;
}
.header button:hover {
    background-color: #39a2d5;
}
.logos p {
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 10px;
}
.logos img {
    width: 665px;
    height: 90px;
    margin-bottom: 75rem;
    vertical-align: middle;
   
}
.ship_alert {
    background-color: #39a2d5;
    color: white;
    padding: 40px 20px;
    border-radius: 8px;
    height: 100vh;
}
.ship_alert img {
    width: 500px;
    margin-bottom: 20px;
}
.ship_alert h2 {
    font-size: 40px;
    margin-bottom: 80px;
    margin-top:10px;
}
.ship_alert p {
    font-size: 26px;
    margin-bottom: 0;
    margin-top: 50;
    text-align: justify;
    padding-left: 100px;
    padding-right: 100px;
}
.filosofi {
    background-color: #f4f4f4;
    padding: 40px;
    text-align: justify;
}
.filosofi img {
    max-width: 100%;
    height: auto;
    margin-bottom: 20px;
}
.filosofi p {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 20px;
}
.team {
    background-color: #005D9A;
    padding: 40px;
    text-align: center;
}
.team img {
    max-width: 100%;
    height: auto;
    margin-bottom: 20px;
}
.team-image {
    width: 1100px;
    height: 450px;
}
.team .team-members {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
}
.team .team-members img {
    width: 202px;
    height: 215px;
    object-fit: cover;
}
.team h2 {
    color: #F0EADE;
    justify-content: center;
    font-family: 'Inter', sans-serif;
    margin-bottom: 20px;
    margin-top: 0px;
}
.solutions {
    background-color: #f4f4f4;
    padding: 40px;
    text-align: center;
}
.solutions h2 {
    font-size: 40px;
    margin-bottom: 20px;
    color: black;
}
.solutions p {
    font-size: 24px;
    margin-bottom: 40px;
    margin-left: 50px;
    margin-right: 50px;
    text-align: justify;
}
.card {
    border-radius: 10px;
    width: 350px;
    height: 300px;
    transition: background-color 0.3s, color 0.3s;
}
.card:hover {
    background-color: #39a2d5;
    color: white;
}
.card-title {
    font-size: 24px;
    font-weight: bold;
}
.card-img {
    width: 300px;
    height: 200px;
    object-fit: cover;
    object-position: center;
}

.benefits-section {
    margin-top:39rem;
    background-color: #005D9A; /* Warna biru */
    color: white; /* Font warna putih */
    padding: 40px;
    text-align: center;
    height: 100vh;
}
.benefits-section h2 {
    font-size: 40px;
    padding: 24px;
}

.benefits-section ul {
    font-size: 24px;
    list-style-type: none; /* Menghilangkan bullet points */
    padding: 0;
    margin: 0 100px; /* Padding 100px di kanan dan kiri */
    text-align: justify;
}
.benefits-section ul li {
    margin-bottom: 15px;
}
.benefits-section ul li::before {
    content: counter(item) ". ";
    counter-increment: item;
    font-weight: bold;
}
.benefits-section ul {
    counter-reset: item;
}
.benefits-section ul li b {
    font-weight: bold;
}

.footer-section {
    background-color: #005D9A;
    color: #fff;
    margin:0;
    padding:0;
}.footer-section .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 80%; /* Change this value as needed */
    margin: 0 auto;
   
}
.footer-section .logo {
    font-size: 24px;
    font-weight: bold;
}
.footer-section .logo span {
    color: #000000;
}
.footer-section p {
    margin: 10px 0;
}


.instagram-icon {
    color: #ffffff; /* Warna ikon default */
    font-size: 45px; /* Ukuran ikon */
    margin: 10px; 
}
.navbar-brand img {
    height: 40px;
}
.solutions .card-img {
    width: 100%;
    height: auto;
}

.solutions .card-body {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}


/* Media Queries */

/* 768px  */
@media (max-width: 768px) {
    .container {
        width: 100%;
        height: 100vh;
    }

    .header img {
        width: 300px;
        height: auto;
        margin-top: -70px;
    }

    .header h1 {
        font-size: 70px;
    }

    .header p {
        font-size: 20px;
    }

    .header button {
        width: 350px;
        height: 60px;
        font-size: 1.2em;
        padding: 10px 20px;
    }

    .ship_alert img {
        width: 400px;
    }

    .ship_alert p {
        padding-left: 20px;
        padding-right: 20px;
        font-size: 20px;
    }

    .logos img {
        width: 600px;
        margin-bottom: 70rem;
    }

    .solutions p {
        margin-left: 10px;
        margin-right: 10px;
        font-size: 18px;
    }

    .card {
        width: 100%;
        height: auto;
    }

    .card-img {
        width: 100%;
        height: auto;
    }
}

/* For devices with a width of 576px or less */
@media (max-width: 576px) {
    .container {
        width: 100%;
        padding: 10px;
        height: 100vh;
    }

    .header img {
        width: 170px;
        margin-top: -60px;
    }

    .header h1 {
        font-size: 50px;
    }

    .header p {
        font-size: 18px;
    }

    .header button {
        width: 300px;
        height: 50px;
        font-size: 1em;
        padding: 8px 16px;
    }

    .ship_alert img {
        width: 360px;
    }

    .ship_alert p {
        padding-left: 10px;
        padding-right: 10px;
        font-size: 16px;
    }

    .logos img {
        width: 490px;
    }

    .solutions p {
        margin-left: 5px;
        margin-right: 5px;
        font-size: 16px;
    }

    .card {
        width: 100%;
        height: auto;
    }

    .card-img {
        width: 100%;
        height: auto;
    }

    .team .team-members img {
        width: 150px;
        height: auto;
    }

    .d-flex.flex-wrap {
        flex-direction: column;
    }

    

}
    </style>
</head>
<body>
    
     <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="width: 100%;">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('asset/logo.png') }}" alt="Logo">
        </a>
        <div class="ml-auto">
            <a class="btn btn-outline-dark btn-custom shadow" href="/dashboard">Lacak kapal</a>
        </div>
    </nav>
    
    <div class="container">
        <section class="header">
            <div>
                <img src="{{ asset('asset/ship_alert.png') }}" alt="SHIP ALERT Logo">
                <h1><i><b>SHIP ALERT</b></i></h1>
                <p>“SHIP-ALERT” (Smart Hazard Identification Protocol): Sistem Pintar Peringatan Kecelakaan Kapal tanpa Internet berbasis LoRa.</p>
                <button><b>Lacak Kapal</b></button>
            </div>
        </section>
        <section class="logos">
            <div>
                <img src="{{ asset('asset/logo_banyak.png') }}" alt="Supported Logos">
            </div>
        </section>
    </div>
    <section class="ship_alert">
        <div>
            <h2> <b>Apa Itu SHIP ALERT?</b> </h2>
            <img src="{{ asset('asset/logo_putih.png') }}" alt="SHIP ALERT Logo">
            <p>Proyek "SHIP ALERT" (Smart Hazard Identification Protocol) bertujuan untuk mengembangkan sistem pintar yang mampu memberikan peringatan dini terkait kecelakaan kapal tanpa memerlukan koneksi internet, menggunakan teknologi LoRa. Sistem ini dirancang untuk meningkatkan keselamatan dan keamanan nelayan dan awak kapal di wilayah yang sulit dijangkau jaringan internet. Target luaran meliputi pengembangan perangkat keras dengan berbagai sensor dan modul LoRa, serta perangkat lunak berupa aplikasi desktop untuk pemantauan data real-time dan informasi cuaca. Pengujian dan validasi sistem dilakukan untuk memastikan fungsionalitas dalam berbagai kondisi lingkungan, dengan melibatkan pengguna akhir untuk mendapatkan umpan balik. Dokumentasi lengkap dan panduan penggunaan yang jelas memudahkan operasional bagi nelayan.</p>
        </div>
    </section>
    <section class="filosofi">
        <div>
        <h2 style="text-align: center; font-size: 30px;"> <b>Filosofi Logo</b> </h2>
        <img src="{{ asset('asset/filosofi_logo2.png') }}" alt="SHIP ALERT Logo">
        </div>
    </section>
    <section class="team">
        <div>
            <h2 style="text-align: center; font-size: 40px;"><b>Tim SHIP ALERT</b></h2>
            <img class="team-image" src="{{ asset('asset/team.png') }}" alt="Tim SHIP ALERT">
            <div class="team-members">
                <img src="{{ asset('asset/pembimbing.png') }}" alt="Pembimbing">
                <img src="{{ asset('asset/ketua.png') }}" alt="Ketua">
                <img src="{{ asset('asset/anggota3.png') }}" alt="Anggota 3">
                <img src="{{ asset('asset/anggota2.png') }}" alt="Anggota 2">
                <img src="{{ asset('asset/anggota1.png') }}" alt="Anggota 1">
            </div>
        </div>
    </section>
    <section class="solutions">
        <div class="container">
            <h2 class="text-center mb-5"><b>Solusi dan Fitur Unggulan SHIP ALERT</b></h2>
            <p class="text-center mb-4">Fitur unggulan dari proyek SHIP ALERT mencakup beberapa aspek yang meningkatkan keselamatan dan efisiensi operasional di laut. Berikut adalah fitur-fitur utamanya:</p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">1. Peringatan Kecelakaan Real-Time Tanpa Internet</h5>
                            <img src="{{ asset('asset/alert.png') }}" alt="Feature Image 1" class="card-img">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">2. Dilengkapi dengan berbagai Sensor Canggih</h5>
                            <img src="{{ asset('asset/sensor_canggih.png') }}" alt="Feature Image 2" class="card-img">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">3. Fitur Darurat Tombol SOS</h5>
                            <img src="{{ asset('asset/sos.png') }}" alt="Feature Image 3" class="card-img">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">4. Menyediakan Tampilan Dashboard Monitoring real-time</h5>
                            <img style="max-height: 170px;" src="{{ asset('asset/dashboardd.png') }}" alt="Feature Image 4" class="card-img">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">5. Menampilkan Grafik Data Histori</h5>
                            <img src="{{ asset('asset/histori.png') }}" alt="Feature Image 5" class="card-img">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">6. Dirancang dengan Efisiensi Energi yang Optimal</h5>
                            <img style="max-height: 170px;" src="{{ asset('asset/energi.png') }}" alt="Feature Image 6" class="card-img">
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">7. Antarmuka Pengguna yang Intuitif dan mudah digunakan</h5>
                                <img style="max-height: 170px;" src="{{ asset('asset/antarmuka.png') }}" alt="Feature Image 7" class="card-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">8. Kompatibilitas Luas dan fleksibel sehingga mudah diimplementasikan</h5>
                                <img style="max-height: 170px;" src="{{ asset('asset/kompatibilitas.png') }}" alt="Feature Image 8" class="card-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mx-auto">
                    <p style="margin: 30px 0; font-size:20px; text-align:justify;">
                        SHIP ALERT menawarkan solusi dan fitur unggulan yang meningkatkan keselamatan dan efisiensi operasional di laut. Sistem ini menyediakan tampilan dashboard monitoring real-time yang memungkinkan nelayan memantau kondisi kapal secara langsung, menampilkan grafik data histori yang membantu dalam analisis dan pengambilan keputusan berdasarkan data suhu, gelombang, dan cuaca. Selain itu, SHIP ALERT dirancang dengan efisiensi energi optimal, memastikan bahwa perangkat dapat beroperasi dalam jangka waktu yang lama tanpa sering mengganti baterai, membuatnya ideal untuk penggunaan di lingkungan laut yang keras dan sering kali tanpa akses listrik.
                    </p>
                </div>
            </div>
        </div>
    </section>
<section class="benefits-section">
    <div>
            <h2> <b>Manfaat SHIP ALERT?</b> </h2>
            <p>
            <ul>
            <li><b>Meningkatkan Keselamatan di Laut</b> dengan memberikan peringatan dini tentang potensi kecelakaan atau kondisi berbahaya, sehingga nelayan dan awak kapal dapat mengambil tindakan pencegahan yang tepat waktu.</li>
            <li><b>Efisiensi Operasional</b> yang Memungkinkan nelayan untuk memantau kondisi kapal secara real-time dan melakukan penyesuaian operasional yang diperlukan, sehingga meningkatkan efisiensi dan produktivitas.</li>
            <li><b>Keterjangkauan Teknologi</b> menggunakan teknologi LoRa yang lebih murah dan hemat energi dibandingkan dengan solusi berbasis internet, sehingga lebih terjangkau bagi nelayan kecil dan komunitas maritim di daerah terpencil.</li>
            <li><b>Kemudahan antarmuka pengguna</b> yang intuitif dan mudah digunakan serta panduan penggunaan yang jelas membuat nelayan dapat mengoperasikan sistem tanpa memerlukan pelatihan khusus.</li>
            <li><b>Pemantauan Lingkungan</b> berdasarkan data yang dikumpulkan oleh sensor suhu dan gelombang dapat digunakan untuk pemantauan kondisi lingkungan laut, membantu dalam penelitian dan upaya konservasi.</li>
            <li><b>Respon Cepat terhadap Insiden</b>dengan fitur otomatis yang dapat mengirimkan notifikasi ke otoritas maritim terdekat saat terdeteksi kondisi darurat, mempercepat proses penyelamatan dan bantuan di laut.</li>
            </ul>
            </p>
        </div>
</section>
<section class="Sosmed">
<div class="container mt-5">
    <h2><b>Sosial Media Kami</b></h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <blockquote class="instagram-media"  data-instgrm-permalink="https://www.instagram.com/p/C88zdebys9c/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                <div style="padding:16px;">
                    <a href="https://www.instagram.com/p/C88zdebys9c/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank">
                        <div style=" display: flex; flex-direction: row; align-items: center;">
                            <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
                            <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                                <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                            </div>
                        </div>
                        <div style="padding: 19% 0;"></div>
                        <div style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                            <svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                    
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div style="padding-top: 8px;">
                            <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div>
                        </div>
                        <div style="padding: 12.5% 0;"></div>
                        <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                            <div>
                                <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(0px);"></div>
                            </div>
                            <div style="margin-left: 8px;">
                                <div style=" background-color: #F4F4F4; border-radius: 4px; height: 12.5px; width: 193px;"></div>
                            </div>
                            <div style="margin-left: auto;">
                                <div style=" background-color: #F4F4F4; border-radius: 4px; height: 12.5px; width: 24px;"></div>
                            </div>
                        </div>
                        <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                            <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
                            <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
                        </div>
                    </a>
                </div>
            </blockquote>
            <script async src="//www.instagram.com/embed.js"></script>
        </div>
        <div class="col-md-4 mb-4">
            <blockquote class="instagram-media"  data-instgrm-permalink="https://www.instagram.com/p/C88zlm3S0k9/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/C88zlm3S0k9/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/C88zlm3S0k9/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by “SHIP-ALERT” (Smart Hazard Identification Protocol) (@ship.allert)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
            <script async src="//www.instagram.com/embed.js"></script>
        </div>
        <div class="col-md-4 mb-4">
           <blockquote class="instagram-media"  data-instgrm-permalink="https://www.instagram.com/p/C88zr3nSYNK/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/C88zr3nSYNK/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/C88zr3nSYNK/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by “SHIP-ALERT” (Smart Hazard Identification Protocol) (@ship.allert)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
            <script async src="//www.instagram.com/embed.js"></script>
        </div>
    </div>
</section>
<footer class="footer-section">
    <div class="container">
        <div>
            <div class="logo">
                <img src="asset/logo_cream.png" alt="Ship Alert Icon" style="width: 50px; height: 50px;">
                SHIP ALERT<span></span>
            </div>
            <p>Bersama kami meningkatkan keselamatan maritim dengan teknologi LoRa tanpa ketergantungan internet.</p>
            <p>© 2024 SHIP ALERT. All Rights Reserved.</p>
        </div>
        <div>
           
        </div>
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>