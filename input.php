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
                    $profil =$koneksi->prepare("SELECT tb_pemeriksaan.jenis_pemeriksaan as profil, tb_pemeriksaan.unit as unit, tb_pemeriksaan.nilai_rujukan as rujukan, tb_pemeriksaan.id_pemeriksaan FROM tb_ordertmp JOIN tb_pemeriksaan ON tb_pemeriksaan.id_pemeriksaan=tb_ordertmp.id_profile WHERE tb_ordertmp.session=:session");
                    $profil->bindParam(':session',$session);
                    $profil->execute();
                    $results = $profil->fetchAll(PDO::FETCH_ASSOC);
                    // print_r($results);
                ?>
                <table class="table table-borderless">
                    <tr><td>Nama</td><td>:</td><td><?= $data['nama']?></td></tr>
                    <tr><td>ID Lab</td><td>:</td><td><?= $_GET['lab']?></td></tr>
                </table>
                <center><h2>Input Pemeriksaan</h2></center>
                <br>
                <form class="form-horizontal" action="" method="post">
                    <?php $index = 0;foreach($results as $key => $result){
                        ?>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><?php echo $results[$index]['profil'] ?></label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="hasil[]">
                              <input type="hidden" name="profil[]" value="<?php echo $results[$index]['id_pemeriksaan'] ?>">
                            </div>
                            <label for="" class="col-sm-1 control-label"><?php echo $results[$index]['unit'] ?></label>
                        </div>
                    <?php $index++; } ?>
                </form>
            </div>
    
        </div>
    </div>
    <?php include 'addfile/modal-transaksi.php'; ?>