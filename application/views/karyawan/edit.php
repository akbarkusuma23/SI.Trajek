                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col-lg-8">
                            <?= form_open_multipart('karyawan/edit'); ?>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?= $karyawan['email']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nama_karyawan">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" value="<?= $karyawan['nama_karyawan']; ?>">
                                <?= form_error('nama_karyawan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="no_telepon">Nomor Telepon</label>
                                <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?= $karyawan['no_telepon']; ?>">
                                <?= form_error('no_telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat Rumah</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $karyawan['alamat']; ?>">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">Foto</div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('assets/img/profile/') . $karyawan['foto']; ?>" class="img-thumbnail">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="foto" name="foto">
                                                <label class="custom-file-label" for="foto">Pilih file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->