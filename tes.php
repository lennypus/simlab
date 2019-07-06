<div class="col-md-12 col-sm-6">
<div class="alert alert-success notif"  role="alert">
  <strong>Well done!</strong> Data Berhasil diubah.
</div>
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
                    $profil =$koneksi->prepare("SELECT tb_pemeriksaan.jenis_pemeriksaan as profil, tb_pemeriksaan.unit as unit, tb_pemeriksaan.nilai_rujukan as rujukan, tb_pemeriksaan.id_pemeriksaan, tb_test.hasil as hasil, tb_test.id_test FROM tb_test JOIN tb_pemeriksaan ON tb_pemeriksaan.id_pemeriksaan=tb_test.id_pemeriksaan WHERE tb_test.id_lab=:lab");
                    $profil->bindParam(':lab',$id);
                    $profil->execute();
                    $results = $profil->fetchAll(PDO::FETCH_ASSOC);
                    // print_r($results);
                ?>
                <table class="table table-borderless">
                    <tr><td>Nama</td><td>:</td><td><?= $data['nama']?></td></tr>
                    <tr><td>ID Lab</td><td>:</td><td><?= $_GET['lab']?></td></tr>
                    <tr><td>Tanggal</td><td>:</td><td><?php echo tgl_indo($data['tanggal']) ?></td></tr>
                    <tr><td>Dokter</td><td>:</td><td><?php echo $data['id_dokter'] ?></td></tr>
                </table>
                <center><h2>Input Pemeriksaan</h2></center>
                <br>
                <form class="form-horizontal" action="addfile/crud-tes.php" method="post">
                    <input type="hidden" name="id_lab" value="<?php echo $_GET['lab'] ?>">
                    <?php $index = 0;foreach($results as $key => $result){
                        ?>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label"><?php echo $results[$index]['profil'] ?></label>
                            <div class="col-sm-6">
                              <input type="text" required class="form-control inputhasil" id="<?php echo $results[$index]['id_test'] ?>" value="<?php echo $results[$index]['hasil'] ?>" name="hasil[]">
                              <input id="mm" type="hidden" name="profil[]" value="<?php echo $results[$index]['id_pemeriksaan'] ?>">
                            </div>
                            <label for="mm" class="col-sm-1 control-label"><?php echo $results[$index]['unit'] ?></label>
                            <!-- <button class="btn btn-success hapus">SET</button> -->
                        </div>
                    <?php $index++; } ?>
                    <div class="form-group">
                        <div class="col-sm-5"></div>
                        <div class="col-sm-2"><a href="" id="<?php echo $_GET['lab'] ?>" class="col-xs-12 btn btn-danger validasi">validasi</a></div>
                        <div class="col-sm-2">
                            <!-- <input type="submit" class="col-xs-12 btn btn-success" name="submit" value="simpan"> -->
                        </div>
                    </div>
                </form>
            </div>
    
        </div>
    </div>
    <?php include 'addfile/modal-transaksi.php'; ?>
    <?php
        function tgl_indo($tanggal){
            $bulan = array (
                1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );
            $pecahkan = explode('-', $tanggal);
            
            // variabel pecahkan 0 = tanggal
            // variabel pecahkan 1 = bulan
            // variabel pecahkan 2 = tahun
         
            return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
        }
    ?>