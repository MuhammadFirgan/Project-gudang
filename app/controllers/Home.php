<?php 

class Home extends Controller{
  
  private $barang = DB_BARANG;
  
  
  public function daftar() {
    $data['title'] = 'Halaman barang';
    $data['barang'] = $this->model('Gudang_model')->getAllData($this->barang);
    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }
  
  public function getRestock($id) {
    if($this->model('Gudang_model')->restock($id) > 0) {
      Flasher::setFlash('Berhasil', 'direstock', 'success');
      header('Location: ' . BASEURL . '/home');
      exit;
    } else {
      Flasher::setFlash('Gagal', 'direstock', 'danger');
      header('Location: ' . BASEURL . '/home');
      exit;
    }
  }
  
  public function getJual() {
    
    if( $this->model('Gudang_model')->jual($_POST) ) {
      Flasher::setFlash('Berhasil', 'diambil', 'success');
      header('Location: ' . BASEURL . '/home');
      exit;
    } else {
      Flasher::setFlash('Gagal', 'diambil', 'danger');
      header('Location: ' . BASEURL . '/home');
      exit;
    }
  }
  
  public function tambah() {
    if ($this->model('Gudang_model')->tambahBarang($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'ditambah', 'success');
      header('Location: ' . BASEURL . '/home');
      exit;
    } else {
      Flasher::setFlash('Gagal', 'ditambah', 'danger');
      header('Location: ' . BASEURL . '/home');
      exit;
    }
  }
  
  public function cariBarang() {
    $data['title'] = 'Halaman barang';
    $data['barang'] = $this->model('Gudang_model')->cariDataBarang();
    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
    
  }
  
  
}