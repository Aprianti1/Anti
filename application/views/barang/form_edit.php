                <div class="">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            EGISTORE<small>Edit Data Barang</small>
                        </h2>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('barang/edit'); ?>
                                <input type="hidden" name="id" value="<?php echo $record['barang_id']?>">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama Barang</label>
                                    <input name="nama_barang" value="<?php echo $record['nama_barang']?>">
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Kategori</label>
                                    <select name="kategori">
                                        <?php foreach ($kategori as $k) {
                                            echo "<option value='$k->kategori_id'";
                                            echo $record['kategori_id']==$k->kategori_id?'selected':'';
                                            echo">$k->nama_kategori</option>";
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Harga</label>
                                    <input name="harga" value="<?php echo $record['harga']?>">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> | 
                                <?php echo anchor('barang','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->