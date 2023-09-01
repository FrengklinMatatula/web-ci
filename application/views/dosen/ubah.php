<div class="container">
    <div class="row  mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data DOSEN
                </div>
                <div class="card-body">
                   
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?=$dosen['id']; ?> ">
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" id="nip" value="<?= $dosen['nip'] ?>" name="nip">
                            <small class="form-text text-danger"><?= form_error('nip') ?></small>
                            <!--   jika sudah menambahkan form error dibagian bawah maka validation eroor dihapus saja -->
                        </div>
                        <div class="form-group">
                            <label for="namadosen">NAMA DOSEN</label>
                            <input type="text" class="form-control" id="namadosen" value="<?= $dosen['namadosen'] ?>"  name="namadosen">
                            <small class="form-text text-danger"><?= form_error('namadosen') ?></small>
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir card -->