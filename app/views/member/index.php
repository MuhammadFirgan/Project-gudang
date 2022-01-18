  
  <div class="row justify-content-center">
    <div class="col-md-9">
      <h3 class="my-4 text-center">Daftar Sales</h3>
      <form action="<?= BASEURL; ?>/member/cariSales" method="post">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Cari sales..." name="keyword" id="keyword" autocomplete="off">
        <button class="btn btn-outline-secondary" type="submit" id="btnCari">Cari</button>
        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tambahSales">Tambah</button>
      </div>
      </form>
      
      
      
      <ul class="list-group">
        
        <?php foreach ($data['sales'] as $sal): ?>
          <li class="list-group-item">
            <?= $sal['nama_sales']; ?>
            <div class="float-end">
              <a href="<?= BASEURL; ?>/member/detail/<?= $sal['id_sales']; ?>" class="badge bg-primary text-decoration-none">Detail</a>
            </div>
          </li>

        <?php endforeach; ?>
      </ul>
    </div>
  </div>
  
  
  <div class="modal fade" id="tambahSales" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah data sales</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <form action="<?= BASEURL; ?>/member/tambah" method="post">
            <label for="namaSalesBaru" class="form-label">Nama sales</label>
            <input type="text" class="form-control" id="namaSalesBaru" name="namaSalesBaru">
          </div>
          <div class="mb-3">
            <label for="asalSalesBaru" class="form-label">Asal sales</label>
            <input type="text" class="form-control" id="asalSalesBaru" name="asalSalesBaru">
          </div>
          <div class="mb-3">
            <label for="tujuanSalesBaru" class="form-label">Tujuan sales</label>
            <input type="text" class="form-control" id="tujuanSalesBaru" name="t">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
          </form>
        </div>
      </div>
    </div>
  </div>
