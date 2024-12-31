<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $problem->problemName }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/homeProblem.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <style>
        .problem-header {
            background: url('{{ asset($problem->problemImage) }}') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
            position: relative;
        }
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
        }

        #aboutCeria{
            background-image: url('/assets/homebackground.jpg');
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
        .ceriaLogo{
            width: 5rem;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body>
    <nav id="navigationbar" class="navbar navbar-expand-lg sticky-top p-1">
        <div class="container-fluid gap-5">
          <a class="navbar-brand text-white m-0" aria-current="page" href="/"><img class="ceriaLogo" src="https://cdn.discordapp.com/attachments/1292868361692119194/1323576160558252152/cerialogo.png?ex=677503db&is=6773b25b&hm=e1ec679bbe3b3ea41ef52f34762683bc4cdad55b5e3f467c58eac592fc6ae5bb&" alt="Ceria"></a>
          <button class="navbar-toggler tw-border-white tw-text-sky-400 tw-bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-5">
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

    <!-- Problem Header -->
    <div class="problem-header">
        <div class="problem-header-overlay"></div>
        <div class="container position-relative">
            <h1 class="display-4 fw-bold">{{ $problem->problemName }}</h1>
            <p class="lead">{{ $problem->problemShortDescription }}</p>
        </div>
    </div>

    <!-- Overview Section -->
    <div class="section-light py-5">
        <div class="container no-margin">
            <div class="row d-flex tw-flex">
                <div class="col-6 justify-text align-content-center">
                    <h2>Overview</h2>
                    <p>{{ $problem->problemContent }}</p>
                </div>
                <div class="col-6 tw-justify-items-end align-content-center rightProblemImg">
                    <img id="headerpictures" src="https://cdn.discordapp.com/attachments/1292868361692119194/1323576162110148638/overview.jpg?ex=677503db&is=6773b25b&hm=4103aa92d1581abecb69342a3e4f9881d1da6ac4c332c87705d1e2f3168e1f59&" alt="overviewpic">
                </div>
            </div>
        </div>
    </div>

    <!-- Evidence Section -->
    <div class="section-dark py-5">
        <div class="container no-margin">
            <div class="row d-flex justify-content-between">
                <div class="col-6 offset-0 justify-text align-content-center leftProblemImg">
                    <img id="headerpictures" src="https://cdn.discordapp.com/attachments/1292868361692119194/1323576161518747648/evidence.png?ex=677503db&is=6773b25b&hm=52aa217f5df89c94a71e2eaad95c6154dc2d45bf35ef6ed4463053dae73eb781&" alt="evidencepic">
                </div>
                <div class="col-6 offset-0 justify-text align-content-center">
                    <h2>Evidence</h2>
                    <p>{{ $problem->evidence }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Effects Section -->
    <div class="section-light py-5">
        <div class="container no-margin">
            <div class="row d-flex justify-content-start">
                <div class="col-6 offset-0 justify-text">
                    <h2>Effects</h2>
                    <p>{{ $problem->effects }}</p>
                </div>
                <div class="col-6 offset-0 justify-text align-content-center rightProblemImg">
                    <img id="headerpictures" src="https://cdn.discordapp.com/attachments/1292868361692119194/1323576160898252862/effects.jpg?ex=677503db&is=6773b25b&hm=5014a2120f71ce2d0e8a69ad871574037dd3804995856e2cea54564811757c9c&" alt="evidencepic">
                </div>
            </div>
        </div>
    </div>

    <!-- Causes Section -->
    <div class="section-dark py-5">
        <div class="container no-margin">
            <div class="row d-flex justify-content-between">
                <div class="col-6 offset-0 justify-text align-content-center leftProblemImg">
                    <img id="headerpictures" src="https://cdn.discordapp.com/attachments/1292868361692119194/1323576160264912987/cause.jpg?ex=677503db&is=6773b25b&hm=fe8bf6bf7fbff16a96549865e78372d17f67e4cbcd63569c694bd7b7b3b5737d&" alt="evidencepic">
                </div>
                <div class="col-6 offset-0 justify-text align-content-center">
                    <h2>Causes</h2>
                    <p>{{ $problem->causes }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Solution Section -->
    <div class="section-light py-5">
        <div class="container no-margin">
            <div class="row d-flex justify-content-start">
                <div class="col-6 offset-0 justify-text">
                    <h2>Solution</h2>
                    <p>{{ $problem->solutions }}</p>
                </div>
                <div class="col-6 offset-0 justify-text align-content-center rightProblemImg">
                    <img id="headerpictures" src="https://cdn.discordapp.com/attachments/1292868361692119194/1323576162328248410/solution.png?ex=677503db&is=6773b25b&hm=7e44dfcb10118baa26eb82cc55d5c54cd39d4ad2295ffead7bef32c62059fd2f&" alt="evidencepic">
                </div>
            </div>
        </div>
    </div>

    <!-- Keep Exploring Section -->
    <div class="keep-exploring bg-light py-5">
        <div class="container">
            <h3 class="mb-4">Terus Menjelajah</h3>
            <div class="row">
                @foreach ($allProblems as $ap)
                    @if ($ap->problemID !== $problem->problemID)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="{{ asset($ap->problemImage) }}" class="card-img-top"
                                    alt="{{ $ap->problemName }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $ap->problemName }}</h5>
                                    <p class="card-text">{{ $ap->problemShortDescription }}</p>
                                    <a href="{{ route('problemRedirect', ['id' => $ap->problemID]) }}"
                                        class="btn btn-secondary">Pelajari Lagi</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
