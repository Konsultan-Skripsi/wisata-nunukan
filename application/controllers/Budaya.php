<?php 

class Budaya extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$data ['budaya'] = $this->db->get('tb_budaya')->result_array();		
		$this->load->view('layout/header');
		$this->load->view('budaya/index', $data);		
		$this->load->view('layout/footer');
	}

	public function tambah() {
		$this->_rules();

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('layout/header');
			$this->load->view('budaya/tambah');	
			$this->load->view('layout/footer');
		} else {
          $foto = $this->upload();
          
			$data = [
				'id_katagori_info' =>$this->input->post('id_katagori_info'),
				'nama_budaya' =>$this->input->post('budaya', TRUE),
              	'foto_budaya' => $foto,
				'keterangan' =>$this->input->post('keterangan', TRUE)
				];
			$this->db->insert('tb_budaya', $data);
			redirect('budaya/index');
		}

	}

	public function edit($id_budaya) {
		$data ['id_budaya'] = $this->db->get_where('tb_budaya', ['id_budaya' => $id_budaya])->row_array();
		
		$this->_rules();

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('layout/header');
			$this->load->view('budaya/edit', $data);	
			$this->load->view('layout/footer');
		} else {
			$foto = $_FILES ['foto_budaya'];
			if ($foto['name'] == '') {
			$data = [
				'id_katagori_info' =>$this->input->post('id_katagori_info'),
				'nama_budaya' =>$this->input->post('budaya', TRUE),
				'foto_budaya' => $this->input->post('old_foto'),
				'keterangan' =>$this->input->post('keterangan', TRUE)
				];
			} else {
				$data = [
				'id_katagori_info' =>$this->input->post('id_katagori_info'),
				'nama_budaya' =>$this->input->post('budaya', TRUE),
				'foto_budaya' => $this->upload(),
				'keterangan' =>$this->input->post('keterangan', TRUE)
				];
			}
			$this->db->update('tb_budaya', $data, ['id_budaya'=>$id_budaya]);
			redirect('budaya/index');
		}	
	}

	public function detail($id_budaya) {
		$data ['id_budaya'] = $this->db->get_where('tb_budaya', ['id_budaya'=> $id_budaya])->row_array();
		$this->load->view('layout/header');
		$this->load->view('budaya/detail', $data);
		$this->load->view('layout/footer');
	}

	public function hapus($id_budaya) {
		$this->db->where('id_budaya', $id_budaya);
		$this->db->delete('tb_budaya');
		redirect('budaya/index');
	}

	public function _rules() {
		$this->form_validation->set_rules('budaya', 'Nama budaya', 'required|trim');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');
	}
  
  private function upload() {
		$config['upload_path']          = './image/foto/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;
       
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('foto_budaya');
        return $this->upload->data('file_name');
	}
  
}

 ?>