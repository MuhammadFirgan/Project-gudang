
<h3 class="mb-3 text-center">Tabel laporan</h3>

<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalLapor">Buat aporan</button>

<div class="row mb-3">
  <div class="col-md-5">
    <a href="<?= BASEURL; ?>/laporan/excel" class="badge bg-success text-decoration-none">Cetak laporan</a>
  </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Tanggal</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data['laporan'] as $lapor): ?>
    <tr>
        <!-- html... -->
        <td><?= $lapor['tanggal_laporan']; ?></td>
        <td><a href="<?= BASEURL; ?>/laporan/detail/<?= $lapor['id_laporan']; ?>" class="badge bg-primary text-decoration-none">Detail</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<div class="modal fade" id="modalLapor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Laporan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
        <form action="<?= BASEURL; ?>/laporan/getLapor" method="post">
          <label for="tanggal" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="tanggal" name="tanggal">
        </div>
        <div class="mb-3">
          <label for="namaSales" class="form-label">Nama sales</label>
          <input type="text" class="form-control" id="namaSales" name="namaSales">
        </div>
        <div class="mb-3">
          <label for="tujuan" class="form-label">Tujuan</label>
          <input type="text" class="form-control" id="tujuan" name="tujuan">
        </div>
        <div class="mb-3">
          <label for="namaBarang" class="form-label">Nama barang</label>
          <input type="text" class="form-control" id="namaBarang" name="namaBarang">
        </div>
        <div class="mb-3">
          <label for="jumlahBarang" class="form-label">Jumlah barang</label>
          <input type="number" class="form-control" id="jumlahBarang" name="jumlahBarang">
        </div>
        <div class="mb-3">
          <label for="jumlahBarangTerjual" class="form-label">Jumlah barang terjual</label>
          <input type="number" class="form-control" id="jumlahBarangTerjual" name="terjual">
        </div>
        <div class="mb-3">
          <label for="hargaPerBarang" class="form-label">Harga per barang (Rp.)</label>
          <input type="number" class="form-control" id="hargaPerBarang" name="hargaPerBarang">
        </div>
        
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Lapor</button>
        </form>
      </div>
    </div>
  </div>
</div>
  