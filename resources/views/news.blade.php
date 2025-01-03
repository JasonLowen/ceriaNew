<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
    <link rel="stylesheet" href="/css/news.css">
    <link rel="stylesheet" href="/css/homeProblem.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        #navigationbar{
            background-color: rgba(23, 23, 27, 1);
            color: white;
            font-family: "Kanit", serif;
            padding: 0.25rem;
        }
        #newsPage{
            padding: 30px 50px;
        }

        #newsPage a{
            text-decoration: none;
            color: black;
        }

        .newsContainer{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            border: 1px solid black;
        }
        .newsContainer:hover{
            transform: scale(1.02);
            transition: .1s ease-in;
            border: 2px solid orange;
        }

        .newsContainerLeft{
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .newsImages{
            width: 200px;
        }
        .ceriaLogo{
            width: 5rem;
        }
    </style>
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
            <form id="searchbar" class="d-flex" role="search" action="/search" method="GET">
              <input class="form-control me-2" type="search" placeholder="Cari Berita" aria-label="Search" name="query">
              <button class="btn btn-outline-success" type="submit">Cari</button>
            </form>
          </div>
        </div>
    </nav>

    <section id="newsPage">
        @foreach ($news as $n)
        <a href="/newsDetail/{{ $n->newsID }}" target="_blank">
            <div class="newsContainer">
                <div class="newsContainerLeft">
                    <div class="newsContainerLeftTop"> <b>{{ $n->newsTitle }}</b>  </div>
                    <div class="newsContainerLeftRight"> {{ $n->newsPublishDate }} </div>
                </div>
                <div class="newsContainerRight">
                    <img src="{{ $n->newsImage }}" alt="newsImages" class="newsImages">
                </div>
            </div>
            </a>
        <br>
        @endforeach
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>
</html>
