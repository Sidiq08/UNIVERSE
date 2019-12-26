const flashData = $('.flash-data').data('flashdata');

if (flashData) {
Swal.fire({
      title: 'Produk ',
      text: 'Berhasil ' + flashData,
      type: 'success'
});
}