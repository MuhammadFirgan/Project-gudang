
    <h1 class="text-center">Daftar Barang</h1>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form action="<?= BASEURL; ?>/home/cariBarang" method="post">
        <div class="input-group mt-4 mb-3">
          <input type="text" class="form-control" placeholder="Cari barang.." name="keywordBarang" id="keywordBarang" autocomplete="off">
          <button class="btn btn-outline-secondary" type="submit" id="cariBarang">Cari</button>
          <button class="btn btn-primary tombolTambah" data-bs-toggle="modal" data-bs-target="#munculModal">Tambah</button>
        </div>
        </form>
      </div>
    </div>
    <?php Flasher::flash(); ?>
    <table class="table mt-4">
      <thead>
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Harga</th>
          <th scope="col">Stock</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          
        
        ?>
        <?php foreach ($data['barang'] as $brg): ?>
          <tr>
            <td><?= $brg['nama_barang']; ?></td>
            <td><?= $brg['harga_barang']; ?></td>
            <td><?= $brg['stock_barang']; ?></td>
            <td><a href="" data-id="<?= $brg['id_barang']; ?>" data-bs-toggle="modal" data-bs-target="#munculModal" class="badge bg-success text-decoration-none tombolAmbil">Ambil</a>
            <td><a href="<?= BASEURL; ?>/home/getRestock/<?= $brg['id_barang']; ?>" onclick="return confirm('yakin?')"class="badge bg-primary text-decoration-none btnRestock" 
            >Restock</a></td>

          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    
    <!--modal ambil-->
    
    <div class="modal fade" id="munculModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ambil barang</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <!-- html... -->
            <form action="<?= BASEURL; ?>/home/getJual" method="post">
            <input type="hidden" name="id" id="id" value="">
            <div class="mb-3 nameBarang">
              <label for="nama" class="form-label labelNama">Masukkan nama barang</label>
              <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
            </div>
            <div class="mb-3">
              <label for="jumlah" class="form-label labelAngka">Masukkan jumlah barang</label>
              <input type="number" class="form-control" id="jumlah" name="angka" autocomplete="off">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Ambil</button>
            </form>
            
          </div>
        </div>
      </div>
    </div>
    