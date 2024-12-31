<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ceria</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('css/homeProblem.css') }}"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        html {
            scroll-behavior: smooth;
        }

        *{
            font-family: "Kanit", serif;
        }

        main{
            padding: 0px;
            overflow: hidden;
            font-family: "Kanit", serif;
        }

        #navigationbar{
            background-color: rgba(23, 23, 27, 1);
            color: white;
            font-family: "Kanit", serif;
            padding: 0.25rem;
        }

        #aboutCeria{
            background-image: url('https://cdn.discordapp.com/attachments/1292868361692119194/1323576161896501392/homebackground.jpg?ex=677503db&is=6773b25b&hm=aedb973386d1e6c68bae217425f509fbb93968a82fc513ca52e632227391cc03&');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            scroll-margin-top: 70px;
        }

        #carousel{
            background-color: rgba(23, 23, 27, 1);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .carouselContainer {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-content: center;
            flex-direction: column;
            width: 100%;
        }

        .carousel-inner {
            position: relative;
            width: 100%;
            height: 600px;
            overflow: hidden;
        }

        .carousel-inner img {
            width: 100%;
            height: 600px;
            object-fit: cover;
        }

        #carouseltitle{
            color: white;
            display: flex;
            justify-content: center;
        }

        #ceriaText h1{
            font-size: 100px;
            font-weight: bold;
            color: white;
        }

        #ceriaText p{
            color: white;
            font-size: 22px;
        }

        #problems{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            gap: 20px;
        }

        #problemSection{
            margin-bottom: 5%;
            margin-top: 5%;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .problemSectionContainer {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .problemCard{
            background-color: white;
            width: 40%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 2px solid black;
            text-align: center;
            padding: 10px;
            border-radius: 20px;
        }

        .problemCard:hover{
            transform: scale(1.04);
            transition: .1s ease-in;
            border: 3px solid black;
            cursor: pointer;
        }

        .problem-header h1 {
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }

        .problem-header-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        }

        .section-dark {
            background-color: rgba(23, 23, 27, 1);
            color: white;
        }

        .section-light {
            background-color: #f9f9f9;
        }

        .justify-text {
            text-align: justify;
        }

        #headerpictures{

            width: 50%;
        }

        .vital-signs {
            padding: 20px;
            background-color: rgba(23, 23, 27, 1);
            color: white;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 32px;
            color: white;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .items {
            display: flex;
            justify-content: space-between;
        }

        .item {
            width: 22%;
            text-align: center;
            position: relative;
        }

        .item h3 {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .value {
            font-size: 24px;
            font-weight: bold;
            display: flex;
            align-items: baseline;
            justify-content: center;
        }

        .value span:first-child {
            font-size: 18px;
            margin-right: 5px;
        }

        .value .unit {
            font-size: 14px;
            margin-left: 5px;
        }

        .value.up span:first-child {
            color: rgb(59, 200, 255);
        }

        .value.down span:first-child {
            color: red;
        }

        .hover-bar {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 5px;
            background: rgb(59, 200, 255);
            width: 0;
            transition: width 0.4s ease;
        }

        #down-hover{
            background: red;
        }

        .item:hover .hover-bar {
            width: 100%;
        }

        #tempGraphic
        {
            padding-top: 5%;
            padding-bottom: 5%;
        }

        .rightProblemImg{
            display: flex;
            justify-content: end;
            align-items: center;
        }

        .leftProblemImg{
            display: flex;
            justify-content: start;
            align-items: center;
        }

        #concentrationGraphic{
            padding-bottom: 2%;
        }

        @media (max-width: 768px) {
            main{
            height: 100%;
            }
            .carousel-inner {
                height: 300px;
            }
            .carousel-inner img {
                width: 100%;
                height: 300px;
                object-fit: cover;
            }
            #searchbar{
                margin-top: 50px;
                margin-bottom: 50px;
            }
            .items{
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .item {
                width: 100%;
                text-align: center;
                position: relative;
                margin-bottom: 5%;
            }
            #headerdesc{
                padding-left: 2%;
                padding-right: 2%;
                text-align: center;
            }
        }

        .navbar-toggler {
            border-color: white;
            background-color: white;
            color: #38bdf8;
        }

        .ceriaLogo{
            width: 5rem;
        }

        .container-fluid {
            display: flex;
            gap: 1.25rem;
        }

        .navbar-nav {
            margin-bottom: 0;
            gap: 1.25rem;
        }

        .navbar-brand {
            color: white;
            margin: 0;
        }

        .header {
            display: flex;
            justify-content: center;
        }

        .viaNASA {
            color: #38bdf8;
        }

        .masalahDihadapi {
            display: flex;
            flex-wrap: wrap;
            text-align: center;
            margin-top: 1.25rem;
            justify-content: center;
        }

    </style>
