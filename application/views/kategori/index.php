<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
  <div class="row">
    <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-info">
              <span class="info-box-icon"><i class="fas fa-mars"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Laki - Laki</span>
                <span class="info-box-number"><?=$jeniskelaminL?></span>
              </div> <!-- /.info-box-content -->
            </div> <!-- /.info-box -->
          </div> <!-- /.info-col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-danger">
              <span class="info-box-icon"><i class="fas fa-venus"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Perempuan</span>
                <span class="info-box-number"><?=$jeniskelaminP?></span>
              </div> <!-- /.info-box-content -->
            </div> <!-- /.info-box -->
          </div> <!-- /.info-col -->
         </div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Kelola Kategori</h3>
        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="row">
                <div class="col-6 m-2">
                  <!-- <a href="<?= base_url();?>kategori/tambah" class="btn btn-info btn-flat">Tambah Data</a> -->
                  <section class="content">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="card card-primary">
                          <div class="card-header">
                            <h3 class="card-title">Tambah Kategori</h3>
                            
                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                              </div>
                            </div>
                            <div class="card-body">
                          <form method="post" action="">
                            <div class="form-group">
                              <label for="idJenisKelamin">Jenis Kelamin</label>
                              <select class="form-control custom-select" id="idJenisKelamin" name="idJenisKelamin" value="<?= set_value('idJenisKelamin');?>">
                                <option selected disabled>Select one</option>
                                <option value="1">Laki - Laki</option>
                                <option value="2">Perempuan</option>
                              </select>
                              <small class="form-text text-danger">
                                  <?= form_error('idJenisKelamin');?>
                              </small>
                            </div>
                            <div class="form-group">
                              <label for="kategoriBaju">Kategori Pakaian</label>
                              <input type="text" id="kategoriBaju" name="kategoriBaju" class="form-control" value="<?= set_value('kategoriBaju');?>">
                              <small class="form-text text-danger">
                                  <?= form_error('kategoriBaju');?>
                              </small>
                            </div>
                            <div class="row">
                              <div class="col-12">
                                <!-- <a class="btn btn-success float-right">Tambah Data</a> -->
                                <!-- <input type="submit" class="btn btn-success btn-flat float-right"> -->
                                <button type="submit" name="tambah" class="btn btn-success btn-flat float-right swalDefaultSuccess" >Tambah Data</button>
                              </div>
                            </div>
                            </form>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                  </section>
                </div>
              </div>
                
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Jenis Kelamin</th>
                      <th>Kategori</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if(empty($kategori)) :?>
                    <tr>
                        <td colspan="4">
                            <div class="alert alert-danger" role="alert">
                                data not found!
                            </div>
                        </td>
                    </tr>
                    <?php endif;?>
                      <?php foreach ($kategori as $k):?>
                      <tr>
                          <td><?= $k['idKategoriBaju'];?></td>
                          <td><?= $k['jenisKelamin'];?></td>
                          <td><?= $k['kategoriBaju'];?></td>
                          <td>
                              <a href="<?= base_url();?>kategori/ubah/<?= $k['idKategoriBaju'];?>" class="btn btn-sm btn-flat btn-success">Ubah Data</a>
                              <!-- <a href="<?= base_url();?>kategori/ubah/<?= $k['idKategoriBaju'];?>" class="btn btn-sm btn-flat btn-success" data-toggle="modal" data-target="#modal-default">edit</a> -->
                              <a href="<?= base_url();?>kategori/hapus/<?= $k['idKategoriBaju'];?>" class="btn btn-sm btn-flat btn-danger tombol-hapus-kategori" >Hapus Data</a>
                          </td>
                      </tr>
                      <?php endforeach;?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
<!-- Ubah Data -->
        <!-- <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content bg-default">
            <div class="modal-header">
              <h4 class="modal-title" >
                
              Form Ubah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <div class="container">
                <div class="card">
                <div class="card-header">
                    <h3>Form Ubah Data Kategori</h3>
                </div>
                
                    <div class="card-body">
                      <form method="post" action="">
                          <input type="hidden" name="idKategoriBaju" id="idKategoriBaju" value="<?= $kategori['idKategoriBaju'];?>">
                          <div class="form-group">
                              <label for="idJenisKelamin">Jenis Kelamin</label>
                              <select class="form-control custom-select" id="idJenisKelamin" name="idJenisKelamin" value="<?= set_value('idJenisKelamin');?>">
                                <option selected disabled>Select one</option>
                                <option value="1">Pria</option>
                                <option value="2">Wanita</option>
                              </select>
                              <small class="form-text text-danger">
                                  <?= form_error('idJenisKelamin');?>
                              </small>
                            </div>
                            <div class="form-group">
                              <label for="kategoriBaju">Kategori Pakaian</label>
                              <input type="text" id="kategoriBaju" name="kategoriBaju" class="form-control" value="<?= set_value('kategoriBaju');?>">
                              <small class="form-text text-danger">
                                  <?= form_error('kategoriBaju');?>
                              </small>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="ubah" class="btn btn-primary" >Ubah Data</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Keluar</button>
              <button type="submit" class="btn btn-outline-dark tombol-hapus-kategori">Ya, Saya Yakin.</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div> -->
      <!-- /.modal -->
      <!-- Akhir Ubah -->