<div class="row mt-3">
    <div class="col-md-12">

    <div class="card">
    <div class="card-header">
        <h3>Form Tambah Data Kategori</h3>
    </div>
    
        <div class="card-body">                
        <form method="post" action="">
                <input type="hidden" name="idKategoriBaju" class="idKategoriBaju" value="">
                <div class="form-group">
                  <label for="idJenisKelamin">Jenis Kelamin</label>
                  <select class="form-control custom-select idJenisKelamin" name="idJenisKelamin">
                    <option selected disabled>Select one</option>
                    <option value="1">Laki- Laki</option>
                    <option value="2">Perempuan</option>
                  </select>
                  <small class="form-text text-danger">
                    <?= form_error('idJenisKelamin'); ?>
                  </small>
                </div>
                <div class="form-group">
                  <label for="kategoriBaju">Kategori Pakaian</label>
                  <input type="text" name="kategoriBaju" class="form-control kategoriBaju">
                  <small class="form-text text-danger">
                    <?= form_error('kategoriBaju'); ?>
                  </small>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Keluar</button>
                <button type="submit" name="tambah" class="btn btn-outline-dark">Tambah Data</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
        </div>
    </div>
    </div>