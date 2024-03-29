<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" href="/assets/logo-bpkad.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js">
    <!--TITLE-->
    <title>E-TICKET</title>
    <!--STYLE CSS-->
    <style>
        body {
            background-color: #f8f9fa;
            overflow-x: hidden;
        }

        .card {
            border: none;
            transition: transform 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: scale(1.05);
        }

        .nav-link:hover {
            color: #007bff !important;
        }

        .bg-dark {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%, hsl(218, 41%, 35%) 15%, hsl(218, 41%, 19%) 80%, transparent 10%),
                radial-gradient(1250px circle at 100% 100%, hsl(218, 41%, 20%) 75%, transparent 10%);
        }

        .bg-glass {
            background-color: rgba(255, 255, 255, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }

        .chart-container {
            width: 100%;
            max-width: 400px;
            margin: auto;
            margin-top: 20px;
            float: left;
        }

        .line-chart-container {
            width: 100%;
            max-width: 400px;
            margin: auto;
            margin-top: 20px;
            float: right;
        }

        @media (max-width: 768px) {

            .chart-container,
            .line-chart-container {
                max-width: none;
            }
        }
    </style>
</head>
<!--SIDEBAR-->

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            @include('layout.sidebar')
            <!--ISI HALAMAN-->
            <div class="col-9 py-3">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col-md-4">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h5 class="card-title text-center">Total Complaints</h5>
                                <p class="card-text text-center">2 <span class="text-success">+</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h5 class="card-title text-center">Resolved Complaints</h5>
                                <p class="card-text text-center">2 <span class="text-success">+</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h5 class="card-title text-center">Pending Complaints</h5>
                                <p class="card-text text-center">2 <span class="text-success">+</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chart-container">
                    <canvas id="myCircularChart"></canvas>
                </div>
                <div class="line-chart-container">
                    <canvas id="myLineChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!--SCRIPT CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!--SCRIPT CHART-->
    <script>
        var ctx = document.getElementById('myCircularChart').getContext('2d');
        var myCircularChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Total Complaints', 'Resolved Complaints', 'Pending Complaints'],
                datasets: [{
                    label: 'Complaints',
                    data: [2, 2, 2],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                cutoutPercentage: 70,
                animation: {
                    animateScale: true
                }
            }
        });
        var ctxLine = document.getElementById('myLineChart').getContext('2d');
        var myLineChart = new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Example Dataset',
                    data: [1, 2, 1, 2, 2, 1, 2],
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>