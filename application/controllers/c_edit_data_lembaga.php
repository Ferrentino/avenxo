<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_edit_data_lembaga extends CI_Controller {

	var $title = 'Data Lembaga';

	public function internasional($id)
	{   
		$this->load->model('m_edit_data_lembaga');
		$data['id'] = $id;
		$data['nama'] = $this->m_edit_data_lembaga->get_nama($id);
		$data['jenis'] = $this->m_edit_data_lembaga->get_jenis_lembaga($id);
		$data['alamat'] = $this->m_edit_data_lembaga->get_alamat($id);
		$data['provinsi'] = $this->m_edit_data_lembaga->get_provinsi($id);
		$data['kota'] = $this->m_edit_data_lembaga->get_kota($id);
		$data['allnegara'] = $this->m_edit_data_lembaga->allNegara();
		$data['id_negara'] = $this->m_edit_data_lembaga->get_id_negara($id);
		$data['negara'] = $this->m_edit_data_lembaga->get_negara($id);
		$data['kodepos'] = $this->m_edit_data_lembaga->get_kodepos($id);
		$data['allkodenegara'] = $this->m_edit_data_lembaga->allKodeNegara();
		$telp = $this->m_edit_data_lembaga->get_telpon($id);
		$pisah=explode("-", $telp);
		$data['kodenegara'] = $pisah[0];
		$data['telpon'] = $pisah[1];
		$data['email'] = $this->m_edit_data_lembaga->get_email($id);
		$this->load->template('v_edit_lembaga/internasional', $data);
	}

	public function nasional($id)
	{   
		$this->load->model('m_edit_data_lembaga');
		$data['id'] = $id;
		$data['nama'] = $this->m_edit_data_lembaga->get_nama($id);
		$data['jenis'] = $this->m_edit_data_lembaga->get_jenis_lembaga($id);
		$data['alamat'] = $this->m_edit_data_lembaga->get_alamat($id);
		$data['allprovinsi'] = $this->m_edit_data_lembaga->allProvinsi();
		$data['id_provinsi'] = $this->m_edit_data_lembaga->get_id_provinsi($id);
		$data['provinsi'] = $this->m_edit_data_lembaga->get_nama_provinsi($id);
		$data['allkota'] = $this->m_edit_data_lembaga->allKota();
		$data['id_kota'] = $this->m_edit_data_lembaga->get_id_kota($id);
		$data['kota'] = $this->m_edit_data_lembaga->get_nama_kota($id);
		$data['kodepos'] = $this->m_edit_data_lembaga->get_kodepos($id);
		$telp = $this->m_edit_data_lembaga->get_telpon($id);
		$pisah=explode("-", $telp);
		$data['telpon'] = $pisah[1];
		$data['email'] = $this->m_edit_data_lembaga->get_email($id);
		$this->load->template('v_edit_lembaga/nasional', $data);
	}

	public function update_internasional(){
		$this->load->model('m_edit_data_lembaga');

		$provinsi = $this->input->post('provinsi');
		$jenislembaga = (string)$this->input->post('jenislembaga');
		$kota = $this->input->post('kota');
		$kodenegara = $this->input->post('kodenegara');
		$telepon_lembaga = $this->input->post('telepon_lembaga');

		$idnegara = $this->input->post('negara');

		$idlembaga = $this->input->post('idlembaga');
		$idprovinsi = $this->m_edit_data_lembaga->getIdProvinsi($idnegara, $provinsi);
		$idjenislembaga = $this->m_edit_data_lembaga->getIdJenisLembaga($jenislembaga);
		$idkota = $this->m_edit_data_lembaga->getIdKota($idprovinsi, $kota);
		
		$namalembaga = $this->input->post('namalembaga');
		$alamatlembaga = $this->input->post('alamatlembaga');
		$regional = $this->input->post('regional');
		$kodepos = $this->input->post('kodepos');
		$telepon = $kodenegara."-".$telepon_lembaga;
		$email = $this->input->post('email');

		$data = array(
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

		$where = array(
			'id_lembaga' => $idlembaga
		);
		
		$this->m_edit_data_lembaga->update_data($where,$data,'tb_mou_rf_lembaga');
		redirect('c_data_lembaga/index');
	}

	public function update_nasional(){
		$this->load->model('m_edit_data_lembaga');

		$jenislembaga = (string)$this->input->post('jenislembaga');
		$negara = $this->input->post('negara');
		$kodenegara = $this->input->post('kodenegara');
		$telepon_lembaga = $this->input->post('telepon_lembaga');

		$idlembaga = $this->input->post('idlembaga');
		$idprovinsi = $this->input->post('provinsi');
		$idjenislembaga = $this->m_edit_data_lembaga->getIdJenisLembaga($jenislembaga);
		$idkota = $this->input->post('kota');
		$idnegara = $this->m_edit_data_lembaga->getIdNegara($negara);
		$namalembaga = $this->input->post('namalembaga');
		$alamatlembaga = $this->input->post('alamatlembaga');
		$regional = $this->input->post('regional');
		$kodepos = $this->input->post('kodepos');
		$telepon = $kodenegara."-".$telepon_lembaga;
		$email = $this->input->post('email');

		$data = array(
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

		$where = array(
			'id_lembaga' => $idlembaga
		);
		
		$this->m_edit_data_lembaga->update_data($where,$data,'tb_mou_rf_lembaga');
		redirect('c_data_lembaga/index');
	}
}