<?php 
class Internasional extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	public function getIdJenisLembaga($jenisLembaga){
		$this->db->select('id_jenis_lembaga')->from('tb_mou_rf_jenislembaga')->where('jenis_lembaga', $jenisLembaga);
		$query = $this->db->get();
		$id = $query->row()->id_jenis_lembaga;       
		return  $id;
	}

	public function getNegara(){    
		$query = $this->db->query('SELECT id_negara, nama_negara FROM tb_mou_rf_negara WHERE nama_negara != "Indonesia" ORDER BY nama_negara');
		return $query->result();
	}

	public function getTelpon(){
		$query = $this->db->query('SELECT kode_telpon_negara FROM tb_mou_rf_negara WHERE kode_telpon_negara != "+62" GROUP BY kode_telpon_negara ORDER BY kode_telpon_negara');
		return $query->result();
	}

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

		public function getIdUniv()   {
			$this->db->select('RIGHT(tb_mou_rf_lembaga.ID_LEMBAGA,4) as kode', FALSE);
			$this->db->like('ID_LEMBAGA', 'LM1', 'after'); 
			$this->db->order_by('ID_LEMBAGA','DESC');    
			$this->db->limit(1);    
		  $query = $this->db->get('tb_mou_rf_lembaga');      //cek dulu apakah ada sudah ada kode di tabel.    

		  if($query->num_rows() > 0) {      
		  	$data = $query->row();      
		  	$kode = intval($data->kode);
		  	if($kode < 2000) {      
		   //jika kode ternyata sudah ada.      
		  		$kode += 1;    
		  	}    
		  }
		  else {      
		   //jika kode belum ada      
		  	$kode = 1;    
		  }

		  $kodemax = str_pad($kode, 4, "100", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0 (100($kode))
		  $kodejadi = "LM".$kodemax;    // hasilnya LM1001 dst.
		  return $kodejadi;  
		}

		public function getIdNon()   {
			$this->db->select('RIGHT(tb_mou_rf_lembaga.ID_LEMBAGA,4) as kode', FALSE);
			$this->db->like('ID_LEMBAGA', 'LM2', 'after');
			$this->db->order_by('ID_LEMBAGA','DESC');    
			$this->db->limit(1);    
		  $query = $this->db->get('tb_mou_rf_lembaga');      //cek dulu apakah ada sudah ada kode di tabel.

		  if($query->num_rows() > 0){      
		  	$data = $query->row();      
		  	$kode = intval($data->kode);
		  	if($kode > 2000){      
		   //jika kode ternyata sudah ada.      
		  		$kode += 1;    
		  	}  
		  }
		  else {      
		   //jika kode belum ada      
		  	$kode = 1;    
		  }

		  $kodemax = str_pad($kode, 4, "200", STR_PAD_LEFT); // angka 3 menunjukkan jumlah digit angka 0 (100($kode))
		  $kodejadi = "LM".$kodemax;    // hasilnya LM2001 dst.
		  return $kodejadi;  
		}

		function input_data($data,$table){
			$this->db->insert($table,$data);
		}
	}
	?>