$(document).ready(function(e) {  




    // add ---------------------------------
    $('.tambah-pemeriksaan').click (function() {
      var jp = $("#jenis_pem").val().trim();
      var harga = $("#harga").val().trim();
      var unit = $("#unit").val().trim();
      var rujukan = $("#rujukan").val().trim();
      var profil = $("#profil").val().trim();
      // var nama_ibu = $("#nama_ibu").val().trim();
  
      if (jp=="") {
        alert("Nama is Required");
      }
      else {
        $.ajax({
          type: "POST",
          url: "addfile/crud-pemeriksaan.php?eks=tambah",
          data: "jp="+jp+"&harga="+harga+"&unit="+unit+"&rujukan="+rujukan+"&profil="+profil,
          success: function (msg) {
            alert('Data berhasil disimpan');
            location.reload();
          },
          error: function (msg){
              alert(msg);
          }
        });
      }
    });
    // end add --------------------------------
  
    //edit-update
    $('.detail-user').click( function () {
      var id = this.id;
  
      $.ajax({
        type: "POST",
        url: "addfile/crud-user.php?eks=detail",
        data: "id_user="+id,
        dataType: "json",
        success: function (data) {
          $('#id').val(data.id_pemeriksaan);
          $('#jenis_pem_update').val(data.jenis_pemeriksaan);
          $('#harga_update').val(data.harga);
          $('#unit_update').val(data.unit);
          $('#rujukan_update').val(data.nilai_rujukan);
          var profil = data.id_profil;
          document.cookie  = "select="+profil;
          //   $('#profil_update').val(data.id_profil);
          $('#modal-update-pemeriksaan').modal("show");
        }
      });
    });
    // -----------------------------
  
    // update 
    $('.update-ss').click(function () {
        var id = $("#id").val().trim();
        var jp = $("#jenis_pem_update").val().trim();
        var harga = $("#harga_update").val().trim();
        var unit = $("#unit_update").val().trim();
        var rujukan = $("#rujukan_update").val().trim();
        var profil = $("#profil_update").val().trim();
      $.ajax({
          type: "POST",
          url: "addfile/crud-pemeriksaan.php?eks=update",
          data: "id="+id+"&jp="+jp+"&harga="+harga+"&unit="+unit+"&rujukan="+rujukan+"&profil="+profil,
          success: function (msg) {
            alert('Data berhasil disimpan');
            location.reload();
          }
      });
    });
    //----------------------
  
    // hapus pemeriksaan ------------------
    $('.hapus-ss').click(function() {
      var id = this.id;
      var barang = this.name;
      var conf = confirm("Yakin Hapus Data Barang : " +barang);
      if (conf==true) {
          $.ajax({
            type: "POST",
            url: "addfile/crud-pemeriksaan.php?eks=hapus",
            data: "id_pemeriksaan="+id,
            success: function (msg) {
              alert('Data berhasil dihapus');
              location.reload();
            }
          });
      }
    });
    //------------------
  
    $('.validasi').click(function() {
      var id = this.id;
      // var barang = this.name;
      var conf = confirm("Memvalidasi Sampel Pemeriksaan");
      if (conf==true) {
          $.ajax({
            type: "POST",
            url: "addfile/crud-pemeriksaan.php?eks=validasi",
            data: "id_lab="+id,
            success: function (msg) {
              alert('Status laboratorium berhasil divalidasi');
              // location.reload();
            }, error : function (msg){
                alert(msg);
            }
          });
      }
    });
    //------------------

  });