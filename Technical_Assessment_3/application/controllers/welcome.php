<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('m_welcome');
		$this->load->library('session');
	}
 
	function index(){
		$data = array(
			'username' => $this->session->userdata('user')
			);
		$data['data_member'] = $this->m_welcome->m_lihat($data);
		$this->load->view('v_welcome',$data);
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect('login/');
	}
}
?>