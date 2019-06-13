    <?php include 'koneksi.php'; ?>
    <?php include 'modal-barang.php'; ?>
    <div class="table-responsive">
    <table class="table table-striped table-bordered data-barang" id="barangtable">
      <thead>
        <tr class="success">
          <th>No.</th>
          <th>Nama Barang</th>
          <th>Stok Tesedia</th>
          <th>Kadaluarsa</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
      <?php
      $tampil = $koneksi->prepare("SELECT * FROM tb_barang");
      $tampil->execute();
      $tampil->setFetchMode(PDO::FETCH_ASSOC);
      $no = 1;
      while ($data=$tampil->fetch(PDO::FETCH_ORI_NEXT)) { ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $data['nama_barang']; ?></td>
          <td><?php echo $data['stok'].' '.$data['satuan']; ?></td>
          <td>
              <?php 
                  $exp = $data['exp'];
                  $now = date('Y-m-d');
                  if($now >= $exp){
                      echo 'Kadaluarsa';
                  }else{
                    echo $exp;
                  }
              ?>
          </td>
          <td><button type="button" id="<?php echo $data['id_barang']; ?>" class="btn btn-warning btn-sm detail-barang" data-toggle="modal" data-target="#modal-update-barang"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button>
            <button name="<?php echo $data['nama_barang'] ?>" type="button" id="<?php echo $data['id_barang']; ?>" class="btn btn-danger btn-sm hapus-barang"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>
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
