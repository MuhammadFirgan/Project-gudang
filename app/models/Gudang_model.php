<?php 

class Gudang_model {
  private $db_sales = DB_SALES;
  private $db_barang = DB_BARANG;
  private $db_laporan = DB_LAPORAN;
  private $db;
  
  public function __construct() {
    $this->db = new Database;
  }
  
  
  public function getAllData($dbTable) {
    $this->db->query('SELECT * FROM ' . $dbTable);
    return $this->db->resultSet();
  }
  
  public function getDataById($dbTable,$id) {
    $this->db->query('SELECT * FROM ' . $dbTable . ' WHERE id_sales= :id_sales');
    $this->db->bind('id_sales', $id);
    return $this->db->single();
  }
  
  public function restock($id) {
    
    $query = 'UPDATE barang SET 
                stock_barang= :stock
              WHERE id_barang= :id_barang';
    $this->db->query($query);
    $this->db->bind('stock', '100');
    $this->db->bind('id_barang', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }
  
  public function tambahBarang($data) {
    $query = "INSERT INTO barang 
                VALUES
              ('', :nama_barang, :harga_barang, :stock_barang)";
    $this->db->query($query);
    $this->db->bind('nama_barang', $data['nama']);
    $this->db->bind('harga_barang', $data['angka']);
    $this->db->bind('stock_barang', '100');
    $this->db->execute();
    return $this->db->rowCount();
  }
  
  public function jual($data) {
    $query = 'UPDATE barang SET 
                stock_barang= stock_barang - :angka
              WHERE id_barang= :id_barang';
    $this->db->query($query);
    $this->db->bind('angka', $data['angka']);
    $this->db->bind('id_barang', $data['id']);
    $this->db->execute();
    return $this->db->rowCount();
  }
  
  public function laporan($data) {
    $harga = $data['hargaPerBarang'];
    $terjual = $data['terjual'];
    
    $query = "INSERT INTO laporan
                VALUES
              ('', :tanggal, :nama_sales, :tujuan_sales, :jumlah_barang, :harga_per_barang, :nama_barang, :barang_terjual)";
    $this->db->query($query);
    $this->db->bind('tanggal', $data['tanggal']);
    $this->db->bind('nama_sales', $data['namaSales']);
    $this->db->bind('tujuan_sales', $data['tujuan']);
    $this->db->bind('jumlah_barang', $data['jumlahBarang']);
    $this->db->bind('harga_per_barang', $data['hargaPerBarang']);
    $this->db->bind('nama_barang', $data['namaBarang']);
    $this->db->bind('barang_terjual', $data['terjual']);
    
    $this->db->execute();
    return $this->db->rowCount();
  }
  
  public function getDetailLaporan($dbTable, $id) {
    $this->db->query('SELECT * FROM ' . $dbTable . ' WHERE id_laporan= :id_laporan');
    $this->db->bind('id_laporan', $id);
    return $this->db->single();
  }
  
  public function tambahSales($data) {
    $query = "INSERT INTO sales
                VALUES
              ('', :nama_sales, :asal_sales, :tujuan_sales)";
    $this->db->query($query);
    $this->db->bind('nama_sales', $data['namaSalesBaru']);
    $this->db->bind('asal_sales', $data['asalSalesBaru']);
    $this->db->bind('tujuan_sales', $data['tujuanSalesBaru']);
    $this->db->execute();
    return $this->db->rowCount();
  }
  
  public function cetakLaporan() {
    $this->db->query('SELECT * FROM laporan');
    return $this->db->resultSet();
  }
  
  public function cariDataSales() {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM sales 
                WHERE 
              nama_sales LIKE :keyword OR
              asal_sales LIKE :keyword OR
              tujuan_sales LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }
  
  public function cariDataBarang() {
    $keyword = $_POST['keywordBarang'];
    
    $query = "SELECT * FROM barang 
                WHERE 
              nama_barang LIKE :keyword OR
              harga_barang LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }
  

  
}