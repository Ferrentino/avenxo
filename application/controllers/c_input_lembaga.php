<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_input_lembaga extends CI_Controller {

	var $title = 'Input data Lembaga';

	function __construct()
	{
		parent::__construct();
	}
	
	public function internasional_non()
	{   
		$this->load->model('m_input_lembaga/internasional');
		$data['id_lembaga'] = $this->internasional->getIdNon();
		$data['nama_negara'] = $this->internasional->getNegara();
		$data['kode_telpon'] = $this->internasional->getTelpon();
		$this->load->template('v_input_lembaga/internasional/internasional_non', $data);
	}

	public function internasional_universitas()
	{   
		$this->load->model('m_input_lembaga/internasional');
		$data['id_lembaga'] = $this->internasional->getIdUniv();
		$data['nama_negara'] = $this->internasional->getNegara();
		$data['kode_telpon'] = $this->internasional->getTelpon();
		$this->load->template('v_input_lembaga/internasional/internasional_universitas', $data);
	}
	
	public function nasional_non()
	{   
		$this->load->model('m_input_lembaga/nasional');
		$data['id_lembaga'] = $this->nasional->getIdNon();
		$data['provinsi'] = $this->nasional->getProvinsi();
		$data['kota'] = $this->nasional->getKota();
		$this->load->template('v_input_lembaga/nasional/nasional_non', $data);
	}

	public function nasional_universitas()
	{   
		$this->load->model('m_input_lembaga/nasional');
		$data['id_lembaga'] = $this->nasional->getIdUniv();
		$data['provinsi'] = $this->nasional->getProvinsi();
		$data['kota'] = $this->nasional->getKota();
		$this->load->template('v_input_lembaga/nasional/nasional_universitas', $data);
	}

	public function tambah_internasional()
	{
		$this->load->model('m_input_lembaga/internasional');

		$provinsi = $this->input->post('provinsi');
		$jenislembaga = (string)$this->input->post('jenislembaga');
		$kota = $this->input->post('kota');
		$kodenegara = $this->input->post('kodenegara');
		$telepon_lembaga = $this->input->post('telepon_lembaga');

		$idnegara = $this->input->post('negara');

		$idlembaga = $this->input->post('idlembaga');
		$idprovinsi = $this->internasional->getIdProvinsi($idnegara, $provinsi);
		$idjenislembaga = $this->internasional->getIdJenisLembaga($jenislembaga);
		$idkota = $this->internasional->getIdKota($idprovinsi, $kota);
		
		$namalembaga = $this->input->post('namalembaga');
		$alamatlembaga = $this->input->post('alamatlembaga');
		$regional = $this->input->post('regional');
		$kodepos = $this->input->post('kodepos');
		$telepon = $kodenegara."-".$telepon_lembaga;
		$email = $this->input->post('email');

		$data = array(
			'id_lembaga' => $idlembaga,
			'id_provinsi' => $idprovinsi,
			'id_jenis_lembaga' => $idjenislembaga,
			'id_kota' => $idkota,
			'id_negara' => $idnegara,
			'nama_lembaga' => $namalembaga,
			'alamat_lembaga' => $alamatlembaga,
			'regional' => $regional,
			'kodepos_lembaga' => $kodepos,
			'notelp_lembaga' => $telepon,
			'email_lembaga' => $email
		);
		
		$this->internasional->input_data($data,'tb_mou_rf_lembaga');
		redirect('c_data_lembaga/index');
	}

	public function tambah_nasional()
	{
		$this->load->model('m_input_lembaga/nasional');

		$jenislembaga = (string)$this->input->post('jenislembaga');
		$negara = $this->input->post('negara');
		$kodenegara = $this->input->post('kodenegara');
		$telepon_lembaga = $this->input->post('telepon_lembaga');

		$idlembaga = $this->input->post('idlembaga');
		$idprovinsi = $this->input->post('provinsi');
		$idjenislembaga = $this->nasional->getIdJenisLembaga($jenislembaga);
		$idkota = $this->input->post('kota');
		$idnegara = $this->nasional->getIdNegara($negara);
		$namalembaga = $this->input->post('namalembaga');
		$alamatlembaga = $this->input->post('alamatlembaga');
		$regional = $this->input->post('regional');
		$kodepos = $this->input->post('kodepos');
		$telepon = $kodenegara."-".$telepon_lembaga;
		$email = $this->input->post('email');

		$data = array(
			'id_lembaga' => $idlembaga,
			'id_provinsi' => $idprovinsi,
			'id_jenis_lembaga' => $idjenislembaga,
			'id_kota' => $idkota,
			'id_negara' => $idnegara,
			'nama_lembaga' => $namalembaga,
			'alamat_lembaga' => $alamatlembaga,
			'regional' => $regional,
			'kodepos_lembaga' => $kodepos,
			'notelp_lembaga' => $telepon,
			'email_lembaga' => $email
		);
		
		$this->nasional->input_data($data,'tb_mou_rf_lembaga');
		redirect('c_data_lembaga/index');
	}
}