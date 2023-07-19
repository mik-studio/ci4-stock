<?= $this->extend('main_layout') ?>

<?= $this->section('content') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $page_title ?><a class="btn btn-success btn-sm float-right" href="<?= base_url(); ?>databarang/add" role="button"><i class="fas fa-plus"></i> TAMBAH BARANG</a></h1>
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
                                                <th>Kategori</th>
                                                <th>Jumlah Barang</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($barang as $v) { ?>
                                            <tr>
                                                <td><?= $v['nama_barang'] ?></td>
                                                <td><?= $v['kategori_barang'] ?></td>
                                                <td><?= $v['jumlah_barang'] ?></td>
                                                <td><a class="btn btn-success btn-sm" href="<?= base_url(); ?>databarang/edit/<?= $v['id'] ?>" role="button"><i class="fas fa-edit"></i></a> <a class="btn btn-danger btn-sm" href="<?= base_url(); ?>databarang/delete/<?= $v['id'] ?>" role="button"><i class="fas fa-trash"></i></a></td>
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