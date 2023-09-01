<!-- .container>.row mt-3>.col-md-6   -->

<div class="container">
    <div class="row mt-3">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    Detail Data JURUSAN
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $dosen['id']; ?></h5>
                    <h5 class="card-text"><?= $dosen['namajurusan']; ?></h5>
                    <a href="<?= base_url(); ?>jurusan" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>