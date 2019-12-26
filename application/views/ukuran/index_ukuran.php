<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<div class="row">
  <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box bg-info">
      <span class="info-box-icon"><i class="fas fa-palette"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Total Ukuran</span>
        <span class="info-box-number"><?= $JumlahUkuran ?></span>
      </div> <!-- /.info-box-content -->
    </div> <!-- /.info-box -->
  </div> <!-- /.info-col -->
</div>
<hr>
<div class="row">
  <div class="col-12">
    <h1 class="card-title">Kelola Ukuran</h1>
  </div>
</div>
<hr>
<div class="row mt-6 m-2">
  <div class="col-md-12">
    <a href="<?= base_url(); ?>Ukuran/tambah" class="btn btn-lg btn-success btn-flat" data-toggle="modal" data-target="#modal-add">Tambah Data Ukuran</a>
  </div>
</div>

<!-- /.card-header -->
<div class="row">
  <div class="col-10">
    <div class="card-body table-responsive p-0">
      <table class="table table-hover" id='tabelwarna'>
        <thead>
          <tr>
            <th>ID</th>
            <th>ukuran</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if (empty($ukuran)) : ?>
            <tr>
              <td colspan="4">
                <div class="alert alert-danger" role="alert">
                  data not found!
                </div>
              </td>
            </tr>
          <?php endif; ?>
          <?php foreach ($ukuran as $k) : ?>
            <tr>
              <td><?= $k['idUkuran']; ?></td>
              <td><?= $k['ukuranBaju']; ?></td>
              <td>
                <!-- <a href="<//?= base_url(); ?>kategori/ubah/<//?= $k['idKategoriBaju']; ?>" class="btn btn-sm btn-flat btn-info">Ubah Data</a> -->
                <!-- <a href="<//?= base_url(); ?>kategori/ubah/<//?= $k['idKategoriBaju']; ?>" class="btn btn-sm btn-flat btn-success" data-toggle="modal" data-target="#modal-default">edit</a> -->
                <!-- <button type="button" class="btn btn-sm btn-flat btn-primary btn-edit" id="<?= $k['idWarnaBaju']; ?>" data-toggle="modal" data-target="#modal-default">Edit Data</button> -->
                <a href="<?= base_url(); ?>Ukuran/ubah/<?= $k['idUkuran']; ?>" class="btn btn-sm btn-flat btn-info">Ubah Data</a>
                <a href="<?= base_url(); ?>Ukuran/hapus/<?= $k['idUkuran']; ?>" class="btn btn-sm btn-flat btn-danger hapus-Warna">Hapus Data</a>
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

<!-- Tambah Data -->
<div class="modal fade" id="modal-add">
  <div class="modal-dialog">
    <div class="modal-content bg-default">
      <div class="modal-header">
        <h4 class="modal-title">

          Form Tambah Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="card">
            <div class="card-header">
              <h3>Form Tambah Data Warna <span class="idWarna"></span></h3>
            </div>

            <div class="card-body">
              <form method="post" action="">
                <input type="hidden" name="idWarnaBaju" class="idWarnaBaju">
                <div class="form-group">
                  <label for="warnaBaju">Kategori Pakaian</label>
                  <input type="text" name="warnaBaju" class="form-control warnaBaju">
                  <small class="form-text text-danger">
                    <?= form_error('warnaBaju'); ?>
                  </small>
                </div>
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Keluar</button>
                <button name="ubah" type="submit" id="btn_tambah" class="btn btn-outline-dark">Tambah Data.</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
      </div>
    </div>
    </form> -->
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog --> -->
</div>
<!-- /.modal -->
<!-- Akhir Tambah -->

<script>
  $(function() {

    //Get Data Update
    // $(".btn-edit").click(function(e) {
    //   e.preventDefault();
    //   var id = $(this).attr('id');
    //   $.ajax({
    //     type: "GET",
    //     url: "<?= site_url('Warna/getData') ?>",
    //     data: "id=" + id,
    //     dataType: 'JSON',
    //     success: function(data) {
    //       $('.idWarnaBaju').val(data.list.idWarnaBaju);

    //       $('.warnaBaju').val(data.list.warnaBaju);

    //     }
    //   })
    // })

    // //Update Barang
    // $('#btn_update').on('click', function() {
    //   var idWarnaBaju = $('#idWarnaBaju').val();
    //   var WarnaBaju = $('#WarnaBaju').val();
    //   $.ajax({
    //     type: "POST",
    //     url: "<?php echo site_url('Warna/ubah') ?>",
    //     dataType: "JSON",
    //     data: {
    //       idWarnaBaju: idWarnaBaju,
    //       WarnaBaju: WarnaBaju
    //     },
    //     success: function(data) {
    //       $('[name="idWarnaBaju"]').val(data.idWarnaBaju);
    //       $('[name="WarnaBaju"]').val(data.WarnaBaju);
    // $('#modal-default').modal('hide'); //belum jalan
    // show_kategori(); //gajalan
    // if (data.success == true) { // if true (1)
    //   setTimeout(function() { // wait for 5 secs(2)
    //     location.reload(); // then reload the page.(3)
    //   }, 2000);
    // }
    // location.reload();
    // }
    // });
    // return false;
    // });

    $("#tabelkategori").dataTable();


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
    //   modal.find('.idKategoriBaju').val(idkategori)
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
        title: 'Data Warna',
        text: 'Berhasil ' + flashData,
        type: 'success'
      });
    }

    $('.hapus-Warna').on('click', function(e) {
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