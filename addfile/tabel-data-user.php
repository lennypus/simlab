<table class="table table-striped table-bordered data-transaksi">
    <thead>
        <tr class="success">
            <td>ID</td>
            <td>Username</td>
            <td>Level</td>
            <td>Nama</td>
            <td>Aksi</td>
        </tr>
    </thead>
    <tbody id="table-">
        <?php include 'koneksi.php'; ?>
            <?php
      $tampil = $koneksi->prepare("SELECT * FROM tb_admin");
      $tampil->execute();
      $tampil->setFetchMode(PDO::FETCH_ASSOC);
      while ($data=$tampil->fetch(PDO::FETCH_ORI_NEXT)) { ?>
                <tr>
                    <td>
                        <?php echo $data['id_admin']; ?>
                    </td>
                    <td>
                        <?php echo $data['username']; ?>
                    </td>
                    <td>
                        <?php echo $data['level']; ?>
                    </td>
                    <td>
                        <?php echo $data['nama'] ?>
                    </td>
                    <td>
                        <button type="button" id="<?php echo $data['id_admin']; ?>" class="btn btn-warning btn-sm detail-user" data-toggle="modal" data-target="#modal-update-user"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button>
                        <button type="button" id="<?php echo $data['id_admin']; ?>" class="btn btn-danger btn-sm hapus-user"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>
                    </td>
                </tr>
                <?php } ?>
    </tbody>
</table>