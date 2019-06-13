
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="info-box bg-red">
          <span class="info-box-icon fa fa-male"></span>
          <div class="info-box-content">
            <span class="info-box-text">Jumlah Sampel</span>
            <span class="info-box-number"><div class="tampil-jml-laki-laki">1</div></span>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="info-box bg-green">
          <span class="info-box-icon"><i class="fa fa-male"></i> <i class="fa fa-female"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Total Seluruh Siswa </span>
            <span class="info-box-number"><div class="tampil-jml-siswa">2</div></span>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="info-box bg-blue">
          <span class="info-box-icon fa fa-female"></span>
          <div class="info-box-content">
            <span class="info-box-text">Siswa Perempuan</span>
            <span class="info-box-number"><div class="tampil-jml-perempuan">1</div></span>
          </div>
        </div>
      </div>
    </div>

        <div class="box box-success">
          <div class="box-header with-border">
            <h4 class="box-tittle"><i class="fa fa-graduation-cap"></i> Data Pasien</h4>
              <div class="box-tools pull-right">
                  <a href="" data-toggle="modal" data-target="#modal-tambah-siswa"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Registrasi Pasien</button></a>
              </div>
          </div>
          <div class="box-body">
          <div class="tampil-data-siswa">
  
            <!--Awal Modal Tambah Siswa-->
        <div class="modal" id="modal-tambah-siswa">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h3 class="modal-title">Tambah Pasien</h3>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <!-- <label for="" class="col-sm-3 control-label">NIS</label> -->
                        <div class="col-sm-8">
                        <input type="hidden" value="xxx" class="form-control" id="nis" maxlength="20" placeholder="Nomor Induk Siswa">
                      </div>
                    </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Nama Lengkap</label>
                          <div class="col-sm-8">
                          <input type="text" class="form-control" id="nama" maxlength="200" placeholder="Nama..">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Jenis Kelamin</label>
                          <div class="col-sm-7">
                            <label class="radio-inline">
                                <input type="radio" name="jk" value="Laki - Laki" checked="true">Laki - Laki
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="jk" value="Perempuan">Perempuan
                              </label>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Tempat Lahir</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="tmpt_lahir" maxlength="100" placeholder="Tempat Lahir">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Tanggal Lahir</label>
                          <div class="col-sm-4">
                                <input type="text" class="form-control picker_tgl_lahir" id="tgl_lahir" readonly="true">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Alamat Lengkap</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="alamat" maxlength="200" placeholder="Alamat Lengkap">
                          </div>
                      </div>
                      <!-- <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Nama Ayah</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_ayah" maxlength="200" placeholder="Nama Orang Tua - Ayah">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Nama Ibu</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_ibu" maxlength="200" placeholder="Nama Orang Tua - Ibu">
                          </div>
                      </div> -->
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary tambah-siswa" data-dismiss="modal">SIMPAN</button>
              </div>
            </div>
          </div>
        </div>
    <!--Akhir Modal Tambah Siswa-->

    <!--Awal Modal UPDATE Siswa-->
    <div class="modal" id="modal-update-siswa">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span></button>
            <h3 class="modal-title">Detail Pasien</h3>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">No.RM</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="nis_update" maxlength="20" placeholder="Nomor Rekam Siswa" disabled="true">
                    </div>
                </div>
                  <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Nama Lengkap</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" id="nama_update" maxlength="200" placeholder="Nama..">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Jenis Kelamin</label>
                      <div class="col-sm-7">
                        <label class="radio-inline">
                            <input type="radio" name="jk_update" id="jk1_update" value="Laki - Laki">Laki - Laki
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="jk_update" id="jk2_update" value="Perempuan">Perempuan
                          </label>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Tempat Lahir</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="tmpt_lahir_update" maxlength="100" placeholder="Tempat Lahir">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Tanggal Lahir</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control picker_tgl_lahir" id="tgl_lahir_update" readonly="true">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Alamat Lengkap</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="alamat_update" maxlength="200" placeholder="Alamat Lengkap">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Nama Ayah</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_ayah_update" maxlength="200" placeholder="Nama Orang Tua - Ayah">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Nama Ibu</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_ibu_update" maxlength="200" placeholder="Nama Orang Tua - Ibu">
                      </div>
                  </div>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-warning update-siswa" data-dismiss="modal">UPDATE</button>
          </div>
        </div>
      </div>
    </div>
    <!--Akhir Modal UPDATE Siswa-->
    <script type="text/javascript">
    $(document).ready(function () {
               $('.picker_tgl_lahir').datepicker({
                   format: "dd M yyyy",
                   autoclose:true
               });
           });
    </script>
  
  
    <div class="table-responsive">
    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="DataTables_Table_0"></label></div><table class="table table-striped table-bordered data-siswa dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
      <thead>
        <tr class="success" role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 85px;" aria-sort="ascending" aria-label="No. RM: activate to sort column descending">No. RM</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 160px;" aria-label="Nama Lengkap: activate to sort column ascending">Nama Lengkap</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 147px;" aria-label="Tanggal Lahir: activate to sort column ascending">Tanggal Lahir</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 152px;" aria-label="Jenis Kelamin: activate to sort column ascending">Jenis Kelamin</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 173px;" aria-label="Alamat Lengkap: activate to sort column ascending">Alamat Lengkap</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 76px;" aria-label="Aksi: activate to sort column ascending">Aksi</th></tr>
      </thead>

      <tbody>
              
                
              <tr role="row" class="odd">
          <td class="sorting_1">ID-0002</td>
          <td>Ahmad Zain</td>
          <td>2019-05-30</td>
          <td>Laki - Laki</td>
          <td>Jalan Nangka</td>
          <td><button type="button" id="ID-0002" class="btn btn-warning btn-sm detail-siswa" data-toggle="modal" data-target="#modal-update-siswa"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
            <button type="button" id="ID-0002" class="btn btn-danger btn-sm hapus-siswa"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
            </td>
          
        </tr><tr role="row" class="even">
          <td class="sorting_1">ID-0003</td>
          <td>Siti</td>
          <td>2019-06-04</td>
          <td>Perempuan</td>
          <td>Jalan Manggis</td>
          <td><button type="button" id="ID-0003" class="btn btn-warning btn-sm detail-siswa" data-toggle="modal" data-target="#modal-update-siswa"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
            <button type="button" id="ID-0003" class="btn btn-danger btn-sm hapus-siswa"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
            </td>
          
        </tr></tbody>
    </table><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 2 of 2 entries</div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">Previous</a><span><a class="paginate_button current" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" id="DataTables_Table_0_next">Next</a></div></div>
  </div>
  


