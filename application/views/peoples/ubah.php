<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h3>Form Ubah Data peoples</h3>
                </div>

                <div class="card-body">
                    <form method="post" action="">
                        <input type="hidden" name="id" id="id" value="<?= $peoples['id']; ?>">
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" name="name" value="<?= $peoples['name']; ?>" id="name" class="form-control">
                            <small class="form-text text-danger">
                                <?= form_error('name'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="address">address</label>
                            <input type="text" class="form-control" value="<?= $peoples['address']; ?>" id="address" name="address">
                            <small class="form-text text-danger">
                                <?= form_error('name'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" value="<?= $peoples['email']; ?>" id="email" name="email" placeholder="email@example.com">
                            <small class="form-text text-danger">
                                <?= form_error('name'); ?>
                            </small>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>