<?php 

class Login extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index() {
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('layout/layout');
		} else {
			$this->_cek();
		}
		
	}

	private function _cek() {
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		$data = $this->db->get_where('tb_admin', ['username' => $user , 'password'=>$pass])->row_array();

		if ($data != null) {
			redirect('home/index');
		} else {
			$this->session->set_flashdata('message', 'Gagal login');
			redirect('login');
		}
	}

	public function _rules() {
		 $this->form_validation->set_rules('username', 'Username', 'required|trim');
		  $this->form_validation->set_rules('password', 'Password', 'required|trim');
	}

}

 ?>