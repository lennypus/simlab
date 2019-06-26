$(document).ready(function(e) {  

    // add ---------------------------------
    $('.tambah-user').click (function() {
      var nama = $("#nama").val().trim();
      var username = $("#username").val().trim();
      var password = $("#password").val().trim();
      var level = $("#level").val().trim();
  
      if (nama=="") {
        alert('Nama Harus disii');
      }
      else {
        $.ajax({
          type: "POST",
          url: "addfile/crud-user.php?eks=tambah",
          data: "nama="+nama+"&username="+username+"&password="+password+"&level="+level,
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
    $('.detail-pemeriksaan').click( function () {
      var id = this.id;
  
      $.ajax({
        type: "POST",
        url: "addfile/crud-pemeriksaan.php?eks=detail",
        data: "id_pemeriksaan="+id,
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
    $('.update-pemeriksaan').click(function () {
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
    $('.hapus-pemeriksaan').click(function() {
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
  
  });