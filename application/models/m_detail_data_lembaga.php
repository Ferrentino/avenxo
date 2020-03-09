<?php 
class M_detail_data_lembaga extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	function detail_data($id){
		$query = $this->db->query('SELECT a.id_lembaga, a.nama_lembaga, a.alamat_lembaga, a.regional, c.nama_negara, a.kodepos_lembaga, a.notelp_lembaga, a.email_lembaga FROM tb_mou_rf_lembaga a JOIN tb_mou_rf_negara c ON a.id_negara = c.id_negara WHERE a.id_lembaga = "'.$id.'"');
		return $query->result();
	}

	function statistik($id){
		$query = $this->db->query('SELECT EXTRACT(YEAR FROM a.tanggal_mulai_kerjasama) AS tahun, COUNT(b.id_berkas) AS berkas/*, COUNT(c.id_perwakilan_lembaga) AS perwakilan*/, COUNT(a.id_kerjasama) AS kerjasama FROM tb_mou_rf_kerjasama a JOIN tb_mou_tr_berkas b ON a.id_kerjasama = b.id_kerjasama /*JOIN tb_mou_rf_lembaga d ON a.id_lembaga = d.id_lembaga JOIN tb_mou_rf_perwakilanlembaga c ON d.id_lembaga = c.id_lembaga*/ WHERE a.id_lembaga = "'.$id.'" GROUP BY tahun ORDER BY tahun');
		return $query->result();
	}

	function perwakilan($id){
		$query = $this->db->query('SELECT nama_perwakilan_lembaga, jenis_kelamin_perwakilan_lembaga, jabatan, alamat_perwakilan_lembaga, notelp_perwakilan_lembaga, email_perwakilan_lembaga FROM tb_mou_rf_perwakilanlembaga WHERE id_lembaga = "'.$id.'"');
		return $query->result();
	}
}
?>