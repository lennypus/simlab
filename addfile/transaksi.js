$(document).ready(function(e) {
    tampil_data_transaksi();
    $('.data-transaksi').DataTable();
    
    $.ajax({
      type: "GET",
      url: "addfile/tabel-cart.php",
      success: function (data){
        $('#table-cart').html(data);
      }
    });

  });

  $('.addcart').click (function() {
    var jp = $("#jp").val().trim();
    var session = $("#sesi").val().trim();

    if (jp=="") {
      alert("Pilih Jenins Pemeriksaan");
    }
    else {
      $.ajax({
        type: "POST",
        url: "addfile/crud-transaksi.php?eks=addcart",
        data: "jp="+jp+"&session="+session,
        success: function (msg) {
          $.ajax({
            type: "GET",
            url: "addfile/tabel-cart.php",
            success: function (data){
              $('#table-cart').html(data)
            }
          });
        },
        error: function (msg){
            alert(msg);
        }
      });
    }
  });


  function remove(id){
    $.ajax({
      type: "POST",
      url: "addfile/crud-transaksi.php?eks=remove",
      data: "id="+id,
      success: function (msg) {
        $.ajax({
          type: "GET",
          url: "addfile/tabel-cart.php",
          success: function (data){
            $('#table-cart').html(data);
          }
        });
      },
      error: function (msg){
         
      }
    });
  }


  function tampil_data_transaksi() {

    $.ajax({
      type: "GET",
      url: "addfile/tabel-data-transaksi.php",
      success: function (data){
        $('#table-transaksi').html(data)
      }
    });

  }

  function ganti(id){

    $.ajax({
        type: "GET",
        url: "addfile/crud-transaksi.php?eks=ganti&id="+id,
        success: function (data){
          $('#jenis_pemeriksaan').html(data)
        }
      });

        
}
  