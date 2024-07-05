<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHIP ALERT</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <h2 style="text-align: center;"> <b>Filosofi Logo</b> </h2>
        <img src="{{ asset('asset/filosofi.jpeg') }}" alt="SHIP ALERT Logo">
        </div>
    </section>
    <section class="team">
        <div>
            <h2><b>Tim SHIP ALERT</b></h2>
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
<!-- Contact Section -->
<section class="contact-section">
    <h2 style="text-align: center;">Contact Us</h2>
    <div class="contact-form">
        <form action="/send-mail" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message:</label>
                <textarea id="message" name="message" rows="5" class="form-control" required></textarea>
            </div>
            <div class="d-flex justify-content-between">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
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
