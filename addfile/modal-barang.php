    <!--Awal Modal Tambah Siswa-->
    <div class="modal" id="modal-tambah-barang">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Tambah Barang</h3>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                    <!-- -->
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Nama Barang</label>
                          <div class="col-sm-8">
                          <input type="text" class="form-control" id="nama" maxlength="200" placeholder="Nama Barang">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Stok</label>
                          <div class="col-sm-8">
                            <input type="number" class="form-control" id="stok" placeholder="Stok barang">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Kadaluarsa Barang</label>
                          <div class="col-sm-4">
                                <input type="date" class="form-control" id="exp">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Satuan Barang</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="satuan" maxlength="200" placeholder="Satuan barang">
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary tambah-barang" data-dismiss="modal">SIMPAN</button>
              </div>
            </div>
          </div>
        </div>
    <!--Akhir Modal Tambah Siswa-->

    <!--Awal Modal UPDATE Siswa-->
    <div class="modal" id="modal-update-barang">
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
    <!--Akhir Modal Masuk Stok-->
    <div class="modal" id="modal-masuk-barang">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h3 class="modal-title">Stok Masuk Barang</h3>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal">
                      <!-- -->
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-8">
                            <select name="id" id="id_barang" class="form-control select2">
                                <?php
                                include_once 'koneksi.php';
                                $tampil = $koneksi->prepare("SELECT * FROM tb_barang");
                                $tampil->execute();
                                $tampil->setFetchMode(PDO::FETCH_ASSOC);
                                $no = 1;
                                while ($data=$tampil->fetch(PDO::FETCH_ORI_NEXT)) {
                                ?>
                                <option value="<?php echo $data['id_barang'] ?>"><?php echo $data['nama_barang'] ?></option>
                                <?php } ?>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Stok Masuk</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" id="nilai" placeholder="Stok barang masuk">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                  <button type="button" class="btn btn-primary masuk-barang" data-dismiss="modal">SIMPAN</button>
                </div>
              </div>
            </div>
          </div>
      <!--Akhir Modal Stok Masuk -->
  
      <!-- Modal Keluar Stok-->
    <div class="modal" id="modal-keluar-barang">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h3 class="modal-title">Stok Keluar Barang</h3>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal">
                      <!-- -->
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-8">
                            <select name="id" id="id_keluar" class="form-control select2">
                                <?php
                                include_once 'koneksi.php';
                                $tampil = $koneksi->prepare("SELECT * FROM tb_barang");
                                $tampil->execute();
                                $tampil->setFetchMode(PDO::FETCH_ASSOC);
                                $no = 1;
                                while ($data=$tampil->fetch(PDO::FETCH_ORI_NEXT)) {
                                ?>
                                <option value="<?php echo $data['id_barang'] ?>"><?php echo $data['nama_barang'] ?></option>
                                <?php } ?>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Stok Keluar</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" id="keluar" placeholder="Stok barang keluar">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                  <button type="button" class="btn btn-primary keluar-barang" data-dismiss="modal">SIMPAN</button>
                </div>
              </div>
            </div>
          </div>
      <!--Akhir Modal Stok Keluar -->