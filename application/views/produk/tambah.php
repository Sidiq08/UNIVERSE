<div class="row mt-3">
    <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                <h3>Form Ubah Data produk</h3>
            </div>

            <div class="card-body">
                <form method="post" action="">
                    <input type="hidden" id="idBaju" value="" name="idBaju" class="idBaju">
                    <div class="form-group">
                        <label for="namaBaju">namaBaju</label>
                        <input type="text" id="namaBaju" value="" name="namaBaju" class="form-control namaBaju">
                        <small class="form-text text-danger">
                            <?= form_error('namaBaju'); ?>
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="idUkuran">idUkuran</label>
                        <select class="form-control custom-select idUkuran" name="idUkuran">
                            <option selected>Select one</option>

                            <?php foreach ($ukuran as $u) : ?>
                                <option value="<?= $u['idUkuran'] ?>"><?= $u['ukuranBaju'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <small class="form-text text-danger">
                            <?= form_error('idUkuran'); ?>
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="idWarna">idWarna</label>
                        <select class="form-control custom-select idWarna" name="idWarna">
                            <option selected>Select one</option>
                            <?php foreach ($warna as $w) : ?>
                                <option value="<?= $w['idWarnaBaju'] ?>"><?= $w['warnaBaju'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <small class="form-text text-danger">
                            <?= form_error('idWarna'); ?>
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="idKategori">idKategori</label>
                        <select class="form-control custom-select idKategori" name="idKategori">
                            <option selected>Select one</option>
                            <?php foreach ($kategori as $k) : ?>
                                <option value="<?= $k['idKategoriBaju'] ?>"><?= $k['kategoriBaju'] ?> ~ <?= $k['jenisKelamin'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <small class="form-text text-danger">
                            <?= form_error('idKategori'); ?>
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="hargaBaju">hargaBaju</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="hargaBaju">IDR.</span>
                            </div>
                            <input type="text" id="hargaBaju" value="" name="hargaBaju" class="form-control hargaBaju">
                            <small class="form-text text-danger">
                                <?= form_error('hargaBaju'); ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="stokBaju">stokBaju</label>
                        <input type="text" id="stokBaju" value="" name="stokBaju" class="form-control stokBaju">
                        <small class="form-text text-danger">
                            <?= form_error('stokBaju'); ?>
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="gambarBaju">gambarBaju</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input gambarBaju" name="gambarBaju" id="gambarBaju">
                                <label class="custom-file-label" for="gambarBaju">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                            <small class="form-text text-danger">
                                <?= form_error('gambarBaju'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="deskripsiBaju">deskripsiBaju</label>
                            <textarea class="form-control deskripsiBaju" rows="3" id="deskripsiBaju" value="" name="deskripsiBaju"></textarea>
                            <small class="form-text text-danger">
                                <?= form_error('deskripsiBaju'); ?>
                            </small>
                        </div>
                        <a href="<?= base_url(); ?>produk"></a><button type="button" class="btn btn-danger ">Keluar</button></a>
                        <button name="tambah" type="submit" id="btn_tambah" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>