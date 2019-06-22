<?php
    if(!isset($_GET['pasien'])){
        echo '<script>window.location.replace("index.php");</script>';
    }
    include 'addfile/koneksi.php';
    $q = $koneksi->query("SELECT * FROM tb_ordertmp ORDER BY session DESC LIMIT 1");
    $last = $q->fetch();

    if(empty($last['session'])){
        $_SESSION['kunci'] = date('Ymd');
        $key = $_SESSION['kunci'];
    }else{
        if(empty($_SESSION['kunci'])){
            $key = $last['session'] + 1;
            $_SESSION['kunci'] = $key;
        }else{
            $key = $_SESSION['kunci'];
        }
    }

    

        // $q = $koneksi->query("SELECT * FROM tb_ordertmp ORDER BY session DESC LIMIT 1");
        // $last = $q->fetch();
        // if($last['session'] <= $key){
        //     $selisih =  $key - $last['session'];
        //     // echo $last['session'];
        //     $key = $selisih + 1 + $key;
        //     $_SESSION['kunci'] = $key;
        // }

?>

<div class="col-md-12 col-sm-6">

        <div class="box box-success">
            <div class="box-header with-border">
                <h4 class="box-tittle"><i class="fa fa-medkit"></i> Transaksi</h4>
                <div class="box-tools pull-right">
                    <!-- <a href="" data-toggle="modal" data-target="#modal-keluar-barang"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-medkit"></i> Barang Keluar </button></a> -->
                    <!-- <a href="" data-toggle="modal" data-target="#modal-tanggal-transaksi"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-table"></i> Laporan Pertanggal </button></a>
                    <a href="home.php?page=transaksi">
                        <button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Transaksi Baru</button>
                    </a> -->
                </div>
            </div>
            <div class="box-body">
                <div class="transaksi">
                    <div class="row">

                        <div class="col-md-6 col-xs-12">
                            <!-- <form> -->
                                <div class="form-group">
                                    <input type="hidden" value="<?php echo $key ?>" id="sesi">
                                    <label>Profil</label>
                                    <select class="form-control select2 col-xs-6" id="jp" name="jp">
                                        <option> - Pilih Profil Pemeriksaan - </option>
                                        <?php
                                            
                                            $sql = "SELECT * FROM tb_pemeriksaan";
                                            $tampil = $koneksi->prepare($sql);
                                            $tampil->execute();
                                            $tampil->setFetchMode(PDO::FETCH_ASSOC);
                                            while ($data=$tampil->fetch(PDO::FETCH_ORI_NEXT)) { ?>
                                            <option value="<?php echo $data['id_pemeriksaan'] ?>"><?php echo $data['jenis_pemeriksaan'] .' - ' . rupiah($data['harga']) ?></option>
                                            <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <button class="btn btn-success addcart">Tambah</button>
                                <!-- <div class="form-group">
                                        <label>Jenis Pemeriksaan</label>
                                        <select class="form-control select2" id="jenis_pemeriksaan" name="jp">
                                            
                                        </select>
                                    </div> -->
                            <!-- </form> -->
                        </div>
                        
                        <div style="padding-top:15px" class="col-md-6 col-xs-12">
                            
                            <div id="table-cart"></div>
                            
                            <button class="col-xs-12 btn btn-success pembayaran">Bayar</button>
                        </div>

                    </div>                   
                </div>
                    
                </div>
            </div>
    
        </div>
    </div>