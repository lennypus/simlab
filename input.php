<div class="col-md-12 col-sm-6">

        <div class="box box-success">
            <div class="box-header with-border">
                <h4 class="box-tittle"><i class="fa fa-user"></i> Pemeriksaan Laboratorium</h4>
                <div class="box-tools pull-right">
                </div>
            </div>
            <div class="box-body">
                <!-- <center><h2>Informasi</h2></center> -->
                <?php
                    include 'addfile/koneksi.php';
                    $id = $_GET['lab'];
                    $tampil =$koneksi->prepare("SELECT * FROM tb_lab JOIN tb_siswa ON tb_siswa.nis=tb_lab.id_pasien WHERE id_lab=:id");
                    $tampil->bindParam(':id',$_GET['lab']);
                    $tampil->execute();
                    $data = $tampil->Fetch(PDO::FETCH_ASSOC);

                    $session = $_GET['session'];
                    $profil =$koneksi->prepare("SELECT * FROM tb_ordertmp JOIN tb_pemeriksaan ON tb_pemeriksaan.id_pemeriksaan=tb_ordertmp.id_profile WHERE tb_ordertmp.session=:session");
                    $profil->bindParam(':session',$session);
                    $profil->execute();
                    $results = $profil->Fetch(PDO::FETCH_ASSOC);
                    // print_r($result);
                ?>
                <table class="table table-borderless">
                    <tr><td>Nama</td><td>:</td><td><?= $data['nama']?></td></tr>
                    <tr><td>ID Lab</td><td>:</td><td><?= $_GET['lab']?></td></tr>
                </table>
                <form action="" method="post">
                    <?php foreach($results as $key => $result){
                        ?>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><?php echo $key ?></label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="<?php $key ?>">
                            </div>
                        </div>
                    <?php } ?>
                </form>
            </div>
    
        </div>
    </div>
    <?php include 'addfile/modal-transaksi.php'; ?>