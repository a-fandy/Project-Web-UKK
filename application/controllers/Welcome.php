<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
    {
        parent::__construct();
        $this->load->model('Kk_model');
	} 
	
	public function index()
	{
		$data['notif']="" ;
		session_destroy();
		$this->load->view('welcome_message',$data);
	}

	public function getKK()
	{
		$data['kk'] = $this->Kk_model->get_kk($this->input->post('Nokk'));
		if(isset($data['kk'][0])){
			$session_data = array(
				'Nokk' => $data['kk'][0]['Nokk'],
				);
			$this->session->set_userdata($session_data);
			redirect('Kk');
		}
		$data['notif']="Data Keluarga tidak ditemukan" ;
		$this->load->view('welcome_message',$data);
        
	}

	
	
}
