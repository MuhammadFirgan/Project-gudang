<?php 


class Laporan extends Controller {
  
  private $db_laporan = DB_LAPORAN;
  
  public function daftar() {
    $data['title'] = 'Halaman laporan';
    $data['laporan'] = $this->model('Gudang_model')->getAllData($this->db_laporan);
    $this->view('templates/header', $data);
    $this->view('laporan/index', $data);
    $this->view('templates/footer');
  }
  
  public function detail($id) {
    $data['title'] = 'Halaman detail';
    $data['detail'] = $this->model('Gudang_model')->getDetailLaporan($this->db_laporan, $id);
    $this->view('templates/header', $data);
    $this->view('laporan/detail', $data);
    $this->view('templates/footer');
  }
  
  public function getLapor() {
    if($this->model('Gudang_model')->laporan($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/laporan');
      exit;
    } else {
      Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/laporan');
      exit;
    }
  }
    
  public function pdf() {
    require_once 'vendor/autoload.php';
    $dompdf = new Dompdf();
    $dompdf->loadHtml('hello world');
    $dompdf->render();
    // Output the generated PDF to Browser
    $dompdf->stream();
  }
  
  public function excel() {
    header('Content-type:application/vnd-ms-excel');
    header('Content-Disposition:attachment;filename=Data laporan.xls');
    $data['cetak'] = $this->model('Gudang_model')->cetakLaporan();
    $this->view('laporan/cetak', $data);
  }
  
}