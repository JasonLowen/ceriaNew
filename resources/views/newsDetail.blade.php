<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/newsDetail.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        main{
            padding: 10px;
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

        #newsDetailPage{
            display: flex;
            gap: 30px;
            padding: 30px 40px;
            justify-content: space-between;
        }

        .newsDetailLeft{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 0 60px;
        }

        .newsDetailLeftContainer{
            display: flex;
            flex-direction: column;
            gap: 30px;
            width: 100%;
            font-size: 16px;
        }

        .newsDetailLeftItem{
            border-bottom: 2px solid gray;
            text-align: left;
            padding-bottom: 10px;
        }

        .newsWriterAndPublishDate{
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        #newsWriter{
            font-weight: bold;
        }

        .newsTitle{
            font-weight: bold;
            font-size: 60px;
        }

        .newsImage img{
            max-width: 60%;
        }

        #newsLink{
            display: flex;
            gap:    20px;
        }

        /* #newsLink button{
            text-decoration: none;
            background-color: blue;
            border-radius: 10px;
            color: white;
            padding: 10px;
            font-weight: bold;
        } */

        #newsLink button:hover{
            cursor: pointer;
            opacity: .7;
            transition: .15s;
        }

        #newsLink button:active{
            opacity: .4;
            transition: .15s;
        }

        .newsDetailRight{
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 70%;
        }

        @media screen and (max-width: 800px) {
            #newsDetailPage{
                display: flex;
                flex-direction: column;
                padding: 0px;
            }

            .newsDetailLeft{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 100%;
                padding: 0px;
            }
        }
    </style>
</head>
<body>

    <nav id="navigationbar" class="navbar navbar-expand-lg sticky-top p-1">
        <div class="container-fluid gap-5">
          <a class="navbar-brand text-white m-0" aria-current="page" href="/"><img class="tw-w-20" src="/assets/cerialogo.png" alt="Ceria"></a>
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

    <section id="newsDetailPage">
        <div class="newsDetailLeft">
            <div class="newsDetailLeftContainer">
                <div class="newsDetailLeftItem" id="newsWriter">
                    {{ $news->newsWriter }}
                </div>
                <div class="newsDetailLeftItem" id="newsPublishDate">
                    {{ $news->newsPublishDate }}
                </div>

                <div class="newsDetailLeftItem" id="newsProblemName">
                    {{ $problem->problemName }}
                </div>
                <div id="newsLink">
                    <button onclick="window.open('{{ $news->newsLink }}', '_blank')" type="button" class="btn btn-info">Baca Lebih Lanjut</button>
                    <button onclick="window.location.href = '/'" type="button" class="btn btn-info">Kembali ke Halaman Utama</button>
                </div>
            </div>
        </div>
        <div class="newsDetailRight">
            <div class="newsTitle">
                {{ $news->newsTitle }}
            </div>
            <div class="newsImage">
                <img src="{{ $news->newsImage }}" alt="newsImage">
            </div>
            <div class="newsContent">
                {{ $news->newsContent }}
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>
</html>
