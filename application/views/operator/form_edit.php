                   <div class="">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            EGISTORE<small>Edit Data Operator</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('operator/edit'); ?>
                                <input type="hidden" value="<?php echo $record['operator_id']?>" name="id">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama Lengkap</label>
                                    <input type="text" name="nama" value="<?php echo $record['nama_lengkap']?>">
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Username</label>
                                    <input type="text" name="username" value="<?php echo $record['username']?>">
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Password</label>
                                    <input type="password" name="password" placeholder="password">
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label">Gambar Profil :  </label>
                                    <input id="foto" type="file" name="foto">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> | 
                                <?php echo anchor('operator','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->