<!-- Ergandhi Yudha Kurniawan -->
<!-- 1301154147 -->

<?php
class form extends CI_Controller{
   
    function  index(){
      $this->load->helper(array('form','url'));
       
      $this->load->library('form_validation');
      $this->load->library('session');
       
      $this->form_validation->set_rules('nim','Nomor Induk Mahasiswa','required');
      $this->form_validation->set_rules('nama','Masukkan Nama Anda','required');
  
       
        if ($this->form_validation->run()==FALSE){
            $this->load->view('form_view');
        }
       
        else {      

          $this->session->set_flashdata('succses','Data Yang anda masukan berhasil.');
          redirect('form');
        }
    }

    public function __construct(){
      parent::__construct();
      $this->load->model('web');
    }

    public function add(){
      $data = array(
        'nim' => $this->input->post('nim'),
        'nama' => $this->input->post('nama'),
    );
    return $this->db->insert('mahasiswa_1301154147', $data);
  }
}
 
?>