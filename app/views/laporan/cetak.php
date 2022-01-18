
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cetak laporan</title>
  </head>
  <body>
    
      
      <h1 class="text-center mt-4 mb-3">Hasil laporan</h1>
      
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Tanggal</th>
            <th scope="col">Nama sales</th>
            <th scope="col">Tujuan</th>
            <th scope="col">Nama barang</th>
            <th scope="col">Jumlah barang</th>
            <th scope="col">Harga per barang</th>
            <th scope="col">Barang terjual</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data['cetak'] as $value): ?>
            <!-- html... -->
            <tr>
              <td><?= $value['tanggal_laporan']; ?></td>
              <td><?= $value['nama_sales']; ?></td>
              <td><?= $value['tujuan_sales']; ?></td>
              <td><?= $value['nama_barang']; ?></td>
              <td><?= $value['jumlah_barang']; ?></td>
              <td><?= $value['harga_per_barang']; ?></td>
              <td><?= $value['barang_terjual']; ?></td>
              <td><?= $value['barang_terjual'] * $value['harga_per_barang']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>




