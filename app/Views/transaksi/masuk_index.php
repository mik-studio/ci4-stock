<?= $this->extend('main_layout') ?>

<?= $this->section('content') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $page_title ?><a class="btn btn-success btn-sm float-right" href="<?= base_url(); ?>barangmasuk/add" role="button"><i class="fas fa-plus"></i> BARANG MASUK</a></h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Barang Masuk</h6>
                                </div>
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
                                    <table class="table table-bordered" id="dtBarangmasuk" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama Barang</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /.container-fluid -->
<?= $this->endSection() ?>