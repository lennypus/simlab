<?php include 'koneksi.php'; ?>
    <?php include 'modal-pemeriksaan.php'; ?>
    <div class="table-responsive">
    <table class="table table-striped table-bordered data-barang" id="barangtable">
      <thead>
        <tr class="success">
          <th>No.</th>
          <th>Jenis Pemeriksaan</th>
          <th>Harga</th>
          <th>Profil</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
      <?php
      $tampil = $koneksi->prepare("SELECT * FROM tb_pemeriksaan JOIN tb_profil ON tb_pemeriksaan.id_profil=tb_profil.id_profil");
      $tampil->execute();
      $tampil->setFetchMode(PDO::FETCH_ASSOC);
      $no = 1;
      while ($data=$tampil->fetch(PDO::FETCH_ORI_NEXT)) { ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $data['jenis_pemeriksaan']; ?></td>
          <td><?php echo rupiah($data['harga']) ?></td>
          <td>
              <?php 
                  echo $data['nama_profil']    
              ?>
          </td>
          <td><button type="button" id="<?php echo $data['id_pemeriksaan']; ?>" class="btn btn-warning btn-sm detail-pemeriksaan" data-toggle="modal" data-target="#modal-update-pemeriksaan"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button>
            <button name="<?php echo $data['jenis_pemeriksaan'] ?>" type="button" id="<?php echo $data['id_pemeriksaan']; ?>" class="btn btn-danger btn-sm hapus-pemeriksaan"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>
            </td>
          </td>
        </tr>
        <?php $no++;} ?>
      </tbody>
    </table>
  </div>