<script type="text/javascript">
$(document).ready(function(e) {
  //CRUD data-siswa
  $('.tambah-siswa').click (function() {
    var nis = $("#nis").val().trim();
    var nama = $("#nama").val().trim();
    var jk = $('input:radio[name=jk]:checked').val();
    var tmpt_lahir = $("#tmpt_lahir").val().trim();
    var tgl_lahir = $("#tgl_lahir").val().trim();
    var alamat = $("#alamat").val().trim();
    // var nama_ayah = $("#nama_ayah").val().trim();
    // var nama_ibu = $("#nama_ibu").val().trim();

    if (nis=="") {
      alert("NIS is Required");
    }
    else {
      $.ajax({
        type: "POST",
        url: "addfile/crud-siswa.php?eks=tambah",
        data: "nis="+nis+"&nama="+nama+"&jk="+jk+"&tmpt_lahir="+tmpt_lahir+"&tgl_lahir="+tgl_lahir+"&alamat="+alamat,
        success: function (msg) {
        tampil_data_siswa();
        clear_siswa_tambah();
        }
      });
    }
  });

  $('.hapus-siswa').click(function() {
    var nis = this.id;
    var conf = confirm("Yakin Hapus Siswa NIS :" +nis);
    if (conf==true) {
        $.ajax({
          type: "POST",
          url: "addfile/crud-siswa.php?eks=hapus",
          data: "nis="+nis,
          success: function (msg) {
            tampil_data_siswa();
          }
        });
    }
  });

  $('.detail-siswa').click( function () {
    var nis = this.id;

    $.ajax({
      type: "POST",
      url: "addfile/crud-siswa.php?eks=detail",
      data: "nis="+nis,
      dataType: "json",
      success: function (data) {
        $('#nis_update').val(data.nis);
        $('#nama_update').val(data.nama);
        if (data.jk=="Laki - Laki") {
          $('#jk1_update').attr('checked',true);
        }
        else {
          $('#jk2_update').attr('checked',true);
        }
        $('#tmpt_lahir_update').val(data.tmpt_lahir);
        $('#tgl_lahir_update').val(data.tgl_lahir);
        $('#alamat_update').val(data.alamat);
        $('#nama_ayah_update').val(data.nama_ayah);
        $('#nama_ibu_update').val(data.nama_ibu);
        $('#modal-update-siswa').modal("show");
      }
    });
  });

  $('.update-siswa').click(function () {
    var nis = $("#nis_update").val().trim();
    var nama = $('#nama_update').val().trim();
    var jk = $('input:radio[name=jk_update]:checked').val();
    var tmpt_lahir = $('#tmpt_lahir_update').val().trim();
    var tgl_lahir = $('#tgl_lahir_update').val().trim();
    var alamat = $('#alamat_update').val().trim();
    // var nama_ayah = $('#nama_ayah_update').val().trim();
    // var nama_ibu = $('#nama_ibu_update').val().trim();

    $.ajax({
        type: "POST",
        url: "addfile/crud-siswa.php?eks=update",
        data: "nis="+nis+"&nama="+nama+"&jk="+jk+"&tmpt_lahir="+tmpt_lahir+"&tgl_lahir="+tgl_lahir+"&alamat="+alamat,
        success: function (msg) {
        tampil_data_siswa();
        clear_siswa_update();

        }
    });
  });
$('.data-siswa').DataTable(); //datatables
});
</script>
</div>
          </div>
        </div>
    </section>
    <!-- /.content -->
  