</head>
<body>

    <nav id="navigationbar" class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand text-white" aria-current="page" href="/"><img class="ceriaLogo" src="https://cdn.discordapp.com/attachments/1292868361692119194/1323576160558252152/cerialogo.png?ex=677503db&is=6773b25b&hm=e1ec679bbe3b3ea41ef52f34762683bc4cdad55b5e3f467c58eac592fc6ae5bb&" alt="Ceria"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="/">Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Masalah
                </a>
                <ul class="dropdown-menu">
                    @foreach ($allProblems as $ap)
                        <li><a class="dropdown-item"
                                onclick="window.location.href='{{ route('problemRedirect', ['id' => $ap->problemID]) }}'">{{ $ap->problemName }}</a>
                        </li>
                    @endforeach
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="/news">Berita</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <main>
        <section id="aboutCeria" class="tw-justify-center tw-flex">
            <div id="ceriaText" class="tw-justify-center align-content-center w-50">
                <h1>Ceria</h1>
                <p>CERIA adalah platform informatif untuk memahami tantangan iklim di sektor industri Indonesia.
                Temukan wawasan berbasis data, berita terkini, dan solusi nyata untuk mendorong kesadaran dan praktik berkelanjutan demi masa depan yang lebih hijau.</p>
                <div class="tw-flex-wrap tw-text-center mt-5">
                    <a href="#carousel"><button type="button" class="btn btn-outline-light">Berita Terkini</button></a>
                </div>
            </div>
        </section>

        <div class="vital-signs">
            <div class="header">
                <h1>TANDA-TANDA VITAL</h1>
                <p class="viaNASA">(via NASA)</p>
            </div>
            <div class="items">
                <div class="item">
                    <div class="itemlabel">
                        <h3>Karbon Dioksida</h3>
                    </div>
                    <div class="value up">
                        <span>↑</span>424<span class="unit">bagian per miliar</span>
                    </div>
                    <div class="hover-bar"></div>
                </div>
                <div class="item">
                    <h3>Suhu Global</h3>
                    <div class="value up">
                        <span>↑</span>1.4<span class="unit">°C sejak praindustri</span>
                    </div>
                    <div class="hover-bar"></div>
                </div>
                <div class="item">
                    <h3>Gas Metana</h3>
                    <div class="value up">
                        <span>↑</span>1922<span class="unit">bagian per miliar</span>
                    </div>
                    <div class="hover-bar"></div>
                </div>
                <div class="item">
                    <h3>Lapisan Es</h3>
                    <div class="value down">
                        <span>↓</span>406<span class="unit">miliar metrik ton per tahun</span>
                    </div>
                    <div class="hover-bar" id="down-hover"></div>
                </div>
            </div>
        </div>

        <section id="tempGraphic">
            <div style="width: 80%; margin: 0 auto;">
                <h1 class="tw-text-sky-400">Global Land-Ocean Temperature Index</h1>
                <p class="tw-text-gray-400">Dilansir dari: NASA's Goddard Institute for Space Studies (GISS). Credit: NASA/GISS</p>
                <p>Grafik Lowess menunjukkan tren suhu global yang dihaluskan, mengungkapkan pola jangka panjang. Data menunjukkan peningkatan suhu yang stabil sejak awal abad ke-20, dengan percepatan pemanasan yang signifikan dalam beberapa dekade terakhir, mencerminkan dampak perubahan iklim khususnya pada 10 tahun terakhir.</p>
                <a href="https://data.giss.nasa.gov/gistemp/graphs/graph_data/Global_Mean_Estimates_based_on_Land_and_Ocean_Data/graph.txt"><button type="button" class="btn btn-outline-info">Dataset</button></a>
                <canvas id="temperatureChart"></canvas>
            </div>
        </section>

        <section id="concentrationGraphic">
            <div style="width: 80%; margin: 0 auto;">
                <h1 class="tw-text-red-600">Tingkat Konsentrasi CO2 di Atmosfer (2011-2022*)</h1>
                <p class="tw-text-gray-400">Dilansir dari: databok's Konsentrasi CO2 di Atmosfer Terus Naik, Ini Rinciannya. Credit: Monavia Ayu Rizaty</p>
                <p>Menurut data Badan Penerbangan dan Antariksa Amerika Serikat (NASA), tingkat konsentrasi karbon dioksida (CO2) di atmosfer global sudah mencapai rata-rata 417,6 part per million (ppm) pada 17 Mei 2022.
                Angka tersebut sudah naik sekitar 6,2% dibanding tahun 2011. Peningkatan itu  juga konsisten terjadi setiap tahun, seperti terlihat pada grafik.</p>
                <a href="https://databoks.katadata.co.id/demografi/statistik/9232a4932fdbb34/konsentrasi-co2-di-atmosfer-terus-naik-ini-rinciannya"><button type="button" class="btn btn-outline-danger">Dataset</button></a>
                <canvas id="concentrationChart"></canvas>
            </div>
        </section>

        <section id="carousel" class="tw-h-screen tw-content-center">
            <div class="carouselContainer tw-flex-wrap align-content-center justify-center justify-content-center">
                <div id="carouseltitle">
                    <h1>Berita Terkini</h1>
                </div>
                <div id="carouselExampleCaptions" class="carousel slide col-md-8 col-sm-12 mx-auto" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach ($news as $n)
                            @if ($loop->first)
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $loop->index }}" class="active" aria-current="true" aria-label="Slide {{ $n->newsID }}"></button>
                            @else
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $loop->index }}" aria-label="Slide {{ $n->newsID }}"></button>
                            @endif
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach ($news as $n)
                            @if ($loop->first)
                                <div class="carousel-item active">
                                    <a href="{{ $n->newsLink }}" target="_blank">
                                        <img src="{{ $n->newsImage }}" class="d-block w-100 tw-rounded-lg" alt="..." height="500">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>{{ $n->newsTitle }}</h5>
                                        </div>
                                    </a>
                                </div>
                            @else
                                <div class="carousel-item">
                                    <a href="{{ $n->newsLink }}" target="_blank">
                                        <img src="{{ $n->newsImage }}" class="d-block w-100 tw-rounded-lg" alt="..." height="500">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>{{ $n->newsTitle }}</h5>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    @if ($news && count($news) > 1)
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    @endif
                </div>
                <div class="masalahDihadapi">
                    <a href="#problemSection"><button type="button" class="btn btn-outline-light">Masalah yang dihadapi</button></a>
                </div>
            </div>
        </section>

          <br>

        <section id="problemSection">
            <div class="problemSectionContainer">
                <div class="tw-justify-center tw-flex tw-text-black">
                    <h1>Permasalahan Iklim</h1>
                </div>
                <div id="headerdesc" class="tw-justify-center tw-flex tw-text-black tw-mb-5">
                    <p>Pelajari permasalahan iklim akibat industri, khususnya di Indonesia:</p>
                </div>
                <section id="problems">
                    @foreach ($problem as $p)
                        <div class="problemCard">
                           <a  onclick="window.location.href='{{ route('problemRedirect', ['id' => $p->problemID]) }}'">
                                <h4>{{ $p->problemName }}</h4>
                                <img src="{{ $p->problemImage }}" alt="" width="100" height="100">
                                <h6>{{ $p->problemShortDescription }}</h6>
                            </a>
                        </div>
                    @endforeach
                </section>
            </div>
        </section>
    </main>

    <script>
        const tempData = @json($temp);
        const tempYears = tempData.map(item => item.year);
        const noSmoothing = tempData.map(item => item.no_smoothing);
        const lowess = tempData.map(item => item.lowess);

        const tempCtx = document.getElementById('temperatureChart').getContext('2d');
        const tempChart = new Chart(tempCtx, {
            type: 'line',
            data: {
                labels: tempYears,
                datasets: [
                    // {
                    //     label: 'No Smoothing',
                    //     data: noSmoothing,
                    //     borderColor: 'rgba(255, 99, 132, 1)',
                    //     borderWidth: 2,
                    //     fill: false,
                    // },
                    {
                        label: 'Lowess Smoothing',
                        data: lowess,
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 2,
                        fill: false,
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Year',
                        },
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Temperature Anomaly (°C)',
                        },
                    }
                }
            }
        });
    </script>

    <script>
        const concentrationData = @json($concentration);
        const concentrationYears = concentrationData.map(item => item.year);
        const concentration = concentrationData.map(item => item.concentration);

        const concentrationCtx = document.getElementById('concentrationChart').getContext('2d');
        const concentrationChart = new Chart(concentrationCtx, {
            type: 'line',
            data: {
                labels: concentrationYears,
                datasets: [
                    {
                        label: 'CO2 Concentration',
                        data: concentration,
                        borderColor: 'red',
                        borderWidth: 2,
                        fill: false,
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Year',
                        },
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'ppm',
                        },
                    }
                }
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>
