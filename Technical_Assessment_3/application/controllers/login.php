<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('m_login');
		$this->load->library('session');
	}
 
	function index(){
		$this->load->view('v_login');
	}
	
	function aksi(){		
		$data=array(
			'user'=>$this->input->post('uname'),
			'password'=>$this->input->post('pass')
			);
		
		$cek=$this->m_login->m_aksi($data);
		
		if($cek == 1){
			$x=$this->session->set_userdata($data);			
			redirect('login/sukses');
		}else{
			echo "salah";
		}
	}
	
	function sukses(){
		redirect('welcome/');	
	}
}