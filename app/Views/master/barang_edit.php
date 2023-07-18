<?= $this->extend('main_layout') ?>

<?= $this->section('content') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $page_title ?><a class="btn btn-success btn-sm float-right" href="<?= base_url(); ?>databarang/add" role="button"><i class="fas fa-plus"></i> TAMBAH BARANG</a></h1>
                    
                </div>
                <!-- /.container-fluid -->
<?= $this->endSection() ?>