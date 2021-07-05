<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_upload_gambar extends CI_Controller {

public function do_upload()
{
    $config['upload_path'] = './gambar/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = 1000;
    // $config['max_width'] = 0;
    // $config['max_height'] = 0;

    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('nama_file')) {
      $error = array('error' => $this->upload->display_errors());
      $this->load->view('upload', $error);
    }else {
      $_data = array('upload_data' => $this->upload->data());

      $data = array(
        'keterangan'=>$this->input->post('keterangan'),
        'nama_file'=> $_data['upload_data']['file_name']
      );
      $query = $this->db->insert('upload', $data);

      if ($query) {
        echo 'berhasil diupload';
        redirect('C_upload_gambar');
      }else {
        echo 'gagal upload';
      }
    }

}

public function delete($id)
{
    $_id = $this->db->get_where('upload',['id' => $id])->row();
    $query = $this->db->delete('upload', ['id' => $id]);
    if ($query) {
      unlink('gambar/'.$_id->image);
    }
    redirect('C_upload_gambar');
}

// public function index()
// {
//   $this->load->view('lihat');
// }

}
