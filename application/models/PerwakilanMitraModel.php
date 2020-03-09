<?php 

	/**
	 * 
	 */
	class PerwakilanMitraModel extends CI_Model
	{
		function get_regional($id){
			$query = $this->db->query('SELECT regional FROM tb_mou_rf_lembaga WHERE id_lembaga = "'.$id.'"');
			$jenis = $query->row()->regional;
			return $jenis;
		}

		function insertDataMitra($idperwakilan,$idlembaga,$namalembaga,$nama,$jabatan,$jeniskelamin,$alamat,$kecamatan,$kelurahan,$provinsi,$kota,$negara,$kodenegara,$kodepos,$notelepon,$email)
		{
			$data = array(
				'ID_PERWAKILAN_LEMBAGA' => $idperwakilan,
				'NAMA' => $nama,
				'ID_LEMBAGA' => $idlembaga,
				'NAMA_PERWAKILAN_LEMBAGA' => $namalembaga,
				'JENIS_KELAMIN_PERWAKILAN_LEMBAGA' => $jeniskelamin,
				'JABATAN' => $jabatan,
				'ALAMAT_PERWAKILAN_LEMBAGA' => "$alamat, $kecamatan, $kelurahan, $kota, $provinsi, $negara", 
				'KODEPOS_PERWAKILAN_LEMBAGA' => $kodepos,
				'NOTELP_PERWAKILAN_LEMBAGA' => "$kodenegara$notelepon",
				'EMAIL_PERWAKILAN_LEMBAGA' => $email,
			);

			$query = $this->db->insert('tb_mou_tr_perwakilanmitra', $data);
			return $query;
		}

		function insertDataMitraInternasional($idperwakilan,$nama,$idlembaga,$namalembaga,$jeniskelamin,$jabatan,$alamat,$provinsi,$kota,$negara,$kodenegara,$kodepos,$notelepon,$email)
		{
			$data = array(
				'ID_PERWAKILAN_LEMBAGA' => $idperwakilan,
				'NAMA' => $nama,
				'ID_LEMBAGA' => $idlembaga,
				'NAMA_PERWAKILAN_LEMBAGA' => $namalembaga,
				'JENIS_KELAMIN_PERWAKILAN_LEMBAGA' => $jeniskelamin,
				'JABATAN' => $jabatan,
				'ALAMAT_PERWAKILAN_LEMBAGA' => "$alamat, $kota, $provinsi, $negara", 
				'KODEPOS_PERWAKILAN_LEMBAGA' => $kodepos,
				'NOTELP_PERWAKILAN_LEMBAGA' => "$kodenegara$notelepon",
				'EMAIL_PERWAKILAN_LEMBAGA' => $email,
			);

			$query = $this->db->insert('tb_mou_tr_perwakilanmitra', $data);
			return $query;
		}

		function tampilkanDataMitra() 
		{
			$query = $this->db->get('tb_mou_tr_perwakilanmitra');
			return $query->result_array();
		}
	}

	?>