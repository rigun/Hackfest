<!doctype html>
<html lang="en">
<?php include('qrlib.php');?>
<head>
    <title>IFOC: Area Peserta</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/daftar.css">
</head>

<body>

    <!-- NAVIGASI -->
    <header id="awal">
        <nav class="navbar navbar-dark navbar-expand-lg fixed-top">
            <a class="navbar-brand" href="index.html#awal">
                <img src="images/ifoc.png" width="auto" height="30" alt="">
                <img src="images/ifow.png" width="auto" height="30" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html#link-tentang">Tentang
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#link-ifow">Workshop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#link-ifoc">Kompetisi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#link-kontak">Kontak</a>
                    </li>
                </ul>
                <a href="pendaftaran.html" class="nav-link text-warning">Daftar</a>
                <a href="#" class="nav-link">Masuk</a>
            </div>
        </nav>
    </header>
    <!-- AKHIR NAVIGASI -->

    <!-- BADAN -->
    <div class="container-fluid" id="link-kontak">
        <div class="row">
            <div class="col-4 red"></div>
            <div class="col-4 green"></div>
            <div class="col-4 blue"></div>
        </div>
    </div>
    <div class="black-separator"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 bg-putih text-center">
                <p class="big-text text-dark"> Halo, <?php echo "Hello World!";?></p>
                <p class="med-text text-info"> Ada Mengikuti <?php echo "IFOW";?></p>
                <div class="mini-separator"></div>
                <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?php $ganti ?>&choe=UTF-8" title="Link to Google.com" />
                <p class="med-text text-danger">SCAN UNTUK MENUJU</p>
            </div>
        </div>
    </div>
    <div class="black-separator"></div>
    <!-- AKHIR BADAN -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
<footer>
    <div class="container-fluid" id="link-kontak">
        <div class="row">
            <div class="col-4 red"></div>
            <div class="col-4 green"></div>
            <div class="col-4 blue"></div>
        </div>
    </div>
    <div class="container-fluid bg-hitam">
        <div class="container">
            <div class="row align-content-center justify-content-center">
                <div class="col-md-4 kontak">
                    <p style="color:#fff">CONTACT US</p>
                    <div class="row align-content-center justify-content-center">
                        <div class="col-md-4 text-center">
                            <img src="images/kontak.png" class="img-fluid">
                        </div>
                        <div class="col-md-8" style="color:#fff">
                            <p>Berlian</p>
                            <p>0811-134-1202</p>
                        </div>
                    </div>
                    <div class="row align-content-center justify-content-center">
                        <div class="col-md-4 text-center">
                            <img src="images/kontak.png" class="img-fluid">
                        </div>
                        <div class="col-md-8" style="color:#fff">
                            <p>Ryandi</p>
                            <p>0821-8944-3003</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 kontak">
                    <p style="color:#fff">FOLLOW ON SOCIAL MEDIA</p>
                    <div class="row align-content-center justify-content-center">
                        <div class="col-md-4 text-center">
                            <img src="images/instagram.png" class="img-fluid">
                        </div>
                        <div class="col-md-8" style="color:#fff">
                            <p>instagram.com/ifest_uajy</p>
                            <p>Or
                                <a href="http://#">Click Here</a>
                            </p>
                        </div>
                    </div>
                    <div class="row align-content-center">
                        <div class="col-md-4 text-center">
                            <img src="images/line.png" class="img-fluid">
                        </div>
                        <div class="col-md-8" style="color:#fff">
                            <p>@ykb1487</p>
                            <p>Or
                                <a href="http://#">Click Here</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center kontak">
                    <p style="color:#fff">SCAN ME IN LINE</p>
                    <img src="images/barcode-line.jpg" style="width:auto; height:120px;" class="img-fluid">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="text-center text-white">
                    Copyright © 2017 IFEST UAJY. All rights reserved
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="text-center text-white">
                    <a href="http://ifest-uajy.com" class="text-warning">ifest-uajy.com</a>
                </div>
            </div>
        </div>
    </div>
</footer>

</html>