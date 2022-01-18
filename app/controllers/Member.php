<?php 

class Member extends Controller {
  
  private $sales = DB_SALES;
  
  public function daftar() {
    $data['title'] = 'Halaman member';
    $data['sales'] = $this->model('Gudang_model')->getAllData($this->sales);
    $this->view('templates/header', $data);
    $this->view('member/index', $data);
    $this->view('templates/footer');
  }
  
  
  public function detail($id) {
    $data['sales'] = $this->model('Gudang_model')->getDataById($this->sales, $id);
    $this->view('templates/header');
    $this->view('member/detail', $data);
    $this->view('templates/footer');
  }
  
  public function tambah() {
    if ($this->model('Gudang_model')->tambahSales($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'ditambah', 'success');
      header('Location: ' . BASEURL . '/member');
      exit;
    } else {
      Flasher::setFlash('Gagal', 'ditambah', 'danger');
      header('Location: ' . BASEURL . '/member');
      exit;
    }
  }
  
  public function cariSales() {
    $data['title'] = 'Halaman sales';
    $data['sales'] = $this->model('Gudang_model')->cariDataSales();
    $this->view('templates/header', $data);
    $this->view('member/index', $data);
    $this->view('templates/footer');
    
  }
  
  
}