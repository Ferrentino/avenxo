<?php 
class Nasional extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	public function getIdJenisLembaga($jenisLembaga){
		$this->db->select('id_jenis_lembaga')->from('tb_mou_rf_jenislembaga')->where('jenis_lembaga', $jenisLembaga);
		$query = $this->db->get();
		$id = $query->row()->id_jenis_lembaga;       
		return  $id;
	}

	public function getProvinsi(){    
		$query = $this->db->query('SELECT a.id_provinsi, a.nama_provinsi FROM tb_mou_rf_provinsi a JOIN tb_mou_rf_negara b ON a.id_negara = b.id_negara WHERE b.nama_negara = "Indonesia" ORDER BY a.nama_provinsi');
		return $query->result();  
	}

	public function getKota(){     
		$query = $this->db->query('SELECT id_kota, nama_kota FROM tb_mou_rf_kota WHERE id_provinsi IN (SELECT a.id_provinsi FROM tb_mou_rf_provinsi a JOIN tb_mou_rf_negara b ON a.id_negara = b.id_negara WHERE b.nama_negara = "Indonesia" ORDER BY a.nama_provinsi) ORDER BY nama_kota');
		return $query->result();   
	}

	public function getIdUniv()   {
		$this->db->select('RIGHT(tb_mou_rf_lembaga.ID_LEMBAGA,4) as kode', FALSE);
		$this->db->like('ID_LEMBAGA', 'LM1', 'after'); 
		$this->db->order_by('ID_LEMBAGA','DESC');    
		$this->db->limit(1);    
		  $query = $this->db->get('tb_mou_rf_lembaga');      //cek dulu apakah ada sudah ada kode di tabel.
		  $data = $query->row();      
		  $kode = intval($data->kode);

		  if(($query->num_rows() > 0) && ($kode < 2000)) {      
		   //jika kode ternyata sudah ada.      
		  	$kode += 1;    
		  }
		  else {      
		   //jika kode belum ada      
		  	$kode = 1;    
		  }

		  $kodemax = str_pad($kode, 4, "100", STR_PAD_LEFT); // angka 3 menunjukkan jumlah digit angka 0 (100($kode))
		  $kodejadi = "LM".$kodemax;    // hasilnya LM1001 dst.
		  return $kodejadi;  
		}

		public function getIdNon()   {
			$this->db->select('RIGHT(tb_mou_rf_lembaga.ID_LEMBAGA,4) as kode', FALSE);
			$this->db->like('ID_LEMBAGA', 'LM2', 'after');
			$this->db->order_by('ID_LEMBAGA','DESC');    
			$this->db->limit(1);    
		  $query = $this->db->get('tb_mou_rf_lembaga');      //cek dulu apakah ada sudah ada kode di tabel.
		  $data = $query->row();      
		  $kode = intval($data->kode);

		  if(($query->num_rows() > 0) && ($kode > 2000)){      
		   //jika kode ternyata sudah ada.      
		  	$kode += 1;    
		  }
		  else {      
		   //jika kode belum ada      
		  	$kode = 1;    
		  }

		  $kodemax = str_pad($kode, 4, "200", STR_PAD_LEFT); // angka 3 menunjukkan jumlah digit angka 0 (100($kode))
		  $kodejadi = "LM".$kodemax;    // hasilnya LM2001 dst.
		  return $kodejadi;  
		}

		public function getIdNegara($negara){   
			$this->db->select('id_negara')->from('tb_mou_rf_negara')->where('nama_negara', $negara);
			$query = $this->db->get();
			$id = $query->row()->id_negara;       
			return  $id;
		}

		function input_data($data,$table){
			$this->db->insert($table,$data);
		}
	}
	?>