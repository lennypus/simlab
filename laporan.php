<div class="col-md-12 col-sm-6">

        <div class="box box-success">
            <div class="box-header with-border">
                <h4 class="box-tittle"><i class="fa fa-medkit"></i> Laporan Transaksi</h4>
                <div class="box-tools pull-right">
                    <!-- <a href="" data-toggle="modal" data-target="#modal-keluar-barang"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-medkit"></i> Barang Keluar </button></a> -->
                    <a href="" data-toggle="modal" data-target="#modal-tanggal-transaksi"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-table"></i> Laporan Pertanggal </button></a>
                    <a href="home.php?page=transaksi">
                        <button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Transaksi Baru</button>
                    </a>
                </div>
            </div>
            <div class="box-body">
                <div class="data-">
                    <!-- Tabel Laporan -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered data-transaksi">
                            <thead>
                                <tr class="success">
                                    <td>Tanggal</td>
                                    <td>No. RM</td>
                                    <td>Pasien</td>
                                    <td>Total</td>
                                    <td>Kasir</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody id="table-transaksi">
                                
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
    
        </div>
    </div>
    <?php include 'addfile/modal-transaksi.php'; ?>