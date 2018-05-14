                <div class="">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            EGISTORE<small>Tambah Data Katagori</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('kategori/post'); ?>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama Kategori</label>
                                    <input type="text" name="kategori" placeholder="kategori">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('kategori','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->