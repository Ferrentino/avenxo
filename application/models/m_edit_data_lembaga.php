<?php 
class M_edit_data_lembaga extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	//function-function untuk keperluan Read

	function get_nama($id){
		$this->db->select('nama_lembaga')->from('tb_mou_rf_lembaga')->where('id_lembaga', $id);
		$query = $this->db->get();
		$nama = $query->row()->nama_lembaga;       
		return  $nama;
	}

	function get_jenis_lembaga($id){
		$query = $this->db->query('SELECT b.jenis_lembaga FROM tb_mou_rf_lembaga a JOIN tb_mou_rf_jenislembaga b ON a.id_jenis_lembaga = b.id_jenis_lembaga WHERE a.id_lembaga = "'.$id.'"');
		$jenis = $query->row()->jenis_lembaga;
		return $jenis;
	}

	function get_alamat($id){
		$this->db->select('alamat_lembaga')->from('tb_mou_rf_lembaga')->where('id_lembaga', $id);
		$query = $this->db->get();
		$alamat = $query->row()->alamat_lembaga;       
		return  $alamat;
	}

	public function allProvinsi(){    
		$query = $this->db->query('SELECT a.id_provinsi, a.nama_provinsi FROM tb_mou_rf_provinsi a JOIN tb_mou_rf_negara b ON a.id_negara = b.id_negara WHERE b.nama_negara = "Indonesia" ORDER BY a.nama_provinsi');
		return $query->result(); 
	}

	public function get_id_provinsi($id){    
		$query = $this->db->query('SELECT id_provinsi FROM tb_mou_rf_lembaga WHERE id_lembaga = "'.$id.'"');
		$id_provinsi = $query->row()->id_provinsi;
		return $id_provinsi;
	}

	function get_nama_provinsi($id){
		$query = $this->db->query('SELECT b.nama_provinsi FROM tb_mou_rf_lembaga a JOIN tb_mou_rf_provinsi b ON a.id_provinsi = b.id_provinsi WHERE a.id_lembaga = "'.$id.'"');
		$prov = $query->row()->nama_provinsi;
		return $prov;
	}
	function get_provinsi($id){
		$query = $this->db->query('SELECT b.nama_provinsi FROM tb_mou_rf_lembaga a JOIN tb_mou_rf_provinsi b ON a.id_provinsi = b.id_provinsi WHERE a.id_lembaga = "'.$id.'"');
		$provinsi = $query->row()->nama_provinsi;
		return $provinsi;
	}

	public function allKota(){    
		$query = $this->db->query('SELECT id_kota, nama_kota FROM tb_mou_rf_kota WHERE id_provinsi IN (SELECT a.id_provinsi FROM tb_mou_rf_provinsi a JOIN tb_mou_rf_negara b ON a.id_negara = b.id_negara WHERE b.nama_negara = "Indonesia" ORDER BY a.nama_provinsi) ORDER BY nama_kota');
		return $query->result();   
	}

	public function get_id_kota($id){    
		$query = $this->db->query('SELECT id_kota FROM tb_mou_rf_lembaga WHERE id_lembaga = "'.$id.'"');
		$id_kota = $query->row()->id_kota;
		return $id_kota;
	}

	function get_nama_kota($id){
		$query = $this->db->query('SELECT b.nama_kota FROM tb_mou_rf_lembaga a JOIN tb_mou_rf_kota b ON a.id_kota = b.id_kota WHERE a.id_lembaga = "'.$id.'"');
		$kota = $query->row()->nama_kota;
		return $kota;
	}

	function get_kota($id){
		$query = $this->db->query('SELECT b.nama_kota FROM tb_mou_rf_lembaga a JOIN tb_mou_rf_kota b ON a.id_kota = b.id_kota WHERE a.id_lembaga = "'.$id.'"');
		$kota = $query->row()->nama_kota;
		return $kota;
	}

	public function allNegara(){    
		$query = $this->db->query('SELECT id_negara, nama_negara FROM tb_mou_rf_negara WHERE nama_negara != "Indonesia" ORDER BY nama_negara');
		return $query->result();
	}

	public function get_id_negara($id){    
		$query = $this->db->query('SELECT id_negara FROM tb_mou_rf_lembaga WHERE id_lembaga = "'.$id.'"');
		$id_negara = $query->row()->id_negara;
		return $id_negara;
	}

	function get_negara($id){
		$query = $this->db->query('SELECT b.nama_negara FROM tb_mou_rf_lembaga a JOIN tb_mou_rf_negara b ON a.id_negara = b.id_negara WHERE a.id_lembaga = "'.$id.'"');
		$negara = $query->row()->nama_negara;
		return $negara;
	}

	function get_kodepos($id){
		$this->db->select('kodepos_lembaga')->from('tb_mou_rf_lembaga')->where('id_lembaga', $id);
		$query = $this->db->get();
		$kodepos = $query->row()->kodepos_lembaga;       
		return  $kodepos;
	}

	function get_telpon($id){
		$this->db->select('notelp_lembaga')->from('tb_mou_rf_lembaga')->where('id_lembaga', $id);
		$query = $this->db->get();
		$telp = $query->row()->notelp_lembaga;       
		return  $telp;
	}

	public function allKodeNegara(){    
		$query = $this->db->query('SELECT kode_telpon_negara FROM tb_mou_rf_negara WHERE kode_telpon_negara != "+62" GROUP BY kode_telpon_negara ORDER BY kode_telpon_negara');
		return $query->result();
	}

	function get_email($id){
		$this->db->select('email_lembaga')->from('tb_mou_rf_lembaga')->where('id_lembaga', $id);
		$query = $this->db->get();
		$email = $query->row()->email_lembaga;       
		return  $email;
	}


	//function-function untuk keperluan Update

	public function getIdProvinsi($idnegara, $provinsi){    
		$this->db->select('id_provinsi')->from('tb_mou_rf_provinsi')->where('nama_provinsi', $provinsi);
		$query = $this->db->get();

		if($query->num_rows() > 0){      
		   //jika kode ternyata sudah ada.           
			$kodejadi = $query->row()->id_provinsi; 
		}
		else {      
			//jika kode belum ada      
			$this->db->select('RIGHT(tb_mou_rf_provinsi.ID_PROVINSI,4) as kode', FALSE);
			$this->db->order_by('ID_PROVINSI','DESC');    
			$this->db->limit(1);

			$query = $this->db->get('tb_mou_rf_provinsi');

			$data = $query->row();      
			$kode = intval($data->kode) + 1;

		  	$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0 (000($kode))
		  	$kodejadi = "PV".$kodemax;    // hasilnya PV0026 dst.

		  	//insert data provinsi baru
		  	$data = array(
		  		'id_provinsi' => $kodejadi, 
		  		'id_negara' => $idnegara,
		  		'nama_provinsi' => $provinsi
		  	);

		  	$this->db->insert('tb_mou_rf_provinsi',$data);
		  }

		  return $kodejadi;
		}

		public function getIdJenisLembaga($jenisLembaga){
			$this->db->select('id_jenis_lembaga')->from('tb_mou_rf_jenislembaga')->where('jenis_lembaga', $jenisLembaga);
			$query = $this->db->get();
			$id = $query->row()->id_jenis_lembaga;       
			return  $id;
		}

		public function getIdKota($idprovinsi, $kota){    
			$this->db->select('id_kota')->from('tb_mou_rf_kota')->where('nama_kota', $kota);
			$query = $this->db->get();

			if($query->num_rows() > 0){      
		   //jika kode ternyata sudah ada.           
				$kodejadi = $query->row()->id_kota;   
			}
			else {      
			//jika kode belum ada      
				$this->db->select('RIGHT(tb_mou_rf_kota.ID_KOTA,5) as kode', FALSE);
				$this->db->order_by('ID_KOTA','DESC');    
				$this->db->limit(1);

				$query = $this->db->get('tb_mou_rf_kota');

				$data = $query->row();      
				$kode = intval($data->kode) + 1;

		  	$kodemax = str_pad($kode, 5, "0", STR_PAD_LEFT); // angka 5 menunjukkan jumlah digit angka 0 (0000($kode))
		  	$kodejadi = "KT".$kodemax;    // hasilnya KT00026 dst.

		  	//insert data kota baru
		  	$data = array(
		  		'id_kota' => $kodejadi, 
		  		'id_provinsi' => $idprovinsi,
		  		'nama_kota' => $kota
		  	);

		  	$this->db->insert('tb_mou_rf_kota',$data);    
		  }

		  return $kodejadi;
		}

		function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		public function getIdNegara($negara){   
			$this->db->select('id_negara')->from('tb_mou_rf_negara')->where('nama_negara', $negara);
			$query = $this->db->get();
			$id = $query->row()->id_negara;       
			return  $id;
		}	
	}
	?>