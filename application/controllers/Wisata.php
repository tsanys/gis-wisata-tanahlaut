<?php

class Wisata extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_wisata');
  }
  

  public function index()
  {
    $data = array(
      'title' => 'List Tempat Wisata',
      'wisata' => $this->m_wisata->tampil(),
      'isi' => 'datawisata'
    );
    $this->load->view('layout/wrapper', $data, FALSE);
  }

  public function input()
  { 
    $this->form_validation->set_rules('nama_wisata', 'Nama Wisata', 'required');
    $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('kategori', 'Kategori', 'required');
    $this->form_validation->set_rules('latitude', 'Latitude', 'required');
    $this->form_validation->set_rules('longitude', 'Longitude', 'required');
    
    if ($this->form_validation->run() == TRUE) {
      $config['upload_path']          = './gambar/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = 2000;
      $this->upload->initialize($config);

      if (! $this->upload->do_upload('gambar')) {
        $data = array(
          'title' => 'Input Tempat Wisata',
          'error_upload' => $this->upload->display_errors(),
          'isi' => 'input_datawisata'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
      } else {
        $upload_data = array('uploads' => $this->upload->data());
        $config['image_library'] = 'gd2';
        $config['source_image'] = './gambar'.$upload_data['uploads']['file_name'];
        $this->load->library('image_lib', $config);
        $data = array(
          'nama_wisata' => $this->input->post('nama_wisata'),
          'deskripsi' => $this->input->post('deskripsi'),
          'alamat' => $this->input->post('alamat'),
          'kategori' => $this->input->post('kategori'),
          'latitude' => $this->input->post('latitude'),
          'longitude' => $this->input->post('longitude'),
          'gambar' => $upload_data['uploads']['file_name']
        );
        $this->m_wisata->simpan($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
        
        redirect('wisata/input');
      }
    }

    $data = array(
      'title' => 'Input Tempat Wisata',
      'isi' => 'input_datawisata'
    );
    $this->load->view('layout/wrapper', $data, FALSE);
  }

  public function edit($id_wisata)
  {
    $this->form_validation->set_rules('nama_wisata', 'Nama Wisata', 'required');
    $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('kategori', 'Kategori', 'required');
    $this->form_validation->set_rules('latitude', 'Latitude', 'required');
    $this->form_validation->set_rules('longitude', 'Longitude', 'required');

    if ($this->form_validation->run() == TRUE) {
      $config['upload_path']          = './gambar/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = 2000;
      $this->upload->initialize($config);

      if (! $this->upload->do_upload('gambar')) {
        $data = array(
          'title' => 'Edit Tempat Wisata',
          'error_upload' => $this->upload->display_errors(),
          'wisata' => $this->m_wisata->detail($id_wisata),
          'isi' => 'edit_datawisata'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
      } else {
        $upload_data = array('uploads' => $this->upload->data());
        $config['image_library'] = 'gd2';
        $config['source_image'] = './gambar'.$upload_data['uploads']['file_name'];
        $this->load->library('image_lib', $config);
        $data = array(
          'id_wisata' => $id_wisata,
          'nama_wisata' => $this->input->post('nama_wisata'),
          'deskripsi' => $this->input->post('deskripsi'),
          'alamat' => $this->input->post('alamat'),
          'kategori' => $this->input->post('kategori'),
          'latitude' => $this->input->post('latitude'),
          'longitude' => $this->input->post('longitude'),
          'gambar' => $upload_data['uploads']['file_name']
        );
        $this->m_wisata->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
        
        redirect('wisata');
      }

      $data = array(
        'id_wisata' => $id_wisata,
        'nama_wisata' => $this->input->post('nama_wisata'),
        'deskripsi' => $this->input->post('deskripsi'),
        'alamat' => $this->input->post('alamat'),
        'kategori' => $this->input->post('kategori'),
        'latitude' => $this->input->post('latitude'),
        'longitude' => $this->input->post('longitude'),
      );
      $this->m_wisata->edit($data);
      $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
      
      redirect('wisata');
    }

    $data = array(
      'title' => 'Edit Tempat Wisata',
      'wisata' => $this->m_wisata->detail($id_wisata),
      'isi' => 'edit_datawisata'
    );
    $this->load->view('layout/wrapper', $data, FALSE);
  }

  public function hapus($id_wisata)
  {
    $data = array('id_wisata' => $id_wisata);
    $this->m_wisata->hapus($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
    redirect('wisata');
  }

  public function detail($id_wisata)
  {
    $data = array(
      'title' => 'Pemetaan Tempat Wisata',
      'wisata' => $this->m_wisata->detail($id_wisata),
      'isi' => 'detail'
    );
    $this->load->view('details/wrapper', $data, FALSE);
  }
}

/* End of file Controllername.php */