<div class="container">
    <!-- awal flashdata -->
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row-mt-5">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible" role="alert">
                    Data Dosen <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!-- akhir flashdata -->

    <!-- <div class="container"> -->
    <div class="row mt-4">
        <div class="col-md-6">
            <!-- TombolTambah Data -->
            <a href="<?= base_url(); ?>jurusan/tambah" class=" btn btn-primary"> Tambah Data jurusan</a>
        </div>
    </div>
    <!-- Akhir Tambah Data Dosen-->

    <div class="row mt-4">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group" mt-3>
                    <input type="text" class="form-control" placeholder="cari data dosen...." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!-- Daftar nama dosen-->
    <div class="row mt-4">
        <div class="col-md-6">
            <h3> DAFTAR NAMA jurusan </h3>
            <?php if (empty($jurusan)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data jurusan Tidak ditemukan!
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($jurusan as $j) : ?>
                    <li class="list-group-item">
                        <?= $j['namajurusan']; ?>
                        <!-- awal membuat tombol hapus -->
                        <a href="<?= base_url(); ?>jurusan/hapus/<?= $j['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Apakah Anda Yakin');">hapus</a>
                        <!-- akhir membuat tombol hapus-->
                        <!-- awal membuat tombol detail -->
                        <a href="<?= base_url(); ?>jurusan/ubah/<?= $j['id']; ?>" class="badge badge-success float-right">ubah </a>
                        <!-- akhir membuat tombol detail-->
                        <a href="<?= base_url(); ?>jurusan/detail/<?= $j['id']; ?>" class="badge badge-primary float-right">Detail </a>
                        <!-- akhir membuat tombol detail-->
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>