<?php include 'koneksi.php'; ?>
    <div class="table-responsive">
    <table class="table table-striped table-bordered data-barang" id="barangtable">
      <thead>
        <tr class="success">
          <th>ID-Lab</th>
          <th>Pasien</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
      <?php
      $tampil = $koneksi->prepare("SELECT tb_lab.*, tb_siswa.nama as pasien FROM tb_lab JOIN tb_siswa ON tb_siswa.nis = tb_lab.id_pasien ORDER BY tb_lab.id_lab DESC");
      $tampil->execute();
      $tampil->setFetchMode(PDO::FETCH_ASSOC);
      $no = 1;
      while ($data=$tampil->fetch(PDO::FETCH_ORI_NEXT)) { ?>
        <tr>
          <td><?php echo $data['id_lab']; ?></td>
          <td><?php echo $data['pasien']; ?></td>
          <td><?php if(!empty($data['tanggal']) && $data['isValidasi'] == 0){
                echo '<span style="border-radius:15px" class="btn btn-xs btn-warning">PROSES VALIDASI</span>';
          }elseif($data['isValidasi'] == 0){
              echo '<span style="border-radius:15px" class="btn btn-xs btn-primary">PEMERIKSAAN</span>';
          }else{
            echo '<span style="border-radius:15px" class="btn btn-xs btn-danger">TERVALIDASI</span>';
          } ?></td>
          <td>
                <a href="home.php?page=input&lab=<?php echo $data['id_lab'] ?>&session=<?php echo $data['session'] ?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Periksa </button></a>
                <?php if(!empty($data['tanggal'])){
                  ?>
                      <a href="home.php?page=hasil&lab=<?php echo $data['id_lab'] ?>&session=<?php echo $data['session'] ?>"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-search"></i> Hasil Laboratorium </button></a>
                  <?php
                } ?>
          </td>
          </td>
        </tr>
        <?php $no++;} ?>
      </tbody>
    </table>
  </div>

<script type="text/javascript">
$(document).ready(function(e) {
  //CRUD data-siswa

  $('.data-barang').DataTable(); //datatables
});
</script>
