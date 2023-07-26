<?= $this->extend('main_layout') ?>

<?= $this->section('content') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $page_title ?><a class="btn btn-success btn-sm float-right" href="<?= base_url(); ?>barangkeluar/add" role="button"><i class="fas fa-plus"></i> BARANG keluar</a></h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <?php if (session()->getTempdata('SUCCESS')) : ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="alert alert-success">
                                                <?= session()->getTempdata('SUCCESS'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama Barang</th>
                                                <th>Tanggal keluar</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($barangkeluar->getResult() as $bm) { ?>
                                            <tr>
                                                <td><?= $bm->nama_barang ?></td>
                                                <td><?= $bm->tanggal_keluar ?></td>
                                                <td><?= $bm->jumlah_keluar ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /.container-fluid -->
<?= $this->endSection() ?>