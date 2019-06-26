 <!--Awal Modal Tambah Siswa-->
    <div class="modal" id="modal-tambah-user">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Tambah User</h3>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                    <!-- -->
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Nama User</label>
                          <div class="col-sm-8">
                          <input type="text" class="form-control"  id="nama" maxlength="200" placeholder="Nama Pengguna">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Username</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="username" placeholder="Username">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Password<span style="color:red">*</span></label>
                          <div class="col-sm-4">
                                <input type="text" class="form-control" id="password" placeholder="Password">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Fungsi</label>
                          <div class="col-sm-8">
                            <select name="level" id="level" class="form-control">
                                <option value="">Pilih...</option>
                                <option value="kasir">Kasir</option>
                                <option value="dokter">Dokter</option>
                                <option value="admin">Admin</option>
                            </select>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary tambah-user" data-dismiss="modal">SIMPAN</button>
              </div>
            </div>
          </div>
        </div>
    <!--Akhir Modal Tambah Siswa-->

    <!--Awal Modal UPDATE Siswa-->
    <div class="modal" id="modal-update-user">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title">Detail Barang</h3>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
                    <div class="form-group">
                        <input type="hidden" id="id_update">
                            <label for="" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_update" maxlength="200" placeholder="Nama Barang">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Stok</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" id="stok_update" placeholder="Stok barang">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Kadaluarsa Barang</label>
                            <div class="col-sm-4">
                                  <input type="date" class="form-control exp" id="exp_update">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Satuan Barang</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="satuan_update" maxlength="200" placeholder="Stok barang">
                            </div>
                        </div>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-warning update-barang" data-dismiss="modal">UPDATE</button>
          </div>
        </div>
      </div>
    </div>
    <!------- Akhir ------->
