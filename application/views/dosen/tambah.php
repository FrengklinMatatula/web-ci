<div class="container">
    <div class="row  mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data DOSEN
                </div>
                <div class="card-body">
                    <!-- untuk validation error -->
                    <!-- <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?> -->
                    <!-- akhir validation error -->
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" id="nip" name="nip">
                            <small class="form-text text-danger"><?= form_error('nip') ?></small>
                            <!--   jika sudah menambahkan form error dibagian bawah maka validation eroor dihapus saja --> 
                        </div>
                        <div class="form-group">
                            <label for="namadosen">NAMA DOSEN</label>
                            <input type="text" class="form-control" id="namadosen" name="namadosen">
                             <small class="form-text text-danger"><?= form_error('namadosen') ?></small>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir card -->

