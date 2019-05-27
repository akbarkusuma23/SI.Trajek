                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col lg-6">
                            <?= form_error('pemesanan', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                            <?= $this->session->flashdata('message'); ?>

                            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newPemesananModal"><i class="fas fa-plus mr-2"></i>Tambah Pemesanan Baru</a>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Id Pemesanan</th>
                                        <th scope="col">Nik</th>
                                        <th scope="col">Id Barang</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Tanggal Pesan</th>
                                        <th scope="col">Tanggal Pengambilan</th>
                                        <th scope="col">Tanggal Pengembalian</th>
                                        <th scope="col">Tipe Pembayaran</th>
                                        <th scope="col">Jumlah Total</th>
                                        <th scope="col">Dp</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($pemesanan as $p) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $p['id_pemesanan']; ?></td>
                                            <td><?= $p['nik']; ?></td>
                                            <td><?= $p['id_barang']; ?></td>
                                            <td><?= $p['harga']; ?></td>
                                            <td><?= $p['tanggal_pesan']; ?></td>
                                            <td><?= $p['tanggal_pengembalian']; ?></td>
                                            <td><?= $p['tipe_pembayaran']; ?></td>
                                            <td><?= $p['jumlah_total']; ?></td>
                                            <td><?= $p['dp']; ?></td>
                                            <td>
                                                <a href="<?= base_url('karyawan/editpemesanan/' . $p['id_pemesanan']); ?>" class=" badge badge-success">edit</a>
                                                <a onclick="return confirm(`Anda ingin hapus?`)" href="<?= base_url('karyawan/hapuspemesanan/' . $p['id_pemesanan']); ?>" class=" badge badge-danger">hapus</a>
                                                <a href="<?= base_url('karyawan/konfirmasipemesanan/' . $p['id_pemesanan']); ?>" class=" badge badge-primary">konfirmasi</a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
                <!-- Modal -->
                <div class="modal fade" id="newPemesananModal" tabindex="-1" role="dialog" aria-labelledby="newPemesananModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="pemesananModalLabel">Tambah Pemesanan Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= base_url('karyawan/pemesanan'); ?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="id_pemesanan" name="id_pemesanan" placeholder="Id Pemesanan" value="<?= set_value('id_pemesanan'); ?>">
                                        <?= form_error('id_pemesanan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Nik" value="<?= set_value('nik'); ?>">
                                        <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="id_barang" name="id_barang" placeholder="Id Barang" value="<?= set_value('id_barang'); ?>">
                                        <?= form_error('id_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="<?= set_value('harga'); ?>">
                                        <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="tanggal_pesan" name="tanggal_pesan" placeholder="Tanggal Pesan" value="<?= set_value('tanggal_pesan'); ?>">
                                        <?= form_error('tanggal_pesan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="tanggal_pengambilan" name="tanggal_pengambilan" placeholder="Tanggal Pengambilan" value="<?= set_value('tanggal_pengambilan'); ?>">
                                        <?= form_error('tanggal_pengambilan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" placeholder="Tanggal Pengembalian" value="<?= set_value('tanggal_pengembalian'); ?>">
                                        <?= form_error('tanggal_pengembalian', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="tipe_pembayaran" name="tipe_pembayaran" placeholder="Tipe Pembayaran" value="<?= set_value('tipe_pembayaran'); ?>">
                                        <?= form_error('tipe_pembayaran', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="jumlah_total" name="jumlah_total" placeholder="Jumlah Total" value="<?= set_value('jumlah_total'); ?>">
                                        <?= form_error('jumlah_total', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="dp" name="dp" placeholder="Dp" value="<?= set_value('dp'); ?>">
                                        <?= form_error('dp', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary tombolTambahPelanggan">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>