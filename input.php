<div class="col-md-12 col-sm-6">

        <div class="box box-success">
            <div class="box-header with-border">
                <h4 class="box-tittle"><i class="fa fa-user"></i> Pemeriksaan ID-Lab : <?php echo $_GET['lab'] ?></h4>
                <div class="box-tools pull-right">
                </div>
            </div>
            <div class="box-body">
                <?php
                    include 'addfile/koneksi.php';
                    $data = $koneksi->prepare("SELECT * FROM tb_lab WHERE id_lab =:id");
                    $data->bindParam(':id',$_GET['lab']);
                    $data->execute();
                ?>
                <form action="" method="post">
                    
                </form>
            </div>
    
        </div>
    </div>
    <?php include 'addfile/modal-transaksi.php'; ?>