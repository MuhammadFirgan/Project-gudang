<?php 

class App {
  protected $page = 'Home';
  protected $method = 'Daftar';
  protected $params = [];
  
  public function __construct() {
    $url = $this->parseURL();
    if (file_exists('app/controllers/' . $url[0] . '.php')) {
      $this->page = $url[0];
      unset($url[0]);
    }
    
    require_once 'app/controllers/' . $this->page . '.php';
    $this->page = new $this->page;
    
    
    if (isset($url[1])) {
      if (method_exists($this->page, $url[1])) {
        $this->method = $url[1];
        unset($url[1]);
      }
    }
    
    if (!empty($url)) {
      $this->params = array_values($url);
    }
    
    call_user_func_array([$this->page, $this->method], $this->params);
  
  }
  
  
  public function parseURL() {
    if (isset($_GET['url'])) {
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      return $url;
    }
  }
  
}