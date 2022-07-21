<?php


class Aplikasi_mo extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Data_model');
	}	

	public function index(){
		$this->load->view('indexmobile');
	}

	public function hal_wisata(){
		$data ['wisata']= $this->db->get('tb_wisata')->result_array();
		
		$this->load->view('template/header');
		$this->load->view('wisatam', $data);
		$this->load->view('template/footer');
	}

	public function hal_budaya() {
		$data ['budaya']= $this->db->get('tb_budaya')->result_array();
		
		$this->load->view('template/header');
		$this->load->view('budayam', $data);
		$this->load->view('template/footer');
	}

	public function lap_acara() {
		
		$data ['join'] = $this->Data_model->joinTabel();

		// var_dump($data);die;
		$this->load->view('template/header');
		$this->load->view('acara',$data);
		$this->load->view('template/footer');

	}

	public function lap_wisata() {
		$data ['data'] = $this->Data_model->tabelJoin();

		$this->load->view('template/header');
		$this->load->view('wisatain',$data);
		$this->load->view('template/footer');
	}

	public function det_wis($id_wisata) {
		$data ['wisata'] =  $this->db->get_where('tb_wisata', ['id_wisata' => $id_wisata])->row_array();
		
		$this->load->view('template/header');
		$this->load->view('detail_wisata', $data);
		$this->load->view('template/footer');
	}

	public function det_budaya($id_budaya) {
		$data ['budaya'] =  $this->db->get_where('tb_budaya', ['id_budaya' => $id_budaya])->row_array();

		$this->load->view('template/header');
		$this->load->view('detail_budaya', $data);
		$this->load->view('template/footer');
	}

	public function detail_acara($id_laporan_acara) {
		// $data ['join'] = $this->Data_model->joinTabel();
		$data ['acar'] =  $this->db->get_where('tb_laporan_acara', ['id_laporan_acara' => $id_laporan_acara])->row_array();

		$this->load->view('template/header');
		$this->load->view('detail_acara', $data);
		$this->load->view('template/footer');
	}

	public function detail_wisata($id_laporan_wisata) {
		$data ['wisata'] =  $this->db->get_where('tb_laporan_wisata', ['id_laporan_wisata' => $id_laporan_wisata])->row_array();
		// var_dump($data);die;
		$this->load->view('template/header');
		$this->load->view('detlapwis', $data);
		$this->load->view('template/footer');
	}

	public function info() {
		$this->load->view('template/header');
		$this->load->view('info');
		$this->load->view('template/footer');
	}

}	