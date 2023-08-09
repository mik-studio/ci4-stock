</div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url(); ?>logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>public/assets/library/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>public/assets/library/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>public/assets/library/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>public/assets/js/sb-admin-2.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>

    <?php if ($page_code == 'LAPORAN.STOCKBARANG' || $page_code == 'LAPORAN.BARANGMASUK' || $page_code == 'LAPORAN.BARANGKELUAR') { ?>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dtDatabarang').DataTable({
                processing: true,
                serverSide: true,
                ajax: '<?php echo base_url() . "databarang/listbarang"; ?>',
                order: [],
                columns: [
                    {data: 'nama_barang', name: 'barang.nama_barang'},
                    {data: 'nama_kategori', name: 'kategori.nama_kategori'},
                    {data: 'jumlah_barang', name: 'barang.jumlah_barang'},
                    {data: 'action'}
                ],
                pageLength: 10,
            });
            $('#dtDatakategori').DataTable({
                processing: true,
                serverSide: true,
                ajax: '<?php echo base_url() . "datakategori/listkategori"; ?>',
                order: [],
                columns: [
                    {data: 'nama_kategori'},
                    {data: 'action'}
                ],
                pageLength: 10,
            });
            $('#dtBarangmasuk').DataTable({
                processing: true,
                serverSide: true,
                ajax: '<?php echo base_url() . "barangmasuk/listbarangmasuk"; ?>',
                order: [],
                columns: [
                    {data: 'nama_barang', name: 'barang.nama_barang'},
                    {data: 'tanggal_masuk', name: 'masuk.tanggal_masuk'},
                    {data: 'jumlah_masuk', name: 'masuk.jumlah_masuk'}
                ],
                pageLength: 10,
            });
            $('#dtBarangkeluar').DataTable({
                processing: true,
                serverSide: true,
                ajax: '<?php echo base_url() . "barangkeluar/listbarangkeluar"; ?>',
                order: [],
                columns: [
                    {data: 'nama_barang', name: 'barang.nama_barang'},
                    {data: 'tanggal_keluar', name: 'keluar.tanggal_keluar'},
                    {data: 'jumlah_keluar', name: 'keluar.jumlah_keluar'}
                ],
                pageLength: 10,
            });
            $('#dtLapStockbarang').DataTable({
                processing: true,
                serverSide: true,
                ajax: '<?php echo base_url() . "laporan/listbarang"; ?>',
                order: [],
                columns: [
                    {data: 'nama_barang', name: 'barang.nama_barang'},
                    {data: 'nama_kategori', name: 'kategori.nama_kategori'},
                    {data: 'jumlah_barang', name: 'barang.jumlah_barang'}
                ],
                pageLength: 10,
                dom: 'Bfrtip',
                buttons: [{
                    extend: 'pdfHtml5',
                    pageSize: 'A4',
                    filename: 'lap_stockbarang_pdf',
                    orientation: 'portrait',
                    title: 'LAPORAN STOCK BARANG',

                    exportOptions: {
                        modifier: {
                            page: 'current'
                        }
                    },
                }],
                
                
            });
            $('.select2').select2({
                theme: 'bootstrap4'
            });
        });
    </script>
</body>

</html>