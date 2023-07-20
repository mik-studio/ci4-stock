<?= $this->extend('main_layout') ?>

<?= $this->section('content') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $page_title ?><a class="btn btn-success btn-sm float-right" href="<?= base_url(); ?>barangmasuk/add" role="button"><i class="fas fa-plus"></i> BARANG MASUK</a></h1>
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
                                                <th>Tanggal Masuk</th>
                                                <th>Jumlah</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($barangmasuk->getResult() as $bm) { ?>
                                            <tr>
                                                <td><?= $bm->nama_barang ?></td>
                                                <td><?= $bm->tanggal_masuk ?></td>
                                                <td><?= $bm->jumlah_masuk ?></td>
                                                <td><a class="btn btn-success btn-sm" href="<?= base_url(); ?>barangmasuk/edit/<?= $bm->id ?>" role="button"><i class="fas fa-edit"></i></a> <a class="btn btn-danger btn-sm" href="<?= base_url(); ?>barangmasuk/delete/<?= $bm->id ?>" role="button"><i class="fas fa-trash"></i></a></td>
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