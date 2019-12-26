<div class="row mt-3">
    <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                <h3>Form Ubah Data Warna</h3>
            </div>

            <div class="card-body">
                <form method="post" action="">
                    <input type="hidden" id="idWarnaBaju" value="<?= $warna['idWarnaBaju'] ?>" name="idWarnaBaju" class="idWarnaBaju">
                    <div class="form-group">
                        <label for="warnaBaju">Warna Baju</label>
                        <input type="text" id="warnaBaju" value="<?= $warna['warnaBaju'] ?>" name="warnaBaju" class="form-control warnaBaju">
                        <small class="form-text text-danger">
                            <?= form_error('warnaBaju'); ?>
                        </small>
                    </div>
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Keluar</button>
                    <button name="ubah" type="submit" id="btn_update" class="btn btn-outline-dark">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>