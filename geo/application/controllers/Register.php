<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Register extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}
 
	public function sign()
	{
		$this->load->view('login/sign');
	}
	public function proses()
	{
		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==true)
	   	{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$email = $this->input->post('email');
			$created_at = $this->input->post('created_at');
			$last_login = $this->input->post('last_login');
			$status = $this->input->post('status');
			$role = $this->input->post('role');
			$this->auth->register($username,$password,$email);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('index.php/login/index');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('register');
		}
	}
}
?>