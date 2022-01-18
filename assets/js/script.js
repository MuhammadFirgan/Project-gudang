$(function() {
  $('.tombolTambah').on('click', function() {
    $('.modal-title').html('Tambah Barang');
    $('.labelAngka').html('Masukkan harga barang');
    $('.modal-footer button[type=submit]').html('Tambah')
    $('.modal-body form').attr('action', 'http://localhost:8000/home/tambah');
  });
  
  $('.tombolAmbil').on('click', function() {
    $('.modal-title').html('Ambil Barang');
    $('.labelAngka').html('Masukkan jumlah barang');
    $('.modal-footer button[type=submit]').html('Ambil');
    $('.nameBarang').hide();
    const id = $(this).data('id');
    $('#id').val(id);
  });
  
  
  
  
});