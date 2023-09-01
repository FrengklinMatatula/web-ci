<!-- <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
        <h1 class="display-4">WELCOME TO WEBSITE CODEIGNITER</h1>
        <p class="lead">CREATED BY FRENGKLIN MATATULA</p>
    </div>
</div> -->

<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="slide0" data-slide-to="0" class=""></li>
            <li data-target="slide1" data-slide-to="1"></li>
            <li data-target="slide2" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/Image/mhs.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="assets/Image/mhs1.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="assets/Image/mhs2.jpg" class="d-block w-100" alt="">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- about -->
<section class="about" id="about">
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <h2 class="text-center">About</h2>
                <hr>
            </div>
        </div>
        <!-- jika <div class="col-md-5 col-md-offset-2" maka digantikan saja dengan justify-content-center di rownya -->
        <div class="row justify-content-center">
            <div class="col-md-5">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe nihil laudantium temporibus optio aperiam ipsam voluptate nobis debitis animi, nemo labore officiis sint. Consectetur fugiat error officia perferendis, officiis nulla.
                </p>
            </div>
            <div class="col-md-5">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis fuga laborum numquam quia aliquid nisi vitae quaerat, dicta vel, minus quae omnis ducimus tempore assumenda minima nulla obcaecati hic a?</p>
            </div>
        </div>
    </div>
</section>

<!-- akhir about -->

<!-- awal kontak kami -->

<section class="kontak" id="kontak">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <h2>Kontak</h2>
                <hr>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-5 ">
                <form>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="Email" class="form-control" id="email" placeholder="Masukan Email">
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="tel" class="form-control" id="tel" placeholder="Masukan Telepon">
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea class="form-control" row="10" id="pesan" placeholder="Masukan pesan"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- akhir kontak kami -->