<?php

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_wisata');
  }

  public function index()
  {
    $data = array(
      'title' => 'Pemetaan Tempat Wisata',
      'wisata' => $this->m_wisata->tampil(),
      'isi' => 'pemetaan'
    );
    $this->load->view('layout/wrapper', $data, FALSE);
  }

}

/* End of file Controllername.php */