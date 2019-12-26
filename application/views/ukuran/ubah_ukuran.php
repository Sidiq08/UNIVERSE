<div class="row mt-3">
    <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                <h3>Form Ubah Data Ukuran</h3>
            </div>

            <div class="card-body">
                <form method="post" action="">
                    <input type="hidden" id="idUkuran" value="<?= $ukuran['idUkuran'] ?>" name="idUkuran" class="idUkuran">
                    <div class="form-group">
                        <label for="ukuran">Ukuran Baju</label>
                        <input type="text" id="ukuran" value="<?= $ukuran['ukuranBaju'] ?>" name="ukuran" class="form-control ukuran">
                        <small class="form-text text-danger">
                            <?= form_error('ukuran'); ?>
                        </small>
                    </div>
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Keluar</button>
                    <button name="ubah" type="submit" id="btn_update" class="btn btn-outline-dark">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>