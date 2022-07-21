<?php 

class Admin extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Data_model');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}

	public function index() {
		$data ['username'] = $this->Data_model->getAll();
		$this->load->view('layout/header');
		$this->load->view('admin/index',$data);
		$this->load->view('layout/footer');
	}

	public function tambah() {
		
			$this->_rules();
			
			if ($this->form_validation->run()==FALSE) {
				$this->load->view('layout/header');
				$this->load->view('admin/tambah');
				$this->load->view('layout/footer');
				
			} else {
				$this->Data_model->tambah_admin();
				redirect('admin/index');
			}
		
	}

	public function edit($id_admin) {
		$data ['id_admin'] = $this->Data_model->getId($id_admin);
		
		$this->_rules();
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header');
			$this->load->view('admin/edit', $data);	
			$this->load->view('layout/footer');
		} else {
			$this->Data_model->ubah_admin($id_admin);
			redirect('admin/index');
		}
		
	}

	public function hapus($id_admin) {
		$this->Data_model->hapus_admin($id_admin);
		redirect('admin/index');
	}

	public function _rules(){
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
	}

}

 ?>