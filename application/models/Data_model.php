<?php 

/**
 * 
 */
class Data_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}


	public function getAll() {
		$query = $this->db->get('tb_admin');
		return $query->result_array();
	}

	public function getId($id_admin){
		return $this->db->get_where('tb_admin', ['id_admin' => $id_admin])->row_array();
	}

	public function tambah_admin() {
		$data = array(
				'username' => $this->input->post('username', TRUE),
				'password' => $this->input->post('password', TRUE)
				);
		$this->db->insert('tb_admin', $data);
	}

	public function ubah_admin($id_admin) {
		$data = array(
				'username' => $this->input->post('username', TRUE),
				'password' => $this->input->post('password', TRUE)
				);
		$this->db->where('id_admin', $id_admin);
		$this->db->update('tb_admin', $data);
	}

	public function hapus_admin($id_admin) {
		$this->db->where('id_admin', $id_admin);
		$this->db->delete('tb_admin');
	}

	public function getTabel($table, $kolom, $where1 = '',$where2 = '', $where3 = ''){
		$q = "SELECT $kolom FROM $table $where1 $where2 $where3";
    	$qx = $this->db->query($q);
    	return $qx->result();
	}

	public function tabelJoin() {
		$this->db->select(
				'tb_user.nama_user,
				tb_user.no_tlp,
				tb_laporan_wisata.*'
				);
		$this->db->from('tb_laporan_wisata');
		$this->db->join('tb_user', 'tb_laporan_wisata.id_user = tb_user.id_user');
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function joinTabel() {
		$this->db->select(
				'tb_laporan_acara.*,
				tb_user.nama_user,
				tb_user.no_tlp'
				);
		$this->db->from('tb_laporan_acara');
		$this->db->join('tb_user', 'tb_laporan_acara.id_user = tb_user.id_user');
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function tabelById($id_laporan_acara) {
		$this->db->select(
				'tb_laporan_acara.*,
				tb_user.nama_user,
				tb_user.no_tlp'
				);
		$this->db->from('tb_laporan_acara');
		$this->db->join('tb_user', 'tb_laporan_acara.id_user = tb_user.id_user');
		$this->db->where('tb_laporan_acara.id_laporan_acara', $id_laporan_acara);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function katInfo () {
		$this->db->select(
			'tb_katagori_info.nama_katagori_info,
			tb_budaya.*'
		);
		$this->db->from('tb_budaya');
		$this->db->join('tb_katagori_info', 'tb_budaya.id_katagori_info = tb.id_katagori_info.id_katagori_info');
		$query = $this->db->get()->result_array();
		return $query;
	}

}

 ?>