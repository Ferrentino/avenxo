<?php 
class M_data_lembaga extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	function tampil_data(){
		$query = $this->db->query('SELECT a.id_lembaga, a.nama_lembaga, b.jenis_lembaga, a.alamat_lembaga, a.regional, c.nama_negara, a.kodepos_lembaga, a.notelp_lembaga, a.email_lembaga FROM tb_mou_rf_lembaga a JOIN tb_mou_rf_jenislembaga b ON a.id_jenis_lembaga = b.id_jenis_lembaga JOIN tb_mou_rf_negara c ON a.id_negara = c.id_negara ORDER BY a.id_lembaga');
		return $query->result();
	}

	function get_regional($id){
		$this->db->select('regional')->from('tb_mou_rf_lembaga')->where('id_lembaga', $id);
		$query = $this->db->get();
		$reg = $query->row()->regional;       
		return  $reg;
	}
}
?>