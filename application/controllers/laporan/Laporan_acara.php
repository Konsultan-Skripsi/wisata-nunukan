<?php 

class Laporan_acara extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Data_model');
	}

	public function index() {
		$data ['lap_acara'] = $this->Data_model->joinTabel();
		$this->load->view('layout/header');
		$this->load->view('laporan/laporan_acara/index', $data);
		$this->load->view('layout/footer');
	}

	public function tambah() {
		
		$this->_rules();

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('template/header');
			$this->load->view('laporan/laporan_acara/tambah');
			$this->load->view('template/footer');

		} else {
			$user = [
				'nama_user' =>$this->input->post('nama_user', TRUE),
				'no_tlp' =>$this->input->post('no_tlp', TRUE)
			];
			$this->db->insert('tb_user', $user);
			$id_user = $this->db->insert_id();
			$data = [
				'id_user' => $id_user,
				'nama_acara' =>$this->input->post('nama_acara', TRUE),
				'tgl_mulai' =>$this->input->post('tgl_mulai', TRUE),
				'tgl_selesai' =>$this->input->post('tgl_selesai', TRUE),
				'jam_mulai' =>$this->input->post('jam_mulai', TRUE),
				'jam_selesai' =>$this->input->post('jam_selesai', TRUE),
				'tempat_acara' =>$this->input->post('tempat_acara', TRUE),
				'ket_acara' =>$this->input->post('keterangan', TRUE),
              	'latitude' =>$this->input->post('lang_acara', TRUE),
				'longitude' =>$this->input->post('long_acara', TRUE)
		];
		$this->db->insert('tb_laporan_acara', $data);
		redirect('aplikasi_mo/lap_acara');
		}
	}	

	public function detail($id_laporan_acara) {
		$data ['lap_acara'] = $this->Data_model->tabelById($id_laporan_acara);
		$this->load->view('layout/header');
		$this->load->view('laporan/laporan_acara/detail', $data);
		$this->load->view('layout/footer');
	}

	public function edit($id_laporan_acara) {
		$data ['lap_acara'] = $this->db->get_where('tb_laporan_acara', ['id_laporan_acara'=>$id_laporan_acara])->row_array();  
		
      	$data = ['verifikasi_acara' =>'diterima'];
		$this->db->update('tb_laporan_acara', $data, ['id_laporan_acara'=> $id_laporan_acara]);
		redirect('laporan/laporan_acara/index');
		
	}

	public function hapus($id_laporan_acara) {
		$this->db->where('id_laporan_acara', $id_laporan_acara);
		$this->db->delete('tb_laporan_acara');
		redirect('laporan/laporan_acara/index');
	}

	public function _rules(){
		$this->form_validation->set_rules('nama_acara', 'Nama Acara', 'required|trim');
		$this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'required|trim');
		$this->form_validation->set_rules('tgl_selesai', 'Tanggal Selesai', 'required|trim');
		$this->form_validation->set_rules('jam_mulai', 'Jam Mulai', 'required|trim');
		$this->form_validation->set_rules('jam_selesai', 'Jam Selesai', 'required|trim');
		$this->form_validation->set_rules('tempat_acara', 'Tempat Acara', 'required|trim');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');
		$this->form_validation->set_rules('nama_user', 'Nama Pelapor', 'required|trim');
		$this->form_validation->set_rules('no_tlp', 'No_tlp', 'required|trim');
	}

}

 ?>