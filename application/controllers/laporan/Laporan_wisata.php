<?php 

class Laporan_wisata extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Data_model');
	}

	public function index() {
		$data ['data'] = $this->Data_model->tabelJoin();

		$this->load->view('layout/header');
		$this->load->view('laporan/laporan_wisata/index', $data);
		$this->load->view('layout/footer');
	}

	public function tambah() {
		$this->_rules();

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('template/header');
			$this->load->view('laporan/laporan_wisata/tambah');
			$this->load->view('template/footer');
		} else {
			$foto = $this->upload();

			$user = [
				'nama_user' =>$this->input->post('username', TRUE),
				'no_tlp' =>$this->input->post('no_tlp', TRUE)
			];
			$this->db->insert('tb_user', $user);
			$id_user = $this->db->insert_id();

			$data = [
				'id_user' => $id_user,
				'nama_wisata' =>$this->input->post('nama_wisata', TRUE),
				'lokasi_wisata' =>$this->input->post('lokasi_wisata', TRUE),
				'foto_wisata' => $foto,
				'ket_wisata' =>$this->input->post('keterangan', TRUE),
              	'latitude' =>$this->input->post('lang_wisata', TRUE),
				'longitude' =>$this->input->post('long_wisata', TRUE)
				];
			
			$this->db->insert('tb_laporan_wisata', $data);
			redirect('aplikasi_mo/lap_wisata');
		}
		
	}

	public function detail($id_laporan_wisata) {
		$this->db->select(
				'tb_user.nama_user,
				tb_user.no_tlp,
				tb_laporan_wisata.*'
				);
		$this->db->from('tb_laporan_wisata');
		$this->db->join('tb_user', 'tb_laporan_wisata.id_user = tb_user.id_user');
		$this->db->where('tb_laporan_wisata.id_laporan_wisata', $id_laporan_wisata);
		$query ['id_laporan']= $this->db->get()->row_array();

		$this->load->view('layout/header');
		$this->load->view('laporan/laporan_wisata/detail', $query);		
		$this->load->view('layout/footer');
	}

	public function edit($id_laporan_wisata) {
		$data['id_laporan']= $this->db->get_where('tb_laporan_wisata',['id_laporan_wisata' => $id_laporan_wisata])->row_array();

      	$data = ['verifikasi_wisata' =>'diterima'];
		$this->db->update('tb_laporan_wisata', $data, ['id_laporan_wisata'=>$id_laporan_wisata]);
      $hasil['laporan']= $this->db->get_where('tb_laporan_wisata',['id_laporan_wisata' => $id_laporan_wisata])->row_array();
      
      $d = [
			'id_katagori_info' => '2',
			'nama_wisata' => $hasil['laporan']['nama_wisata'],
			'lokasi_wisata' => $hasil['laporan']['lokasi_wisata'],
			'foto_wisata'=> $hasil['laporan']['foto_wisata'],
			'keterangan'=> $hasil['laporan']['ket_wisata'],
			'latitude' => $hasil['laporan']['latitude'],
			'longitude'=>$hasil['laporan']['longitude']
		];
		$this->db->insert('tb_wisata', $d);
      
      	$this->db->where('id_laporan_wisata', $id_laporan_wisata);
		$this->db->delete('tb_laporan_wisata');
      
			redirect('laporan/laporan_wisata/index');
		
	}

	public function hapus($id_laporan_wisata) {
		$this->db->where('id_laporan_wisata', $id_laporan_wisata);
		$this->db->delete('tb_laporan_wisata');
		redirect('laporan/laporan_wisata/index');
	}

	public function _rules(){
		$this->form_validation->set_rules('nama_wisata', 'Nama Wisata', 'required|trim');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');
		$this->form_validation->set_rules('lokasi_wisata', 'Lokasi Wisata', 'required|trim');
	}

	private function upload() {
		$config['upload_path']          = './image/foto/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;
       
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('foto_wisata');
        return $this->upload->data('file_name');
	}

}


 ?>

