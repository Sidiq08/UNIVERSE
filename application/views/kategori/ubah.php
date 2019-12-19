<div class="row mt-3">
    <div class="col-md-12">

    <div class="card">
    <div class="card-header">
        <h3>Form Ubah Data Kategori</h3>
    </div>
    
        <div class="card-body">                
        <form method="post" action="">
            
                <input type="hidden" value="<?= $kategori['idKategoriBaju'] ?>" name="idKategoriBaju" class="idKategoriBaju" value="">
                <div class="form-group">
                <div class="form-group">
                  <label for="idJenisKelamin">Jenis Kelamin</label>
                  <select class="form-control custom-select" id="idJenisKelamin" name="idJenisKelamin">
                    <?php if ($kategori['idJenisKelamin'] == 1) :?>
                        <option value="1" selected>Laki- Laki</option>
                        <option value="2" >Perempuan</option>
                        <?php else : ?>
                            <option value="1" >Laki- Laki</option>
                        <option value="2" selected>Perempuan</option>
                    <?php endif;?>
                  </select>
                  <small class="form-text text-danger">
                    <?= form_error('idJenisKelamin'); ?>
                  </small>
                </div>
                <div class="form-group">
                  <label for="kategoriBaju">Kategori Pakaian</label>
                  <input type="text" value="<?= $kategori['kategoriBaju'] ?>" id="kategoriBaju" name="kategoriBaju" class="form-control">
                  <small class="form-text text-danger">
                    <?= form_error('kategoriBaju'); ?>
                  </small>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Keluar</button>
                <button type="submit" name="ubah" class="btn btn-outline-dark">Ubah Data</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
        </div>
    </div>
    </div>