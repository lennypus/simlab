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
    <tbody id="table-">
        <?php include 'koneksi.php'; ?>
            <?php
            $start = $_GET['start'];
            $end = $_GET['end'];
      $tampil = $koneksi->prepare("SELECT tb_invoice.*,tb_admin.nama as admin,tb_siswa.nama as pasien FROM tb_invoice JOIN tb_admin ON tb_admin.id_admin=tb_invoice.id_kasir JOIN tb_siswa ON tb_siswa.nis=tb_invoice.id_pasien WHERE tb_invoice.datecreate >= DATE(:start) AND tb_invoice.datecreate <= DATE(:end) ORDER BY datecreate DESC");
      $tampil->bindParam(':start',$start);
      $tampil->bindParam(':end',$end);
      $tampil->execute();
      $tampil->setFetchMode(PDO::FETCH_ASSOC);
      while ($data=$tampil->fetch(PDO::FETCH_ORI_NEXT)) { ?>
                <tr>
                    <td>
                        <?php echo $data['datecreate']; ?>
                    </td>
                    <td>
                        <?php echo $data['id_pasien']; ?>
                    </td>
                    <td>
                        <?php echo $data['pasien']; ?>
                    </td>
                    <td>
                        <?php echo rupiah($data['total']) ?>
                    </td>
                    <td>
                        <?php echo $data['admin']; ?>
                    </td>
                    <td>
                        <button id="<?php $data['id_invoice'] ?>" onclick="detail(<?php echo $data['id_invoice'] ?>)" type="button" class="btn btn-primary btn-sm"> <i class="fa fa-search"></i> Detail</button>
                    </td>
                </tr>
                <?php } ?>
    </tbody>
</table>