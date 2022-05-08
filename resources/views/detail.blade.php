<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Praktikum4</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="http://127.0.0.1:8000/storage/logo.png" width="150">
            <a class="navbar-brand">Sistem Informasi Kompetisi<br>"Institut Teknologi Sumatera"</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">E-Sport</a></li>
                            <li><a class="dropdown-item" href="#">Sport</a></li>
                            <li><a class="dropdown-item" href="#">Karya Tulis</a></li>
                            <li><a class="dropdown-item" href="#">Seni</a></li>
                            <li><a class="dropdown-item" href="#">Akademik</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="project-info-box mt-0">
                    <h5>{{ $post->judul}}</h5>
                    <p class="mb-0">{{$post->deskripsi}}</p>
                </div><!-- / project-info-box -->
            </div><!-- / column -->

            <div class="col-md-7">
                <img height="350" src='{{asset('storage/' . $post->image)}}' class="rounded" alt="...">
                <div class="project-info-box">
                    <p><b>Kategori:</b> {{$post->kategori}}</p>
                </div><!-- / project-info-box -->
            </div><!-- / column -->
        </div>
    </div>
</body>


</html>