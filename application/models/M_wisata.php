<?php

class M_Wisata extends CI_Model {

  public function simpan($data)
  {
    $this->db->insert('lokasi', $data);
    
  }

  public function tampil()
  {
    $this->db->select('*');
    $this->db->from('lokasi');
    $this->db->order_by('id_wisata', 'desc');
    return $this->db->get()->result();
  }

  public function detail($id_wisata)
  {
    $this->db->select('*');
    $this->db->from('lokasi');
    $this->db->where('id_wisata', $id_wisata);
    return $this->db->get()->row();
  }

  public function edit($data)
  {
    $this->db->where('id_wisata', $data['id_wisata']);
    $this->db->update('lokasi', $data);
  }

  public function hapus($data)
  {
    $this->db->where('id_wisata', $data['id_wisata']);
    $this->db->delete('lokasi', $data);
  }
}

/* End of file ModelName.php */