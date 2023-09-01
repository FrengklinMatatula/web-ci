<div class="container">
    <div class="row  mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data JURUSAN
                </div>
                <div class="card-body">
                   
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?=$jurusan['id']; ?> ">
                        <div class="form-group">
                            <label for="ID">NIP</label>
                            <input type="text" class="form-control" id="id" value="<?= $jurusan['id'] ?>" name="id">
                            <small class="form-text text-danger"><?= form_error('id') ?></small>
                            <!--   jika sudah menambahkan form error dibagian bawah maka validation eroor dihapus saja -->
                        </div>
                        <div class="form-group">
                            <label for="namajurusan">NAMA JURUSAN</label>
                            <input type="text" class="form-control" id="namadosen" value="<?= $jurusan['namajurusan'] ?>"  name="namajurusan">
                            <small class="form-text text-danger"><?= form_error('namajurusan') ?></small>
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir card -->