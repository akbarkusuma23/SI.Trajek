                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col-lg-6">
                            <?= form_error('laporan', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Id Transaksi</th>
                                        <th scope="col">Id Pemesanan</th>
                                        <th scope="col">Nip</th>
                                        <th scope="col">Bayar</th>
                                        <th scope="col">Kembali</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($laporan as $lp) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $lp['laporan']; ?></td>
                                            <td>
                                                <a href="" class="badge badge-success">edit</a>
                                                <a href="" class="badge badge-danger">hapus</a>
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