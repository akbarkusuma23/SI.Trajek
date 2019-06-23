                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col-lg">
                            <?php if (validation_errors()) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= validation_errors(); ?>
                                </div>
                            <?php endif; ?>

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nik</th>
                                        <th scope="col">Kritik & Saran</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($krisan as $kr) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $kr['nik']; ?></td>
                                            <td><?= $kr['kritik_saran']; ?></td>
                                            <td>
                                                <a onclick="return confirm(`Anda ingin hapus?`)" href="<?= base_url('admin/hapuskrisan' . $kr['id_saran_kritik']); ?>" class="badge badge-danger">hapus</a>
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