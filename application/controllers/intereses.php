<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Intereses extends CI_Controller {
	
	public function index()
	{
		if ($this->session->userdata('login') == TRUE) {
			$this->load->view('public/cabeceras');
			$this->load->view('public/menu');
			$this->load->view('public/intereses');
			$this->load->view('public/footer');
		} 
		else
		{
			redirect('welcome/cuestionario');
		}
	}
}