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
    $('.detail-barang').click( function () {
      var id = this.id;
  
      $.ajax({
        type: "POST",
        url: "addfile/crud-barang.php?eks=detail",
        data: "id_barang="+id,
        dataType: "json",
        success: function (data) {
          $('#id_update').val(data.id_barang);
          $('#nama_update').val(data.nama_barang);
          $('#exp_update').val(data.exp);
          $('#stok_update').val(data.stok);
          $('#satuan_update').val(data.satuan);
          $('#modal-update-barang').modal("show");
        }
      });
    });
    // -----------------------------
  
    // update 
    $('.update-barang').click(function () {
      var id = $("#id_update").val().trim();
      var nama = $('#nama_update').val().trim();
      var exp = $('#exp_update').val().trim();
      var stok = $('#stok_update').val().trim();
      var satuan = $('#satuan_update').val().trim();
      $.ajax({
          type: "POST",
          url: "addfile/crud-barang.php?eks=update",
          data: "id="+id+"&nama="+nama+"&exp="+exp+"&stok="+stok+"&satuan="+satuan,
          success: function (msg) {
            alert('Data berhasil disimpan');
            location.reload();
          }
      });
    });
    //----------------------
  
    // hapus barang ------------------
    $('.hapus-barang').click(function() {
      var id = this.id;
      var barang = this.name;
      var conf = confirm("Yakin Hapus Data Barang : " +barang);
      if (conf==true) {
          $.ajax({
            type: "POST",
            url: "addfile/crud-barang.php?eks=hapus",
            data: "id_barang="+id,
            success: function (msg) {
              alert('Data berhasil dihapus');
              location.reload();
            }
          });
      }
    });
    //------------------
  
    // masuk barang ----------------------
    $('.masuk-barang').click(function() {
      var id = $('#id_barang').val().trim();
      var nilai = $('#nilai').val().trim();
          $.ajax({
            type: "POST",
            url: "addfile/crud-barang.php?eks=masuk",
            data: "id="+id+"&nilai="+nilai,
            success: function (msg) {
              alert('Stok berhasil ditambahkan');
              location.reload();
            }
          });
    });
    // ----------------------------------
  
     // masuk barang ----------------------
     $('.keluar-barang').click(function() {
      var id = $('#id_barang').val().trim();
      var nilai = $('#nilai').val().trim();
          $.ajax({
            type: "POST",
            url: "addfile/crud-barang.php?eks=keluar",
            data: "id="+id+"&nilai="+nilai,
            success: function (msg) {
              alert('Stok keluar berhasil');
              location.reload();
            }
          });
    });
    // ----------------------------------
  
  });$(document).ready(function(e) {
  $('.data-barang').DataTable(); //datatables
  $('.select2').select2(); //select2

  // add ---------------------------------
  $('.tambah-barang').click (function() {
    var nama = $("#nama").val().trim();
    var stok = $("#stok").val().trim();
    var satuan = $("#satuan").val().trim();
    var exp = $("#exp").val().trim();
    // var nama_ayah = $("#nama_ayah").val().trim();
    // var nama_ibu = $("#nama_ibu").val().trim();

    if (nama=="") {
      alert("Nama is Required");
    }
    else {
      $.ajax({
        type: "POST",
        url: "addfile/crud-barang.php?eks=tambah",
        data: "nama="+nama+"&stok="+stok+"&satuan="+satuan+"&exp="+exp,
        success: function (msg) {
          alert('Data berhasil disimpan');
          location.reload();
        }
      });
    }
  });
  // end add --------------------------------

  //edit-update
  $('.detail-barang').click( function () {
    var id = this.id;

    $.ajax({
      type: "POST",
      url: "addfile/crud-barang.php?eks=detail",
      data: "id_barang="+id,
      dataType: "json",
      success: function (data) {
        $('#id_update').val(data.id_barang);
        $('#nama_update').val(data.nama_barang);
        $('#exp_update').val(data.exp);
        $('#stok_update').val(data.stok);
        $('#satuan_update').val(data.satuan);
        $('#modal-update-barang').modal("show");
      }
    });
  });
  // -----------------------------

  // update 
  $('.update-barang').click(function () {
    var id = $("#id_update").val().trim();
    var nama = $('#nama_update').val().trim();
    var exp = $('#exp_update').val().trim();
    var stok = $('#stok_update').val().trim();
    var satuan = $('#satuan_update').val().trim();
    $.ajax({
        type: "POST",
        url: "addfile/crud-barang.php?eks=update",
        data: "id="+id+"&nama="+nama+"&exp="+exp+"&stok="+stok+"&satuan="+satuan,
        success: function (msg) {
          alert('Data berhasil disimpan');
          location.reload();
        }
    });
  });
  //----------------------

  // hapus barang ------------------
  $('.hapus-barang').click(function() {
    var id = this.id;
    var barang = this.name;
    var conf = confirm("Yakin Hapus Data Barang : " +barang);
    if (conf==true) {
        $.ajax({
          type: "POST",
          url: "addfile/crud-barang.php?eks=hapus",
          data: "id_barang="+id,
          success: function (msg) {
            alert('Data berhasil dihapus');
            location.reload();
          }
        });
    }
  });
  //------------------

  // masuk barang ----------------------
  $('.masuk-barang').click(function() {
    var id = $('#id_barang').val().trim();
    var nilai = $('#nilai').val().trim();
        $.ajax({
          type: "POST",
          url: "addfile/crud-barang.php?eks=masuk",
          data: "id="+id+"&nilai="+nilai,
          success: function (msg) {
            alert('Stok berhasil ditambahkan');
            location.reload();
          }
        });
  });
  // ----------------------------------

   // masuk barang ----------------------
   $('.keluar-barang').click(function() {
    var id = $('#id_barang').val().trim();
    var nilai = $('#nilai').val().trim();
        $.ajax({
          type: "POST",
          url: "addfile/crud-barang.php?eks=keluar",
          data: "id="+id+"&nilai="+nilai,
          success: function (msg) {
            alert('Stok keluar berhasil');
            location.reload();
          }
        });
  });
  // ----------------------------------

});