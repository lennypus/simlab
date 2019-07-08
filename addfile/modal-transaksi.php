    <!--Awal Modal Tambah Siswa-->
    <div class="modal" id="modal-tanggal-transaksi">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h3 class="modal-title">Range Laporan</h3>
                </div>
                <div class="modal-body">
                  <form action="home?page=laporan" methode="GET" class="form-horizontal">
                      <!-- -->
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Dari Tanggal</label>
                            <div class="col-sm-8">
                            <input type="date" class="form-control" id="dari_tanggal" maxlength="200" placeholder="Nama Barang">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Ke Tanggal</label>
                            <div class="col-sm-8">
                              <input type="date" class="form-control" id="ke_tanggal" placeholder="Stok barang">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                  <button type="submit" onclick="laporan()" class="btn btn-primary laporan">Cari</button>
                </div>
              </div>
            </div>
          </div>
      <!--Akhir Modal Tambah Siswa-->

      <!-- Modal Detail -->
      <div class="modal" id="modal-detail-transaksi">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h3 class="modal-title">Detail Transaksi</h3>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                      <svg id="barcode"></svg>
                    </div>
                    <div class="col-md-6">
                      <table class="table">
                        <tr>
                          <td>Nama</td>
                          <td>:</td>
                          <td id="nama"></td>
                        </tr>
                        <!-- <tr>
                          <td>NO. RM</td>
                          <td>:</td>
                          <td id="rm"></td>
                        </tr> -->
                        <tr>
                          <td>Tanggal Transaksi</td>
                          <td>:</td>
                          <td id="tanggal"></td>
                        </tr>
                        <tr>
                          <td>Kasir</td>
                          <td>:</td>
                          <td id="kasir"></td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>:</td>
                          <td id="total"></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">CLOSE</button>
                  <!-- <button type="submit" onclick="laporan()" class="btn btn-primary laporan">Cari</button> -->
                </div>
              </div>
            </div>
          </div>
      <!--  -->
      <script>
        function laporan(){
          var start = $("#dari_tanggal").val();
          var end = $("#ke_tanggal").val();

          window.location.href = window.location.href + "&start=" + escape(start) + "&end="+escape(end);
        }

        function detail(id){
          $.ajax({
            type: "POST",
            url: "addfile/crud-transaksi.php?eks=transaksi",
            data: "id="+id,
            success: function () {
              $.ajax({
                type: "POST",
                url: "addfile/crud-transaksi.php?eks=transaksi",
                data: "id="+id,
                dataType: "json",
                success: function (data) {
                  $('#modal-detail-transaksi').modal('show');
                  JsBarcode("#barcode", data.id_invoice);
                  $('#nama').text(data.pasien);
                  $('#tanggal').text(data.datecreate);
                  $('#kasir').text(data.admin);
                  $('#total').text(data.total);
                  // $('#rm').text(data.pasien);
                }
              });
                
            },
            error: function (msg){
                alert(msg);
            }
          });
        }
      </script>