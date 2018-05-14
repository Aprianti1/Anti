                   <div class="">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            EGISTORE<small>Tambah Data Operator</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open_multipart('operator/post'); ?>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama Lengkap</label>
                                    <input type="text" name="nama" placeholder="nama lengkap">
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Username</label>
                                    <input type="text" name="username" placeholder="username">
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Password</label>
                                    <input type="password" name="password" placeholder="password">
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Gambar Profil :  </label>
                                    <input id="file-input" type="file" name="input_gambar">
                                </div>

                                <button type="submit" name="upload" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('operator','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->