    <!--Awal Modal Tambah Pemerikaan-->
    <div class="modal" id="modal-tambah-pemeriksaan">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Tambah Permeriksaan</h3>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                    <!-- -->
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Jenis Permeriksaan</label>
                          <div class="col-sm-8">
                          <input type="text" class="form-control" id="jenis_pem" maxlength="200" placeholder="Jenis Pemeriksaan">
                          <span style="color:red; font-size:0.8em">*Wajib</span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Harga</label>
                          <div class="col-sm-8">
                            <input type="number" class="form-control" id="harga" placeholder="Harga pemeriksaan">
                            <span style="color:red; font-size:0.8em">*Wajib</span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Unit Satuan</label>
                          <div class="col-sm-8">
                                <input type="text" class="form-control" id="unit">
                                <span style="color:grey; font-size:0.8em">Boleh dikosongkan</span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Nilai Rujukan</label>
                          <div class="col-sm-8">
                            <textarea id="rujukan" class="form-control"></textarea>
                            <span style="color:grey; font-size:0.8em">Boleh dikosongkan</span>
                          </div>
                      </div>
                      <div class="form-group">
                            <label for="profil" class="col-sm-3 control-label">Profil Pemeriksaan</label>
                            <div class="col-sm-8">
                            <select require name="profil" id="profil" class="form-control select2">
                                <option>- Pilih Profil Pemeriksaan -</option>
                                <?php
                                include_once 'koneksi.php';
                                $tampil = $koneksi->prepare("SELECT * FROM tb_profil");
                                $tampil->execute();
                                $tampil->setFetchMode(PDO::FETCH_ASSOC);
                                $no = 1;
                                while ($data=$tampil->fetch(PDO::FETCH_ORI_NEXT)) {
                                ?>
                                <option value="<?php echo $data['id_profil'] ?>"><?php echo $data['nama_profil'] ?></option>
                                <?php } ?>
                            </select>
                            </div>
                        </div>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary tambah-pemeriksaan" data-dismiss="modal">SIMPAN</button>
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
                    <!-- -->
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Jenis Permeriksaan</label>
                          <div class="col-sm-8">
                          <input type="text" class="form-control" id="upadate_jenis_pem" maxlength="200" placeholder="Jenis Pemeriksaan">
                          <span style="color:red; font-size:0.8em">*Wajib</span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Harga</label>
                          <div class="col-sm-8">
                            <input type="number" class="form-control" id="upadate_harga" placeholder="Harga pemeriksaan">
                            <span style="color:red; font-size:0.8em">*Wajib</span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Unit Satuan</label>
                          <div class="col-sm-8">
                                <input type="text" class="form-control" id="upadate_unit">
                                <span style="color:grey; font-size:0.8em">Boleh dikosongkan</span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Nilai Rujukan</label>
                          <div class="col-sm-8">
                            <textarea id="upadate_rujukan" class="form-control"></textarea>
                            <span style="color:grey; font-size:0.8em">Boleh dikosongkan</span>
                          </div>
                      </div>
                      <div class="form-group">
                            <label for="profil" class="col-sm-3 control-label">Profil Pemeriksaan</label>
                            <div class="col-sm-8">
                            <select require name="profil" id="upadate_profil" class="form-control select2">
                                <option>- Pilih Profil Pemeriksaan -</option>
                                <?php
                                include_once 'koneksi.php';
                                $tampil = $koneksi->prepare("SELECT * FROM tb_profil");
                                $tampil->execute();
                                $tampil->setFetchMode(PDO::FETCH_ASSOC);
                                $no = 1;
                                while ($data=$tampil->fetch(PDO::FETCH_ORI_NEXT)) {
                                ?>
                                <option value="<?php echo $data['id_profil'] ?>"><?php echo $data['nama_profil'] ?></option>
                                <?php } ?>
                            </select>
                            </div>
                        </div>
                  </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-warning update-pemeriksaan" data-dismiss="modal">UPDATE</button>
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
                            <label for="" class="col-sm-3 control-label">Stok Keluar</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" id="nilai" placeholder="Stok barang keluar">
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