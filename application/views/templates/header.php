<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- my css -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css"> 

<!-- akhir my CSS -->

    <!-- bisa menggunakan <?php echo $data['judul']; ?> atau seperti dibawah ini -->

    <title><?php echo $judul; ?> </title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?> ">PENJADWALAN</a>
            <!-- awal button jika di buka versi mobile -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- akhir button versi mobile -->

            <!-- awal navbar per item -->
                 <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                     <div class="navbar-nav">
                        <a class="nav-item nav-link" href=" <?= base_url(); ?> ">Beranda <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="<?= base_url(); ?>mahasiswa">Mahasiswa</a>
                        <a class="nav-item nav-link" href="<?= base_url(); ?>dosen">Dosen</a>
                        <a class="nav-item nav-link" href="<?= base_url(); ?>jurusan">jurusan</a>
                        <a class="nav-item nav-link" href=" <?= base_url(); ?>#about">About</a>
                        <a class="nav-item nav-link" href="<?= base_url(); ?>#kontak">kontak kami</a>
                        <a class="nav-item nav-link" href="#">Tentang Kamu</a>
                     </div>
                </div>
            <!-- akhir navbar per item -->
        </div>
    </nav>


    <!-- <div class="jumbotron jumbotron-fluid ">
            <div class="container text-center">
                <h1 class="display-4">WELCOME TO WEBSITE CODEIGNITER</h1>
                <p class="lead">CREATED BY FRENGKLIN MATATULA</p>
            </div>
        </div> -->


    <!-- <div class="div container"> -->