<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="{{ asset('asset/logo2.png') }}" type="image/icon type">
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
            margin-bottom: 20px; /* Ensure there's spacing between boxes */
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
            min-height: 100vh; 
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            padding: 10px 0; 
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

        #notification {
    display: none;
    background-color: red;
    color: white;
    padding: 10px;
    position: absolute;
    top: 0;
    width: 100%;
    text-align: center;
    font-weight: bold;
}
.modal-dialog {
  max-width: 70%; /* Ubah sesuai kebutuhan, misalnya 80% dari lebar layar */
}

.modal-content {
  height: 30vh; /* Ubah sesuai kebutuhan, misalnya 80% dari tinggi viewport */
}
#dangerModal .modal-content {
  background-color: red;
  color: white;
}

#dangerModal .modal-title, 
#dangerModal .modal-body, 
#dangerModal .modal-footer {
  font-size: 30px; /* Ubah ukuran font sesuai kebutuhan Anda */
}

#dangerModal .modal-header .close {
  color: white;
}
.modal {
            width: 250px;
            max-height: 400px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
            z-index: 1000;
        }
        .modal .header {
            background-color: #ff4c4c;
            padding: 10px;
            border-radius: 8px 8px 0 0;
            color: white;
        }
        .modal .header .icon {
            font-size: 24px;
        }
        .modal .content {
            padding: 20px;
            color: #333;
        }
        .modal .content p {
            margin: 0;
        }
        .modal .footer {
            padding: 10px;
        }
        .modal .footer button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #ff4c4c;
            color: white;
            cursor: pointer;
        }
        .modal .footer button:hover {
            background-color: #ff1a1a;
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
            <a class="btn btn-outline-dark btn-custom shadow" href="/">Tentang Kami</a>
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
                                <div class="info-value" id="suhu">C</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 mb-4">
                            <div class="info-box">
                                <div class="info-time" id="time2">Tanggal / Jam</div>
                                <div class="info-title">Gelombang</div>
                                <div class="info-value" id="gelombang">5 Meter</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 mb-4">
                            <div class="info-box">
                                <div class="info-time" id="time3">Tanggal / Jam</div>
                                <div class="info-title">Cuaca</div>
                                <div class="info-value" id="cuaca">Hujan</div>
                            </div>
                        </div>
                      
                        <div class="col-md-6 col-sm-6 mb-4">
                            <div class="info-box">
                                <div class="info-time" id="time4">Tanggal / Jam</div>
                                <div class="info-title1">Lokasi</div>
                                <div class="info-value1">Lat : <span id="latitude">-</span><br> Long : <span id="longtitude">-</span></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 mb-4">
                            <div class="info-box" style="background-color: green; color: white;" id="statusBox">
                                <div class="info-time" id="time5">Tanggal / Jam</div>
                                <div class="info-title1" id="statusTitle">Status</div>
                                <div class="info-value1" id="statusValue">Aman</div>
                            </div>
                        </div>
                        
                            <button class="btn-reset" id="trackResetBtn">Reset Tracking</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="alertModal">
                <div class="header">
                    <div class="icon">⚠️</div>
                    <h2>WARNING</h2>
                </div>
                <div class="content">
                    <p>KAPAL DALAM BAHAYA!!</p>
                </div>
                <div class="footer">
                    <button onclick="closeModal()">Cancel</button>
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
  document.getElementById('trackResetBtn').addEventListener('click', function() {
    // Mengambil data latitude
    fetch('https://api.thingspeak.com/channels/1976887/fields/1.json?api_key=1WCAPVC94C3AB1TD&results=1')
        .then(response => response.json())
        .then(dataLat => {
            const latitude = dataLat.feeds[0].field1;
            document.getElementById('latitude').textContent = latitude;

            // Mengambil data longitude
            fetch('https://api.thingspeak.com/channels/1976887/fields/2.json?api_key=1WCAPVC94C3AB1TD&results=1')
                .then(response => response.json())
                .then(dataLong => {
                    const longitude = dataLong.feeds[0].field2;
                    document.getElementById('longtitude').textContent = longitude;

                    // Menampilkan notifikasi bahaya
                    document.getElementById('modalLatitude').textContent = latitude;
                    document.getElementById('modalLongitude').textContent = longitude;
                    $('#dangerModal').modal('show');

                    // Mengubah status menjadi tidak aman pada elemen dengan id "statusBox"
                    const statusBox = document.getElementById('statusBox');
                    const statusTitle = document.getElementById('statusTitle');
                    const statusValue = document.getElementById('statusValue');
                    statusTitle.textContent = 'Status';
                    statusValue.textContent = 'Tidak Aman';
                    statusBox.style.backgroundColor = 'red';
                    statusBox.style.color = 'white';
                })
                .catch(error => console.error('Error fetching longitude data:', error));
        })
        .catch(error => console.error('Error fetching latitude data:', error));
});


const trackResetBtn = document.getElementById('trackResetBtn');
        const alertModal = document.getElementById('alertModal');

        trackResetBtn.addEventListener('click', () => {
            alertModal.style.display = 'block';
        });

        function closeModal() {
            alertModal.style.display = 'none';
        }

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
    
        window.addEventListener('resize', function () {
            setTimeout(function () {
                map.invalidateSize();
            }, 100);
        });
    
        function updateDateTime() {
            var now = new Date();
            var dateTime = now.toLocaleString('id-ID', { dateStyle: 'medium', timeStyle: 'short' });
            document.getElementById('time1').innerText = dateTime;
            document.getElementById('time2').innerText = dateTime;
            document.getElementById('time3').innerText = dateTime;
            document.getElementById('time4').innerText = dateTime;
            document.getElementById('time5').innerText = dateTime;
        }
    
          // fetch data suhu
          fetch('https://api.thingspeak.com/channels/1976791/fields/4.json?api_key=1WCAPVC94C3AB1TD&results=1')
        .then(response => response.json())
        .then(data => {
            const lastEntry = data.feeds[data.feeds.length - 1];
            const suhu = parseFloat(lastEntry.field4).toFixed(2);
            document.getElementById('suhu').innerText = suhu + ' C';
        })
        .catch(error => console.error('Error:', error));

  // fetcbh data gelombang
        fetch('https://api.thingspeak.com/channels/1976791/fields/3.json?api_key=1WCAPVC94C3AB1TD&results=1')
        .then(response => response.json())
        .then(data => {
            const lastEntry = data.feeds[data.feeds.length - 1];
            const gelombang = parseFloat(lastEntry.field3).toFixed(2);
            document.getElementById('gelombang').innerText = gelombang + ' Mdpl';
        })
        setInterval(updateDateTime, 1000);
    // Fungsi untuk menampilkan keterangan cuaca
    function getKondisiHujan(nilaiHujan) {
        if (nilaiHujan > 900) {
            return "Kering";
        } else if (nilaiHujan > 700) {
            return "Hujan Ringan";
        } else if (nilaiHujan > 500) {
            return "Hujan Sedang";
        } else if (nilaiHujan > 300) {
            return "Hujan Deras";
        } else {
            return "Sangat Basah/Tergenang Air";
        }
    }

    // Fetch data cuaca
    fetch('https://api.thingspeak.com/channels/1976791/fields/5.json?api_key=1WCAPVC94C3AB1TD&results=1')
        .then(response => response.json())
        .then(data => {
            const lastEntry = data.feeds[data.feeds.length - 1];
            const nilaiHujan = parseFloat(lastEntry.field5).toFixed(2);
            const kondisiHujan = getKondisiHujan(nilaiHujan);
            document.getElementById('cuaca').innerText = kondisiHujan;
        });

    // Fungsi untuk memperbarui tanggal dan jam setiap detik
    function updateDateTime() {
        const now = new Date();
        const timeString = now.toLocaleString();
        document.getElementById('time3').innerText = timeString;
    }

    // Memperbarui tanggal dan jam setiap detik
    setInterval(updateDateTime, 1000);
// latitud
fetch('https://api.thingspeak.com/channels/1976887/fields/1.json?api_key=1WCAPVC94C3AB1TD&results=1')
        .then(response => response.json())
        .then(data => {
            const lastEntry = data.feeds[data.feeds.length - 1];
            const latitude = parseFloat(lastEntry.field1).toFixed(5);
            document.getElementById('latitude').innerText = latitude ;
        })
        setInterval(updateDateTime, 1000);

// longtitude
fetch('https://api.thingspeak.com/channels/1976887/fields/2.json?api_key=1WCAPVC94C3AB1TD&results=1')
        .then(response => response.json())
        .then(data => {
            const lastEntry = data.feeds[data.feeds.length - 1];
            const longtitude = parseFloat(lastEntry.field2).toFixed(5);
            document.getElementById('longtitude').innerText = longtitude ;
        })
        setInterval(updateDateTime, 1000);
    
        async function fetchData(url) {
            const response = await fetch(url);
            return response.json();
        }
    
        async function updateCharts() {
            const dataSuhu = await fetchData('https://api.thingspeak.com/channels/1976791/fields/4.json?api_key=1WCAPVC94C3AB1TD');
            const dataGelombang = await fetchData('https://api.thingspeak.com/channels/1976791/fields/3.json?api_key=1WCAPVC94C3AB1TD');
            const dataCuaca = await fetchData('https://api.thingspeak.com/channels/1976791/fields/5.json?api_key=1WCAPVC94C3AB1TD');
    
            const labels = dataSuhu.feeds.map(feed => new Date(feed.created_at).toLocaleTimeString('id-ID'));
            const suhuData = dataSuhu.feeds.map(feed => parseFloat(feed.field4).toFixed(2));
            const gelombangData = dataGelombang.feeds.map(feed => parseFloat(feed.field3).toFixed(2));
            const cuacaData = dataCuaca.feeds.map(feed => parseFloat(feed.field5).toFixed(2));
    
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
    
        async function updateMap() {
            const data = await fetchData('https://api.thingspeak.com/channels/1976791/feeds.json?api_key=1WCAPVC94C3AB1TD&results=1');
            const lastEntry = data.feeds[data.feeds.length - 1];
            const latitude = parseFloat(lastEntry.field1);
            const longitude = parseFloat(lastEntry.field2);
            const markerPosition = [latitude, longitude];
    
            marker.setLatLng(markerPosition);
            map.setView(markerPosition, 15);
    
            document.getElementById('latitude').innerText = latitude;
            document.getElementById('longitude').innerText = longitude;
        }
    
        updateMap();
        setInterval(updateMap, 10000);
    </script>
    
</body>
</html>