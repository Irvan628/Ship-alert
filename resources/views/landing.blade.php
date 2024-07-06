<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <b>SHIP ALERT</b> </title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
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
            margin-top: 50px;
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
            margin: 50 15px;
            vertical-align: middle;
            margin-bottom: 20px;
        }
        .ship_alert {
            background-color: #39a2d5;
            color: white;
            padding: 40px 20px;
            border-radius: 8px;
        }
        .ship_alert img {
            width: 600px;
            margin-bottom: 20px;
        }
        .ship_alert h2 {
            font-size: 40px;
            margin-bottom: 80px;
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
        border: 2px solid #39a2d5;
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

    .carousel-control-prev,
    .carousel-control-next {
        width: 5%;
    }

    .carousel-inner {
        display: flex;
        flex-wrap: nowrap;
    }

    .carousel-item {
        flex: 0 0 auto;
        width: 100%;
    }

    .carousel-item .row {
        justify-content: center;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: #dfe7ec81;
    }

    .benefits-section {
            background-color: #005D9A; /* Warna biru */
            color: white; /* Font warna putih */
            padding: 40px;
            text-align: center;
        }

        .benefits-section h2 {
            font-size: 40px;
            margin-bottom: 20px;
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
        .contact-section {
    background-color: #f4f4f4;
    padding: 40px;
}

    .contact-section h2 {
        font-size: 40px;
        margin-bottom: 20px;
        text-align: center;
    }

    .contact-form {
        max-width: 600px;
        margin: 0 auto;
        text-align: left;
    }

    .contact-form .form-label {
        font-size: 18px;
        display: block;
        margin-bottom: 5px;
    }

    .contact-form .form-control {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .contact-form .btn {
        padding: 10px 20px;
        font-size: 18px;
        cursor: pointer;
        border-radius: 5px;
    }

        .footer-section {
            background-color: #005D9A; /* Warna biru */
            color: white; /* Font warna putih */
            padding: 20px;
            text-align: center;
        }

        .footer-section img {
            margin: 0 10px;
            vertical-align: middle;
        }

    </style>
</head>
<body>
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
        <!-- <div>
            <h2 style="text-align: center;"> <b>Filosofi Logo</b> </h2>
            <img src="{{ asset('asset/logo_cream.png') }}" alt="SHIP ALERT Logo">
            <p>
                1. Perahu Nelayan: Melambangkan mata pencaharian sehari-hari para nelayan.<br>
                2. Tulisan SHIP-ALERT: Merupakan judul dan singkatan dari proyek yang kami buat yaitu Smart Hazard Identification Protocol: Sistem Pintar Peringatan Kecelakaan Kapal tanpa Internet Berbasis LoRa.<br>
                3. Vector Alert: Menggambarkan pengiriman sinyal bahaya kapal nelayan.<br>
                4. Gelombang Laut: Melambangkan salah satu risiko bahaya ketika nelayan pergi melaut.
            </p>
        </div> -->
        <div>
        <h2 style="text-align: center; font-size: 40px;"> <b>Filosofi Logo</b> </h2>
        <img src="{{ asset('asset/filosofi_logo2.png') }}" alt="SHIP ALERT Logo">
        </div>
    </section>
    <section class="team">
        <div>
            <h2 style="text-align: center; font-size: 40px;"><b>Tim SHIP ALERT</b></h2>
            <img src="{{ asset('asset/team.png') }}" alt="Tim SHIP ALERT" style="width: 1100px; height: 450px;">
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
    <div>
        <h2><b>Solusi dan Fitur Unggulan SHIP ALERT</b></h2>
        <p>Fitur unggulan dari proyek SHIP ALERT mencakup beberapa aspek yang meningkatkan keselamatan dan efisiensi operasional di laut. Berikut adalah fitur-fitur utamanya:</p>
        <div id="solutionsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">1. Peringatan Kecelakaan Real-Time Tanpa Internet</h5>
                                    <img src="{{ asset('asset/alert.png') }}" alt="Feature Image 1" class="card-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">2. Dilengkapi dengan berbagai Sensor Canggih</h5>
                                    <img src="{{ asset('asset/sensor_canggih.png') }}" alt="Feature Image 2" class="card-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">3. Fitur Darurat Tombol SOS</h5>
                                    <img src="{{ asset('asset/sos.png') }}" alt="Feature Image 3" class="card-img">
                                </div>
                            </div>
                        </div>
                        <p style="margin: 50px; font-size:20px; text-align:justify;">
                            SHIP ALERT menawarkan solusi dan fitur unggulan yang meningkatkan keselamatan dan efisiensi operasional di laut. Sistem ini memberikan peringatan kecelakaan real-time tanpa internet, memungkinkan nelayan menerima informasi penting meskipun berada di lokasi terpencil. Dilengkapi dengan berbagai sensor canggih, seperti GPS, sensor kemiringan, dan sensor air, SHIP ALERT dapat memantau kondisi kapal secara menyeluruh. Selain itu, fitur darurat tombol SOS memungkinkan nelayan mengirimkan sinyal bantuan dengan cepat dalam situasi darurat, memastikan respon yang lebih cepat dan peningkatan keselamatan di laut.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">4. Menyediakan Tampilan Dashboard Monitoring real time</h5>
                                    <img style="max-height: 170px;" src="{{ asset('asset/dashboardd.png') }}" alt="Feature Image 4" class="card-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">5. Menampilkan Grafik Data Histori</h5>
                                    <img src="{{ asset('asset/histori.png') }}" alt="Feature Image 5" class="card-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">6. Dirancang dengan Efisiensi Energi yang Optimal</h5>
                                    <img style="max-height: 170px;" src="{{ asset('asset/energi.png') }}" alt="Feature Image 6" class="card-img">
                                </div>
                            </div>
                        </div>
                        <p style="margin: 50px; font-size:20px; text-align:justify;">
                            SHIP ALERT menawarkan solusi dan fitur unggulan yang meningkatkan keselamatan dan efisiensi operasional di laut. Sistem ini menyediakan tampilan dashboard monitoring real-time yang memungkinkan nelayan memantau kondisi kapal secara langsung, menampilkan grafik data histori yang membantu dalam analisis dan pengambilan keputusan berdasarkan data suhu, gelombang, dan cuaca. Selain itu, SHIP ALERT dirancang dengan efisiensi energi optimal, memastikan bahwa perangkat dapat beroperasi dalam jangka waktu yang lama tanpa sering mengganti baterai, membuatnya ideal untuk penggunaan di lingkungan laut yang keras dan sering kali tanpa akses listrik.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">7. Antarmuka Pengguna yang Intuitif dan mudah digunakan</h5>
                                    <img style="max-height: 170px;" src="{{ asset('asset/antarmuka.png') }}" alt="Feature Image 7" class="card-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">8. Kompatibilitas Luas dan fleksibel sehingga mudah diimplementasikan</h5>
                                    <img style="max-height: 170px;" src="{{ asset('asset/kompatibilitas.png') }}" alt="Feature Image 8" class="card-img">
                                </div>
                            </div>
                        </div>
                        <p style="margin: 50px; font-size:20px; text-align:justify;">
                            SHIP ALERT menawarkan solusi dan fitur unggulan yang meningkatkan keselamatan dan efisiensi operasional di laut. Sistem ini memiliki antarmuka pengguna yang intuitif dan mudah digunakan, sehingga nelayan dan awak kapal dapat dengan cepat memahami dan mengoperasikannya tanpa memerlukan pelatihan khusus. Selain itu, SHIP ALERT dirancang dengan kompatibilitas yang luas dan fleksibel, memungkinkan integrasi dengan berbagai perangkat dan sistem yang sudah ada di kapal, sehingga implementasinya menjadi lebih mudah dan tidak memerlukan perubahan besar pada infrastruktur yang ada.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#solutionsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#solutionsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 mb-4">
            <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/C88zdebys9c/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
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
                                        <g>
                                            <path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.965,59.17 571,58.147 571,50 C571,41.851 570.965,40.831 570.82,37.631"></path>
                                        </g>
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
            <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/C88zlm3S0k9/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/C88zlm3S0k9/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/C88zlm3S0k9/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by “SHIP-ALERT” (Smart Hazard Identification Protocol) (@ship.allert)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
            <script async src="//www.instagram.com/embed.js"></script>
        </div>
        <div class="col-md-4 mb-4">
           <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/C88zr3nSYNK/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/C88zr3nSYNK/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/C88zr3nSYNK/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by “SHIP-ALERT” (Smart Hazard Identification Protocol) (@ship.allert)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
            <script async src="//www.instagram.com/embed.js"></script>
        </div>
    </div>
</section>

<section class="footer-section">
        <h2><b>SHIP ALERT</b></h2>
        <p>Bersama kami meningkatkan keselamatan maritim dengan teknologi LoRa tanpa ketergantungan internet.</p>
        <div>
            <img src="{{ asset('asset/instagram.png') }}" alt="Logo Email">
            <img src="{{ asset('asset/email.png') }}" alt="Logo Instagram">
        </div>
        <p>@2024 SHIP ALERT. All Rights Reserved.</p>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
