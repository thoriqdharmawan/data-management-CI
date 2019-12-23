<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">                                          <!-- Action dikosongkan karna dijalankan di 1 halaman yaitu controller/Mahasiswa.php -->
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama : </label>
                            <input name="nama" type="text" class="form-control" id="nama" value="<?= $mahasiswa['nama']; ?>">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('nama'); ?></small> <!-- form_error('nama'); untuk memberikan pesan error -->
                        </div>
                        <div class="form-group">
                            <label for="nrp">Nrp : </label>
                            <input name="nrp" type="text" class="form-control" id="nrp" value="<?= $mahasiswa['nrp']; ?>">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('nrp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email : </label>
                            <input name="email" type="text" class="form-control" id="email" value="<?= $mahasiswa['email']; ?>">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <?php foreach($jurusan as $j): ?>
                                    <?php if($j == $mahasiswa['jurusan']): ?>
                                        <option value="<?= $j ?>" selected> <?= $j ?> </option>
                                    <?php else: ?>
                                        <option value="<?= $j ?>"> <?= $j ?> </option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>           
        </div>
    </div>
</div>