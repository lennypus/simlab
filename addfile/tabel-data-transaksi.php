
<?php include 'koneksi.php'; ?>
      <?php
      $tampil = $koneksi->prepare("SELECT tb_invoice.*,tb_admin.nama as admin,tb_siswa.nama as pasien FROM tb_invoice JOIN tb_admin ON tb_admin.id_admin=tb_invoice.id_kasir JOIN tb_siswa ON tb_siswa.nis=tb_invoice.id_pasien ORDER BY datecreate DESC");
      $tampil->execute();
      $tampil->setFetchMode(PDO::FETCH_ASSOC);
      while ($data=$tampil->fetch(PDO::FETCH_ORI_NEXT)) { ?>
        <tr>
          <td><?php echo $data['datecreate']; ?></td>
          <td><?php echo $data['id_pasien']; ?></td>
          <td><?php echo $data['pasien']; ?></td>
          <td><?php echo rupiah($data['total']) ?></td>
          <td><?php echo $data['admin']; ?></td>
          <td><button type="button" class="btn btn-primary btn-sm"> <i class="fa fa-search"></i>  Detail</button></td>
        </tr>
        <?php } ?>