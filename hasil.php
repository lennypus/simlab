<style>
#hasil {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#hasil td, #hasil th {
  border: 1px solid #ddd;
  padding: 8px;
}

#hasil tr:nth-child(even){background-color: #f2f2f2;}

#hasil tr:hover {background-color: #ddd;}

#hasil th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>

<div class="col-md-12 col-sm-6">

        <div class="box box-success">
            <!-- <div class="box-header with-border">
                <h4 class="box-tittle"><i class="fa fa-user"></i> Pemeriksaan Laboratorium</h4>
                <div class="box-tools pull-right">
                </div>
            </div> -->
            <div class="box-body" id="printarea">
                <!-- <center><h2>Informasi</h2></center> -->
                <?php
                    include 'addfile/koneksi.php';
                    $id = $_GET['lab'];
                    $tampil =$koneksi->prepare("SELECT * FROM tb_lab JOIN tb_siswa ON tb_siswa.nis=tb_lab.id_pasien WHERE id_lab=:id");
                    $tampil->bindParam(':id',$_GET['lab']);
                    $tampil->execute();
                    $data = $tampil->Fetch(PDO::FETCH_ASSOC);

                    $session = $_GET['session'];
                    $profil =$koneksi->prepare("SELECT tb_pemeriksaan.jenis_pemeriksaan as profil, tb_pemeriksaan.unit as unit, tb_pemeriksaan.nilai_rujukan as rujukan, tb_pemeriksaan.id_pemeriksaan, tb_test.hasil as hasil FROM tb_test JOIN tb_pemeriksaan ON tb_pemeriksaan.id_pemeriksaan=tb_test.id_pemeriksaan WHERE tb_test.id_lab=:lab");
                    $profil->bindParam(':lab',$id);
                    $profil->execute();
                    $results = $profil->fetchAll(PDO::FETCH_ASSOC);
                    // print_r($results);
                ?>
                <div class="" style="font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 12px; line-height: 14px;">
                    <p style="font-size: 12px; line-height: 14px; text-align: center;"><span style="font-size: 18px; line-height: 21px;"><strong>HASIL PEMERIKSAAN LABORATORIUM</strong></span>
                    </p>
                    <p style="font-size: 12px; line-height: 14px; text-align: center;"><span style="font-size: 18px; line-height: 21px;"><strong>POLTEKES KEMENKES LABORATORIUM YOGYAKARTA</strong></span>
                    </p>
                    <p style="font-size: 12px; line-height: 14px; text-align: center;"><span style="font-size: 18px; line-height: 21px;"><span style="font-size: 12px; line-height: 14px;">Jl Tatabumi No. 3, Banyuraden, Gamping, Sleman 55293 Telp/Fax (0274) 617601 Yogyakarta.</span>
                        <br />
                        </span>
                    </p>
                    <div style="border-bottom:2px solid black;padding-bottom: 5px;margin-bottom:5px"></div>
                </div>

                <table class="table table-borderless" style="border:none !important">
                    <tr><td>Nama</td><td>:</td><td><?= $data['nama']?></td></tr>
                    <tr><td>ID Lab</td><td>:</td><td><?= $_GET['lab']?></td></tr>
                    <tr><td>Tanggal</td><td>:</td><td><?php echo tgl_indo($data['tanggal']) ?></td></tr>
                    <tr><td>Dokter</td><td>:</td><td><?php echo $data['id_dokter'] ?></td></tr>
                </table>
                <!-- <center><h2>Input Pemeriksaan</h2></center> -->
                <br>
                
                <table class="table table-responsive table-bordered table-sm" id="hasil">
                    <thead class="thead-light" style="background-color:#4CAF50; color:white">
                            <td>Pemeriksaan</td>
                            <td>Hasil</td>
                            <td>Satuan</td>
                            <td>Nilai Rujukan</td>
                    </thead>
                    <tbody>
                    <?php $index = 0;foreach($results as $key => $result){ ?>
                    <tr>
                        <td><?php echo $results[$index]['profil'] ?></td>
                        <td><?php echo $results[$index]['hasil'] ?></td>
                        <td><?php echo $results[$index]['unit'] ?></td>
                        <td><?php echo $results[$index]['rujukan'] ?></td>
                    </tr>
                    <?php $index++; } ?>
                    </tbody>
                </table>
                <br>
                <div class="row">
            <div class="col-xs-12"><button class="btn btn-primary col-xs-12" onclick="printDiv('printarea')">PRINT</button></div>
            </div>
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