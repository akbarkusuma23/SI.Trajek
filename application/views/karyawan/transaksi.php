                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col lg-6">
                            <?= form_error('transaksi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                            <?= $this->session->flashdata('message'); ?>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Id Transaksi</th>
                                        <th scope="col">Id Pemesanan</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">NIP</th>
                                        <th scope="col">Bayar</th>
                                        <th scope="col">Kembali</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($transaksi as $t) : ?>
                                        <tr>
                                            <th scope="row"><?= $t; ?></th>
                                            <td><?= $t['id_transaksi']; ?></td>
                                            <td><?= $t['id_pemesanan']; ?></td>
                                            <td><?= $t['nik']; ?></td>
                                            <td><?= $t['nip']; ?></td>
                                            <td><?= $t['bayar']; ?></td>
                                            <td><?= $t['kembali']; ?></td>
                                            <td>
                                                <a href="<?= base_url('karyawan/edittransaksi/' . $t['id_transaksi']); ?>" class=" badge badge-success">edit</a>
                                                <a onclick="return confirm(`Anda ingin hapus?`)" href="<?= base_url('karyawan/hapustransaksi/' . $t['id_transaksi']); ?>" class=" badge badge-danger">hapus</a>
                                                <a href="<?= base_url('karyawan/konfirmasitransaksi/' . $t['id_transaksi']); ?>" class=" badge badge-primary">konfirmasi</a>
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