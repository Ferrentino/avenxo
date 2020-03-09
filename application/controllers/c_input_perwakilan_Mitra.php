<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_input_perwakilan_Mitra extends CI_Controller {

	var $title = 'Input data Perwakilan Mitra';

	function __construct()
	{
		parent::__construct();
		$this->load->model('PerwakilanMitraModel');
		$this->load->model('m_detail_data_lembaga');
	}

	public function index($id){
		$regional = $this->PerwakilanMitraModel->get_regional($id);
		if ($regional == "Nasional") {
			redirect('c_input_perwakilan_Mitra/nasional/'.$id);
		}
		if ($regional == "Internasional") {
			redirect('c_input_perwakilan_Mitra/internasional/'.$id);
		}
	}

	public function nasional($id)
	{   
		$result = $this->m_detail_data_lembaga->detail_data($id);

		$data['result'] = $result;

		$this->load->template('view_input_perwakilan_Mitra', $data);
	}

	public function internasional($id)
	{
		$result = $this->m_detail_data_lembaga->detail_data($id);

		$data['result'] = $result;

		$this->load->template('view_input_perwakilan_Mitra_internasional', $data);
	}

	public function simpanMitra()
	{
		$idperwakilan = $this->input->post('idperwakilan');
		$idlembaga = $this->input->post('idlembaga');
		$namalembaga = $this->input->post('namalembaga');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$jeniskelamin = $this->input->post('jeniskelamin');
		$alamat = $this->input->post('alamat');
		$kecamatan = $this->input->post('kecamatan');
		$kelurahan = $this->input->post('kelurahan');
		$provinsi = $this->input->post('provinsi');
		$kota = $this->input->post('kota');
		$negara = $this->input->post('negara');
		$kodenegara = $this->input->post('kodenegara');
		$kodepos = $this->input->post('kodepos');
		$notelepon = $this->input->post('notelepon');
		$email = $this->input->post('email');

		$result = $this->PerwakilanMitraModel->insertDataMitra($idperwakilan,$idlembaga,$namalembaga,$nama,$jabatan,$jeniskelamin,$alamat,$kecamatan,$kelurahan,$provinsi,$kota,$negara,$kodenegara,$kodepos,$notelepon,$email);

		if($result == 1) {
			redirect('c_data_perwakilan_Mitra/index');
		}
	}

	public function simpanMitraInternasional()
	{
		$idperwakilan = $this->input->post('idperwakilan');
		$idlembaga = $this->input->post('idlembaga');
		$namalembaga = $this->input->post('namalembaga');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$jeniskelamin = $this->input->post('jeniskelamin');
		$alamat = $this->input->post('alamat');
		$provinsi = $this->input->post('provinsi');
		$kota = $this->input->post('kota');
		$negara = $this->input->post('negara');
		$kodenegara = $this->input->post('kodenegara');
		$kodepos = $this->input->post('kodepos');
		$notelepon = $this->input->post('notelepon');
		$email = $this->input->post('email');

		$result = $this->PerwakilanMitraModel->insertDataMitraInternasional($idperwakilan,$idlembaga,$namalembaga,$nama,$jabatan, $jeniskelamin,$alamat,$provinsi,$kota,$negara,$kodenegara,$kodepos,$notelepon,$email);

		if($result == 1) {
			echo "Sukses";
		}
	}

}