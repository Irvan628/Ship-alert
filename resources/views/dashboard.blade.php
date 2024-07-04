<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            height: 100%;
        }
        html, body {
            height: 100%;
        }
        .navbar-brand img {
            height: 40px;
        }
        .btn-custom {
            border-radius: 20px;
            border: 1px solid #000;
        }
        .btn-custom:hover {
            background-color: #2F7EB2;
            color: white;
        }
        .btn-reset {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #2F7EB2;
            color: white;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-reset:hover {
            background-color: #1f5a7f;
        }
        .navbar {
            height: 70px;
        }
        .info-box {
            border: 1px solid #000;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .info-title {
            font-size: 32px;
            font-weight: bold;
            margin-top: 10px;
        }
        .info-value {
            font-size: 48px;
            font-weight: bold;
            margin-top: 10px;
        }
        .info-title1 {
            font-size: 32px;
            font-weight: bold;
            margin-top: 10px;
        }
        .info-value1 {
            font-size: 24px;
            font-weight: bold;
            margin-top: 10px;
        }
        .info-time {
            font-size: 10px;
            text-align: right;
            font-weight: bold;
            position: absolute;
            top: 10px;
            right: 10px;
        }
        #section1, #section2 {
            min-height: 100vh; /* Full viewport height */
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            padding: 10px 0; /* Padding top and bottom for section */
        }
        #section2 {
            background-color: #2F7EB2;     
        }
        .chart-container {
            height: 50vh;
        }
        .chart {
            margin: 5px; 
            padding: 10px;
            border-radius: 24px;
            background-color: rgb(255, 255, 255);
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Optional: Add a slight shadow for better look */
        }
        h2 {
            margin-top: 10px;
            text-align: center;
            font-weight: bold;
            color: white;
        }
        #map {
            height: 70vh; /* 70% of viewport height */
            width: 100%;
        }
        
        @media (max-width: 768px) {
            .chart-container {
                height: auto;
            }
            .info-box {
                margin-bottom: 20px;
            }
        }

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="width: 100%;">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('asset/logo.png') }}" alt="Logo">
        </a>
        <div class="ml-auto">
            <a class="btn btn-outline-dark btn-custom shadow" href="#">Tentang Kami</a>
        </div>
    </nav>

    <!-- Section 1 -->
    <section id="section1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="map"></div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 mb-4">
                            <div class="info-box">
                                <div class="info-time" id="time1">Tanggal / Jam</div>
                                <div class="info-title">Suhu</div>
                                <div class="info-value" id="suhu">25 C</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 mb-4">
                            <div class="info-box">
                                <div class="info-time" id="time2">Tanggal / Jam</div>
                                <div class="info-title">Gelombang</div>
                                <div class="info-value">5 Meter</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 mb-4">
                            <div class="info-box">
                                <div class="info-time" id="time3">Tanggal / Jam</div>
                                <div class="info-title">Cuaca</div>
                                <div class="info-value">Hujan</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 mb-4">
                            <div class="info-box">
                                <div class="info-time" id="time4">Tanggal / Jam</div>
                                <div class="info-title1">Lokasi</div>
                                <div class="info-value1">Lat :<br> Long :</div>
                            </div>
                        </div>
                        <button class="btn-reset">Reset Tracking</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION CHART -->
    <section id="section2">
        <div class="container">
            <h2>HISTORI DATA</h2>
            <div class="row">
                <div class="col-md-6 col-sm-12 chart-container">
                    <div class="chart ">
                        <canvas id="lineChart1"></canvas>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 chart-container">
                    <div class="chart">
                        <canvas id="lineChart2"></canvas>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 chart-container">
                    <div class="chart">
                        <canvas id="lineChart3"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Initialize map
        var map = L.map('map').setView([-6.292430293657109, 106.72546172243526], 15);

        // Add OpenStreetMap tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Add a marker to the map at the specified coordinates
        var marker = L.marker([-6.292430293657109, 106.72546172243526]).addTo(map);
        marker.bindPopup("<b>Lokasi</b><br>Ini adalah lokasi marker.").openPopup();

        // Ensure the map occupies the entire screen
        map.invalidateSize();

        function updateDateTime() {
            var now = new Date();
            var date = now.toLocaleDateString('id-ID');
            var time = now.toLocaleTimeString('id-ID');
            var dateTime = date + ' / ' + time;
            
            document.getElementById('time1').innerText = dateTime;
            document.getElementById('time2').innerText = dateTime;
            document.getElementById('time3').innerText = dateTime;
            document.getElementById('time4').innerText = dateTime;
        }
        fetch('https://api.thingspeak.com/channels/1976791/fields/3.json?api_key=1WCAPVC94C3AB1TD&results=1')
        .then(response => response.json())
        .then(data => {
        console.log(data); // Log untuk melihat data yang dikembalikan
        const lastEntry = data.feeds[data.feeds.length - 1];
        console.log(lastEntry); // Log untuk melihat data entry terakhir
        const suhu = parseFloat(lastEntry.field3).toFixed(2);
        document.getElementById('suhu').innerText = suhu + ' C';
        document.getElementById('last_entry_id').innerText = 'ID: ' + data.channel.last_entry_id;
    })
    .catch(error => console.error('Error:', error)); // Log untuk melihat jika terjadi error

        setInterval(updateDateTime, 1000);
        async function fetchData(url) {
            const response = await fetch(url);
            return response.json();
        }

        async function updateCharts() {
            const dataSuhu = await fetchData('https://api.thingspeak.com/channels/1976791/fields/2.json?api_key=1WCAPVC94C3AB1TD');
            const dataGelombang = await fetchData('https://api.thingspeak.com/channels/1976791/fields/3.json?api_key=1WCAPVC94C3AB1TD');
            const dataCuaca = await fetchData('https://api.thingspeak.com/channels/1976791/fields/4.json?api_key=1WCAPVC94C3AB1TD');

            const labels = dataSuhu.feeds.map(feed => new Date(feed.created_at).toLocaleTimeString('id-ID'));
            const suhuData = dataSuhu.feeds.map(feed => parseFloat(feed.field2).toFixed(2));
            const gelombangData = dataGelombang.feeds.map(feed => parseFloat(feed.field3).toFixed(2));
            const cuacaData = dataCuaca.feeds.map(feed => parseFloat(feed.field4).toFixed(2));

            const ctx1 = document.getElementById('lineChart1').getContext('2d');
            new Chart(ctx1, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Suhu',
                        data: suhuData,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderWidth: 2,
                        fill: true,
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true
                        },
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            const ctx2 = document.getElementById('lineChart2').getContext('2d');
            new Chart(ctx2, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Gelombang',
                        data: gelombangData,
                        borderColor: 'rgba(255, 99, 132, 1)',
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderWidth: 2,
                        fill: true,
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true
                        },
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            const ctx3 = document.getElementById('lineChart3').getContext('2d');
            new Chart(ctx3, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Cuaca',
                        data: cuacaData,
                        borderColor: 'rgba(54, 162, 235, 1)',
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderWidth: 2,
                        fill: true,
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true
                        },
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        updateCharts();
        setInterval(updateCharts, 10000);
    </script>
</body>
</html>
