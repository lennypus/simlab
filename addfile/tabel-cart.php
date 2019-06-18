<table class="table table-responsive table-bordered">
    <tr>
        <th>No.</th>
        <th>Jenis Pemeriksaan</th>
        <th>Harga<th>
        <!-- <th></th> -->
    <tr>
    <?php
    include 'koneksi.php';
    session_start();
    $sql = "SELECT tb_ordertmp.id_order as id,tb_pemeriksaan.jenis_pemeriksaan as jp, tb_pemeriksaan.harga as harga FROM tb_ordertmp JOIN tb_pemeriksaan ON tb_pemeriksaan.id_pemeriksaan=tb_ordertmp.id_profile WHERE session=:sesi";
    try{
    $tampil = $koneksi->prepare($sql);
    $tampil->bindParam(':sesi',$_SESSION['kunci']);
    // echo $_SESSION['kunci'];
    $tampil->execute();
    $no = 1;
    $tampil->setFetchMode(PDO::FETCH_ASSOC);
    while ($data=$tampil->fetch(PDO::FETCH_ORI_NEXT)) { ?>
    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $data['jp'] ?></td>
        <td class="hargaid"><?php echo $data['harga'] ?></td>
        <td><a class="btn btn-danger" id="<?php echo $data['id'] ?>" onclick="remove(this.id)">X</a></td>
    </tr>
    <?php
    $no++;
    }}
    catch(PDOExpection $e)
    {
        echo $e->getMessage();
    }
    ?>
    <tr>
        <td colspan="2">Total</td>
        <td colspan="2" id="sumtotal"></td>

    </tr>
</table>
<script>
    var sum = 0;
    var result = 0;
// iterate through each td based on class and add the values
  $(".hargaid").each(function() {
      var value = $(this).text();
      // add only if the value is number
      if(!isNaN(value) && value.length != 0) {
          sum += parseFloat(value);
      }
      document.getElementById('sumtotal').innerHTML = sum;
      console.log(sum);
  });

</script>