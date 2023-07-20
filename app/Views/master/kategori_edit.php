<?= $this->extend('main_layout') ?>

<?= $this->section('content') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $page_title ?><a class="btn btn-primary btn-sm float-right" href="<?= base_url(); ?>datakategori" role="button"><i class="fas fa-arrow-left"></i> KEMBALI</a></h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <?= form_open(); ?>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Kategori</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" value="<?= $kategori['nama_kategori'] ?>" name="namakategori">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <input type="submit" class="btn btn-success" value="UPDATE">
                                            </div>
                                        </div>
                                    <?= form_close(); ?>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                <!-- /.container-fluid -->
<?= $this->endSection() ?>