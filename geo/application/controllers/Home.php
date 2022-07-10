<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('layout/home');
	}
	public function event(){
		$this->load->view('layout/event');
	}
	public function detailevent(){
		$this->load->view('layout/detailevent');
	}
	
}
