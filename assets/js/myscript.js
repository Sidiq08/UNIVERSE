const flashData = $('.flash-data').data('flashdata');

if (flashData){
    Swal.fire({
        title : 'Data Mahasiswa',
        text : 'Berhasil ' + flashData,
        type : 'success'
    });
}
const flashData2 = $('.flash-data2').data('flashdata');
if (flashData2){
  Swal.fire({
      title : 'Data Peoples',
      text : 'Berhasil ' + flashData2,
      type : 'success'
  });
}

$('.tombol-hapus').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "data mahasiswa akan dihapus!",
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

$('.tombol-hapus-peoples').on('click', function(e){
  e.preventDefault();
  const href = $(this).attr('href');

  Swal.fire({
      title: 'Apakah anda yakin?',
      text: "data Peoples akan dihapus!",
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