<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">                                          <!-- Action dikosongkan karna dijalankan di 1 halaman yaitu controller/Mahasiswa.php -->
                        <div class="form-group">
                            <label for="nama">Nama : </label>
                            <input name="nama" type="text" class="form-control" id="nama">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('nama'); ?></small> <!-- form_error('nama'); untuk memberikan pesan error -->
                        </div>
                        <div class="form-group">
                            <label for="nrp">Nrp : </label>
                            <input name="nrp" type="text" class="form-control" id="nrp">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('nrp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email : </label>
                            <input name="email" type="text" class="form-control" id="email">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                                <option value="Teknik Pangan">Teknik Pangan</option>
                                <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Bangunan">Teknik Bangunan</option>
                            </select>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>           
        </div>
    </div>
</div>