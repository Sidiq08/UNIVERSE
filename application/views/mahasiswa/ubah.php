<div class="container">

<div class="row mt-3">
    <div class="col-md-6">

    <div class="card">
    <div class="card-header">
        <h3>Form Ubah Data Mahasiswa</h3>
    </div>
    
        <div class="card-body">
           <form method="post" action="">
               <input type="hidden" name="id" id="id" value="<?= $mahasiswa['id'];?>">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" value="<?= $mahasiswa['nama'];?>" id="nama" class="form-control">
                    <small class="form-text text-danger">
                        <?= form_error('nama');?>
                    </small>
                </div>
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="text" class="form-control" value="<?= $mahasiswa['nrp'];?>" id="nrp" name = "nrp">
                    <small class="form-text text-danger">
                        <?= form_error('nama');?>
                    </small>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" value="<?= $mahasiswa['email'];?>" id="email" name = "email" placeholder="email@example.com">
                    <small class="form-text text-danger">
                        <?= form_error('nama');?>
                    </small>
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                    <?php foreach($jurusan as $j) :?>
                        <?php if( $j == $mahasiswa['jurusan']) : ?>
                            <option value="<?= $j ?>" selected><?= $j;?></option>
                        <?php else : ?>
                            <option value="<?= $j ?>"><?= $j;?></option>
                        <?php endif;?>
                    <?php endforeach;?>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="ubah" class="btn btn-primary" >Ubah Data</button>
                </div>
             </form>
        </div>
    </div>
    </div>
</div>
</div>