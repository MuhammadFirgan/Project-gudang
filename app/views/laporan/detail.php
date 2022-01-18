
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Tanggal : <?= $data['detail']['tanggal_laporan']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Nama sales : <?= $data['detail']['nama_sales']; ?></h6>
    <p class="card-text">Tujuan : <?= $data['detail']['tujuan_sales']; ?></p>
    <p class="card-text">Nama barang : <?= $data['detail']['nama_barang']; ?></p>
    <p class="card-text">Jumlah barang : <?= $data['detail']['jumlah_barang']; ?></p>
    <p class="card-text">Harga per barang : <?= $data['detail']['harga_per_barang']; ?></p>
    <p class="card-text">Barang terjual : <?= $data['detail']['barang_terjual']; ?></p>
    <p class="card-text">Total : <?= $data['detail']['harga_per_barang'] * $data['detail']['jumlah_barang']; ?></p>
    <a href="<?= BASEURL; ?>/laporan" class="card-link">Kembali</a>
  </div>
</div>