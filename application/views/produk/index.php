<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<div class="row">
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-info">
            <span class="info-box-icon"><i class="fas fa-mars"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">warna</span>
                <span class="info-box-number"><?= $jumlahWarna ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.info-col -->
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-danger">
            <span class="info-box-icon"><i class="fas fa-venus"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Kategori</span>
                <span class="info-box-number"><?= $jumlahKategori ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.info-col -->
</div>
<hr>
<div class="row">
    <div class="col-12">
        <h1 class="card-title">Kelola Kategori</h1>
    </div>
</div>
<hr>
<div class="row mt-6 m-2">
    <div class="col-md-12">
        <a href="<?= base_url(); ?>produk/tambah" class="btn btn-lg btn-success btn-flat">Tambah Data Produk</a>
    </div>
</div>

<!-- /.card-header -->
<div class="row">
    <div class="col-10">
        <div class="card-body table-responsive p-0">
            <table class="table table-hover" id='tabelproduk'>
                <thead>
                    <tr>
                        <th>idBaju</th>
                        <th>gambarBaju</th>
                        <th>namaBaju</th>
                        <th>hargaBaju</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($produk)) : ?>
                        <tr>
                            <td colspan="4">
                                <div class="alert alert-danger" role="alert">
                                    data not found!
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php foreach ($produk as $p) : ?>
                        <tr>
                            <td><?= $p['idBaju']; ?></td>
                            <td><img src="<?= base_url(); ?>assets/img/model/<?= $p['gambarBaju']; ?>" class="profile-user-img img-fluid img-circle"></td>
                            <td><?= $p['namaBaju']; ?></td>
                            <td><?= $p['hargaBaju']; ?></td>
                            <td>
                                <!-- <a href="<//?= base_url(); ?>kategori/ubah/<//?= $k['idBaju']; ?>" class="btn btn-sm btn-flat btn-info">Ubah Data</a> -->
                                <!-- <a href="<//?= base_url(); ?>kategori/ubah/<//?= $k['idBaju']; ?>" class="btn btn-sm btn-flat btn-success" data-toggle="modal" data-target="#modal-default">edit</a> -->
                                <a href="<?= base_url(); ?>produk/ubah/<?= $p['idBaju']; ?>" class=" btn btn-sm btn-flat btn-primary btn-edit">Edit Data</a>
                                <a href=" <?= base_url(); ?>produk/hapus/<?= $p['idBaju']; ?>" class="btn btn-sm btn-flat btn-danger hapus-kategori">Hapus Data</a>
                                <a href="<?= base_url(); ?>produk/detail/<?= $p['idBaju']; ?>" class="btn btn-sm btn-flat btn-warning">Detail Data</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
</div>
</div>
<!-- /.row -->

<script>
    $(function() {

        //Get Data Update

        $("#tabelproduk").dataTable();


        // $('#modal-default').on('show.bs.modal', function(event) {

        //   var button = $(event.relatedTarget) // Button that triggered the modal
        //   var idkategori = button.data('idkategori') // Extract info from data-* attributes
        //   var kategori = button.data('kategori') // Extract info from data-* attributes
        //   var idjeniskelamin = button.data('idjeniskelamin') // Extract info from data-* attributes
        //   // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        //   // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

        //   // console.log(recipient);

        //   var modal = $(this)
        //   // modal.find('.idKategori').text('New message to ' + recipient)
        //   modal.find('.idBaju').val(idkategori)
        //   modal.find('.kategoriBaju').val(kategori)
        //   modal.find('.idJenisKelamin').val(idjeniskelamin)

        //   // $('.idJenisKelamin > option').each(function (i,v){
        //   //   if (idjeniskelamin == v.value) {
        //   //     $(this).attr('selected',true)
        //   //   }else {
        //   //     $(this).attr('selected',false)
        //   //   }
        //   // })
        // })  
    });

    $(function() {
        const flashData = $('.flash-data').data('flashdata');

        if (flashData) {
            Swal.fire({
                title: 'Data Kategori',
                text: 'Berhasil ' + flashData,
                type: 'success'
            });
        }

        $('.hapus-kategori').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href');

            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Items akan dihapus!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus Data!'
            }).then((result) => {
                if (result.value) {
                    Swal.fire()
                    document.location.href = href;
                }
            })
        });

    });
</script>

<!-- <script>
  $.ajax
</script> -->