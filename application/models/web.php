<!-- Ergandhi Yudha Kurniawan>
<!-- 1301154147 -->

<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class Web extends CI_Model
{

	public function get_data()
	{
		$hasil=$this->db->query('SELECT * FROM mahasiswa_1301154147');
		return $hasil;
	}

	public function save_data($data)
	{
		$this->db->insert('mahasiswa_1301154147',$data);
    }
}

?>