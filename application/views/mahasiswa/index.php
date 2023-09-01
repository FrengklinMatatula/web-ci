<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">

       
          <!-- awal flashdata -->
          <?php if ($this->session->flashdata('flash')) : ?>
                <div class="row-mt-3">
                    <div class="col-md-8">
                        <div class="alert alert-success alert-dismissible" role="alert">
                            Data Mahasiswa <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!-- akhir flashdata -->
            
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newtambah">Tambah </a>

<!-- Modal -->
<div class="modal fade" id="newtambah" tabindex="-1" role="dialog" aria-labelledby="tambahLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('mahasiswa') ?>" method="post">
                    <div class="form-group">
                        <label for="kode">KODE</label>
                        <input type="text" name="kode" class="form-control" id="kode">
                        <small class="form-text text-danger"><?= form_error('kode') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="matakuliah">MATA KULIAH</label>
                        <input type="text" name="matakuliah" class="form-control" id="matakuliah">
                        <small class="form-text text-danger"><?= form_error('matakuliah') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="sks">SKS</label>
                        <input type="text" name="sks" class="form-control" id="sks">
                        <small class="form-text text-danger"><?= form_error('sks') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="semester">SEMESTER</label>
                        <input type="text" name="semester" class="form-control" id="semester">
                        <small class="form-text text-danger"><?= form_error('semester') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">JURUSAN</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option value="">Pilihan</option>
                            <?php foreach ($jurusan as $j) : ?>
                                <option><?= $j['namajurusan']; ?></option>
                                <?php endforeach; ?>
                            </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    

    <!-- menggunakan list group -->
    <!-- <ul class="list-group">
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li class="list-group-item"><?= $mhs['matakuliah'] ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div> -->


<!-- awal membuat validation error -->

<!-- uvalidasi untuk menampilakan error jika tidak di masukan data dan jika sdh menggunakan small error maka data ini di matikan -->
<!--  <?php if( validation_errors()) : ?>
    <div class="alert alert-danger" role="alert">
        <?= validation_errors(); ?>
    </div>
    <?php endif; ?>   -->
    <!-- akhir validation error  -->
    

            
            <!-- awal pencarian -->
            <div class=" row">
                <div class="col-md-12">
                    <form action="" method="post">
                        <div class="input-group" mt-3>
                            <input type="text" class="form-control" placeholder="cari data mahasiswa...." name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-primary mb-3" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
        <!-- akhir pencarian -->

        
        <!-- awal membuat tabel -->

        <table class=" table table-hover">
            <thead>
                <tr>
                    <th scope="col">Kode</th>
                    <th scope="col">Matakuliah</th>
                    <th scope="col">Sks</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <tr>
                        <th scope="row"><?= $mhs['kode'];  ?></th>
                        <td><?= $mhs['matakuliah']; ?></td>
                        <td><?= $mhs['sks']; ?></td>
                        <td><?= $mhs['semester']; ?></td>
                        <td><?= $mhs['jurusan']; ?></td>
                        <td>
                       
                         <a href="" class="badge badge-pill badge-success" data-toggle="modal" data-target="#myModal<?= $mhs['id'];?>">Ubah</a>
                        <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Apakah Anda Yakin');">hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- akhir membuat tabel -->

               <!--awal pencarian data tidak ditemukan  -->
               <?php if (empty($mahasiswa)) : ?>
            <div class="alert alert-danger" role="alert">
                Data Mahasiswa Tidak ditemukan!
            </div>
        <?php endif; ?>
    </div>
</div>


<!-- awal Modal edit  -->
 
<?php $no= 0; foreach($mahasiswa as $mhs) : $no++; ?>
<div class="modal fade" id="myModal<?= $mhs['id'];?>"  tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Form Edit Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <?= form_open_multipart('mahasiswa/ubah'); ?>
                <input type="hidden" name="id" value="<?= $mhs['id']; ?>">

                    <div class="form-group">
                        <label for="kode">KODE</label>
                        <input type="numeric" name="kode" class="form-control" value="<?= $mhs['kode'];?>" id="kode" placeholder="Masukan Kode" readonly>
                       </div>
                    <div class="form-group">
                        <label for="matakuliah">MATA KULIAH</label>
                        <input type="text" name="matakuliah" class="form-control" value="<?= $mhs['matakuliah'];?>" id="matakuliah" placeholder="Masukan matakuliah">
                      </div>
                    <div class="form-group">
                        <label for="sks">SKS</label>
                        <input type="numeric" name="sks" class="form-control" value="<?= $mhs['sks'];?>" id="sks" placeholder="Masukan sks">
                       </div>
                    <div class="form-group">
                        <label for="semester">SEMESTER</label>
                        <input type="numeric" name="semester" class="form-control" value="<?= $mhs['semester'];?>" id="semester" placeholder="Masukan semester">
                       </div>
                    <div class="form-group">
                        <label for="jurusan">JURUSAN</label>
                         <select class="form-control" id="jurusan" name="jurusan" value="<?= $mhs['jurusan'];?>">
                            <option value="">Pilihan</option>
                            <?php foreach ($jurusan as $j) : ?>
                                <option><?= $j['namajurusan']; ?></option>
                                <?php endforeach; ?>
                            </select> 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>

<?php endforeach; ?>       


<!-- akhir Modal edit -->


    
 



<!-- akhir menampilkan data tidak ditemukan -->

<!-- untuk menambahkan group secara manual -->
<!-- <div class="form-group">
                                    <label for="dosen">Dosen</label>
                                    <select class="form-control" id="dosen" name='dosen'>
                                        <option value="">- Pilih -</option>
                                        <!-- bisa menggunakan cara sederhana yaitu tambahkan option masing2 nama dosen seperti dibawah ini-->
<!-- <option>Frengklin Matatula,S.Kom,M.MSI</option>
                                        <option>Deden Andriawan.M.Kom</option>
                                        <option>Agung Prabowo.M.MSI</option>
                                        <option>Rommy  Kaestria.M.Kom</option>
                                        <option>Ferdiyani Haris,M.Cs</option> -->
<!-- bisa mengunakan cara yang ke dua seperti dibawah ini -->
<!-- <?php foreach ($dosen as $dosen) : ?>
                                            <option value=""><?= $dosen['namadosen'] ?></option>
                                        <?php endforeach; ?>
                                    </select> -->
<!-- </div> -->

 

