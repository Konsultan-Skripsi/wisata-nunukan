<?php 

class User extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$data ['user'] = $this->db->get('tb_user')->result_array();
		
		$this->load->view('layout/header');
		$this->load->view('user/index', $data);	
		$this->load->view('layout/footer');
	}

	public function tambah() {
		$this->_rules();

		if ($this->form_validation->run()==FALSE) {

			$this->load->view('layout/header');
			$this->load->view('user/tambah');
			$this->load->view('layout/footer');
		} else {
			$data = [
				'nama_user' => $this->input->post('username', TRUE),
				'no_tlp' => $this->input->post('notlp', TRUE)
			];
			$this->db->insert('tb_user',$data);
			redirect('user/index');
		}
		
	}

	public function edit($id_user) {
		 $data ['id_user'] = $this->db->get_where('tb_user', ['id_user' => $id_user])->row_array(); 
		
		$this->_rules();

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('layout/header');
			$this->load->view('user/edit', $data);	
			$this->load->view('layout/footer');
		} else {
			$data = [
				'nama_user' => $this->input->post('username', TRUE),
				'no_tlp' => $this->input->post('notlp', TRUE)
			];
			$this->db->update('tb_user', $data, ['id_user'=>$id_user]);
			redirect('user/index');
		}

	}	

	public function hapus($id_user) {
		$this->db->where('id_user', $id_user);
		$this->db->delete('tb_user');
		redirect('user/index');
	}

	public function _rules() {
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('notlp', 'No.Tlp', 'required|trim|numeric');
	}

}

 ?>