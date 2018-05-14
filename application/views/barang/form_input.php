                <div class="">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            EGISTORE<small>Tambah Data Barang</small>
                        </h2>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('barang/post'); ?>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama Barang</label>
                                    <input name="nama_barang" placeholder="nama barang">
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Kategori</label>
                                    <select name="kategori">
                                        <?php foreach ($kategori as $k) {
                                            echo "<option value='$k->kategori_id'>$k->nama_kategori</option>";
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Harga</label>
                                    <input name="harga" placeholder="harga">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('barang','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->