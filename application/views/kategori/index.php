<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<div class="row">
  <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box bg-info">
      <span class="info-box-icon"><i class="fas fa-mars"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Laki - Laki</span>
        <span class="info-box-number"><?= $jeniskelaminL ?></span>
      </div> <!-- /.info-box-content -->
    </div> <!-- /.info-box -->
  </div> <!-- /.info-col -->
  <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box bg-danger">
      <span class="info-box-icon"><i class="fas fa-venus"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Perempuan</span>
        <span class="info-box-number"><?= $jeniskelaminP ?></span>
      </div> <!-- /.info-box-content -->
    </div> <!-- /.info-box -->
  </div> <!-- /.info-col -->
</div>
<hr>
<div class="row">
  <div class="col-12">
        <h1 class="card-title">Kelola Kategori</h1>
  </div>
</div>
    <hr>
    <div class="row mt-3 m-2">
            <div class="col-md-12">
                <a href="<?= base_url();?>kategori/tambah" class="btn btn-lg btn-success btn-flat">Tambah Data Kategori</a>
            </div>
    </div>

      <!-- /.card-header -->
      <div class="row">
        <div class="col-10">
          <div class="card-body table-responsive p-0">
            <table class="table table-hover" id='tabelkategori'>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Jenis Kelamin</th>
                  <th>Kategori</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php if (empty($kategori)) : ?>
                <tr>
                  <td colspan="4">
                    <div class="alert alert-danger" role="alert">
                      data not found!
                    </div>
                  </td>
                </tr>
                <?php endif; ?>
                <?php foreach ($kategori as $k) : ?>
                  <tr>
                    <td><?= $k['idKategoriBaju']; ?></td>
                    <td><?= $k['jenisKelamin']; ?></td>
                    <td><?= $k['kategoriBaju']; ?></td>
                    <td>
                      <a href="<?= base_url(); ?>kategori/ubah/<?= $k['idKategoriBaju']; ?>" class="btn btn-sm btn-flat btn-info">Ubah Data</a>
                      <!-- <a href="<?= base_url(); ?>kategori/ubah/<//?= $k['idKategoriBaju']; ?>" class="btn btn-sm btn-flat btn-success" data-toggle="modal" data-target="#modal-default">edit</a> -->
                      <!-- <button type="button" class="btn btn-flat btn-primary btn-edit" id="<//?= $k['idKategoriBaju']; ?>" data-toggle="modal" data-target="#modal-default">Edit Data</button> -->
                      <a href="<?= base_url(); ?>kategori/hapus/<?= $k['idKategoriBaju']; ?>" class="btn btn-sm btn-flat btn-danger">Hapus Data</a>
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
<!-- Ubah Data -->
<!-- <div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content bg-default">
      <div class="modal-header">
        <h4 class="modal-title">

          Form Ubah Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="card">
            <div class="card-header">
              <h3>Form Ubah Data Kategori <span class="idKategori"></span></h3>
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
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Keluar</button>
          <button name="ubah" id="btn_update" class="btn btn-outline-dark">Ya, Saya Yakin.</button>
        </div>
      </div>
    </form> -->
    <!-- /.modal-content -->
<!-- </div>/.modal-dialog -->
<!-- </div>/.modal -->
<!-- Akhir Ubah -->

<script>
  $(function() {
    // $(".btn-edit").click(function(e){   
    //   e.preventDefault();
    //   var id = $(this).attr('id');
    //   $.ajax({
    //     type: "GET",
    //     url: "<?= site_url('Kategori/getData') ?>",
    //     data: "id="+id,
    //     dataType:'JSON',
    //     success:function(data){
    //       if (data.status == 202) {
    //         $('.idJenisKelamin > option').each(function (i,v){
    //           if (data.list.idJenisKelamin == v.value) {
    //             $(this).attr('selected',true)
    //           }else {
    //             $(this).attr('selected',false)
    //           }
    //         })
            
    //         $('.kategoriBaju').val(data.list.kategoriBaju);  
    //       }
    //     }
    //   })
    // })

    // //Update Barang
    // $('#btn_update').on('click',function(){
    //         var idJenisKelamin=$('#idJenisKelamin').val();
    //         var kategoriBaju=$('#kategoriBaju').val();
    //         $.ajax({
    //             type : "POST",
    //             url  : "<?php echo site_url('kategori/ubahDataKategori')?>",
    //             dataType : "JSON",
    //             data : {idJenisKelamin:idJenisKelamin , kategoriBaju:kategoriBaju},
    //             success: function(data){
    //                 $('[name="idJenisKelamin"]').val(data.idJenisKelamin);
    //                 $('[name="kategoriBaju"]').val(data.kategoriBaju);
    //                 $('#modal-default').modal('hide');
    //             }
    //         });
    //         return false;
    //     });
    $("#tabelkategori").DataTable();
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
</script>

<!-- <script>
  $.ajax
</script> -->