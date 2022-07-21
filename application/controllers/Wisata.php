<?php 

class Wisata extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index() {
		$data ['wisata']= $this->db->get('tb_wisata')->result_array();
		$this->load->view('layout/header');
		$this->load->view('wisata/index', $data);		
		$this->load->view('layout/footer');
	}

	public function tambah() 
	{
		$this->_rules();

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('layout/header');
			$this->load->view('wisata/tambah');	
			$this->load->view('layout/footer');
		} else {
			$foto = $this->upload();

			$data = [
				'id_katagori_info' =>$this->input->post('id_katagori_info'),
				'nama_wisata' =>$this->input->post('nama_wisata', TRUE),
				'lokasi_wisata' =>$this->input->post('lokasi_wisata', TRUE),
				'foto_wisata' => $foto,
				'keterangan' =>$this->input->post('keterangan', TRUE),
				'latitude' =>$this->input->post('latitude'),
				'longitude' =>$this->input->post('longitude')
				];

			$this->db->insert('tb_wisata', $data);
			redirect('wisata/index');
		}
		
	}

	public function edit($id_wisata) {
		$data ['id_wisata'] = $this->db->get_where('tb_wisata', ['id_wisata' => $id_wisata])->row_array();
		
		$this->_rules();

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('layout/header');
			$this->load->view('wisata/edit', $data);	
			$this->load->view('layout/footer');
		} else {
			
			$foto = $_FILES ['foto_wisata'];
			if ($foto['name'] == '') {
			 	$data = [
				'id_katagori_info' =>$this->input->post('id_katagori_info'),
				'nama_wisata' =>$this->input->post('nama_wisata', TRUE),
				'lokasi_wisata' =>$this->input->post('lokasi_wisata', TRUE),
				'foto_wisata' => $this->input->post('foto_lama'),
				'keterangan' =>$this->input->post('keterangan', TRUE),
				'latitude' =>$this->input->post('latitude'),
				'longitude' =>$this->input->post('longitude')
				];
			 } else {
			 	$data = [
				'id_katagori_info' =>$this->input->post('id_katagori_info'),
				'nama_wisata' =>$this->input->post('nama_wisata', TRUE),
				'lokasi_wisata' =>$this->input->post('lokasi_wisata', TRUE),
				'foto_wisata' => $this->upload(),
				'keterangan' =>$this->input->post('keterangan', TRUE),
				'latitude' =>$this->input->post('latitude'),
				'longitude' =>$this->input->post('longitude')
				];
			 }

			$this->db->update('tb_wisata', $data, ['id_wisata'=>$id_wisata]);
			redirect('wisata/index');
		}
	}

	public function detail($id_wisata) {
		$data ['wisata'] =  $this->db->get_where('tb_wisata', ['id_wisata' => $id_wisata])->row_array();
		$this->load->view('layout/header');
		$this->load->view('wisata/detail', $data);
		$this->load->view('layout/footer');
	}

	public function hapus($id_wisata) {
		$this->db->where('id_wisata', $id_wisata);
		$this->db->delete('tb_wisata');
		redirect('wisata/index');
	}

	public function _rules() {
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