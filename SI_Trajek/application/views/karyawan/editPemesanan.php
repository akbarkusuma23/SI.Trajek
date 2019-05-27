                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col-lg-8">
                            <?php foreach ($pemesanan as $pemesanan) ?>
                            <?= form_open_multipart('karyawan/update_pemesanan'); ?>
                            <div class="form-group">
                                <label for="id_pemesanan">Id Pemesanan</label>
                                <input type="text" class="form-control" id="id_pemesanan" name="id_pemesanan" value="<?= $pemesanan->id_pemesanan; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" value="<?= $pemesanan->nik; ?>" readonly>
                                <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="id_barang">Id Barang</label>
                                <input type="text" class="form-control" id="id_barang" name="id_barang" value="<?= $pemesanan->id_barang; ?>">
                                <?= form_error('id_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_pesan">Tanggal Pesan</label>
                                <input type="text" class="form-control" id="tanggal_pesan" name="tanggal_pesan" value="<?= $pemesanan->tanggal_pesan; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_pengambilan">Tanggal Pengambilan</label>
                                <input type="date" class="form-control" id="tanggal_pengambilan" name="tanggal_pengambilan" value="<?= $pemesanan->tanggal_pengambilan; ?>">
                                <?= form_error('tanggal_pengambilan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                                <input type="date" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" value="<?= $pemesanan->tanggal_pengembalian; ?>">
                                <?= form_error('tanggal_pengembalian', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="tipe_pembayaran">Tipe_pembayaran</label>
                                <input type="text" class="form-control" id="tipe_pembayaran" name="tipe_pembayaran" value="<?= $pemesanan->tipe_pembayaran; ?>">
                                <?= form_error('tipe_pembayaran', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row justify-content-end">
                                <div class="col-sm-12">
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