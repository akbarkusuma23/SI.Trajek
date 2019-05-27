                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col lg-6">
                            <?= form_error('pengembalian', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                            <?= $this->session->flashdata('message'); ?>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">ID Pengembalian</th>
                                        <th scope="col">NIP</th>
                                        <th scope="col">ID Transaksi</th>
                                        <th scope="col">Denda</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($pengembalian as $p) : ?>
                                        <tr>
                                            <th scope="row"><?= $t; ?></th>
                                            <td><?= $p['id_pengembalian']; ?></td>
                                            <td><?= $p['nip']; ?></td>
                                            <td><?= $p['id transaksi']; ?></td>
                                            <td><?= $p['denda']; ?></td>
                                            <td>
                                                <a href="<?= base_url('karyawan/editpengembalian/' . $p['id_pengembalian']); ?>" class=" badge badge-success">edit</a>
                                                <a onclick="return confirm(`Anda ingin hapus?`)" href="<?= base_url('karyawan/hapuspengembalian/' . $b['id_pengembalian']); ?>" class=" badge badge-danger">hapus</a>
                                                <a href="<?= base_url('karyawan/konfirmasipengembalian/' . $b['id_pengembalian']); ?>" class=" badge badge-primary">konfirmasi</a>
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