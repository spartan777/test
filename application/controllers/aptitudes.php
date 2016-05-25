<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aptitudes extends CI_Controller {
	
	public function index()
	{
		if ($this->session->userdata('login') == TRUE) {
			$this->load->view('public/cabeceras');
			$this->load->view('public/menu');
			$this->load->view('public/aptitudes');
			$this->load->view('public/footer');
		} 
		else
		{
			redirect('welcome/cuestionario');
		}
	}

	public function resultado()
	{
		$a1 = $this->input->post('A1', TRUE);
		$a2 = $this->input->post('A2', TRUE);
		$a3 = $this->input->post('A3', TRUE);
		$a4 = $this->input->post('A4', TRUE);
		$a5 = $this->input->post('A5', TRUE);
		$sumaA = $a1 + $a2 + $a3 + $a4 + $a5;

		$b1 = $this->input->post('B1', TRUE);
		$b2 = $this->input->post('B2', TRUE);
		$b3 = $this->input->post('B3', TRUE);
		$b4 = $this->input->post('B4', TRUE);
		$b5 = $this->input->post('B5', TRUE);
		$sumaB = $b1 + $b2 + $b3 + $b4 + $b5;

		$c1 = $this->input->post('C1', TRUE);
		$c2 = $this->input->post('C2', TRUE);
		$c3 = $this->input->post('C3', TRUE);
		$c4 = $this->input->post('C4', TRUE);
		$c5 = $this->input->post('C5', TRUE);
		$sumaC = $c1 + $c2 + $c3 + $c4 + $c5;

		$d1 = $this->input->post('D1', TRUE);
		$d2 = $this->input->post('D2', TRUE);
		$d3 = $this->input->post('D3', TRUE);
		$d4 = $this->input->post('D4', TRUE);
		$d5 = $this->input->post('D5', TRUE);
		$sumaD = $d1 + $d2 + $d3 + $d4 + $d5;

		$e1 = $this->input->post('E1', TRUE);
		$e2 = $this->input->post('E2', TRUE);
		$e3 = $this->input->post('E3', TRUE);
		$e4 = $this->input->post('E4', TRUE);
		$e5 = $this->input->post('E5', TRUE);
		$sumaE = $e1 + $e2 + $e3 + $e4 + $e5;

		$f1 = $this->input->post('F1', TRUE);
		$f2 = $this->input->post('F2', TRUE);
		$f3 = $this->input->post('F3', TRUE);
		$f4 = $this->input->post('F4', TRUE);
		$f5 = $this->input->post('F5', TRUE);
		$sumaF = $f1 + $f2 + $f3 + $f4 + $f5;

		$g1 = $this->input->post('G1', TRUE);
		$g2 = $this->input->post('G2', TRUE);
		$g3 = $this->input->post('G3', TRUE);
		$g4 = $this->input->post('G4', TRUE);
		$g5 = $this->input->post('G5', TRUE);
		$sumaG = $g1 + $g2 + $g3 + $g4 + $g5;

		$h1 = $this->input->post('H1', TRUE);
		$h2 = $this->input->post('H2', TRUE);
		$h3 = $this->input->post('H3', TRUE);
		$h4 = $this->input->post('H4', TRUE);
		$h5 = $this->input->post('H5', TRUE);
		$sumaH = $h1 + $h2 + $h3 + $h4 + $h5;

		$i1 = $this->input->post('I1', TRUE);
		$i2 = $this->input->post('I2', TRUE);
		$i3 = $this->input->post('I3', TRUE);
		$i4 = $this->input->post('I4', TRUE);
		$i5 = $this->input->post('I5', TRUE);
		$sumaI = $i1 + $i2 + $i3 + $i4 + $i5;

		$j1 = $this->input->post('J1', TRUE);
		$j2 = $this->input->post('J2', TRUE);
		$j3 = $this->input->post('J3', TRUE);
		$j4 = $this->input->post('J4', TRUE);
		$j5 = $this->input->post('J5', TRUE);
		$sumaJ = $j1 + $j2 + $j3 + $j4 + $j5;

		$k1 = $this->input->post('K1', TRUE);
		$k2 = $this->input->post('K2', TRUE);
		$k3 = $this->input->post('K3', TRUE);
		$k4 = $this->input->post('K4', TRUE);
		$k5 = $this->input->post('K5', TRUE);
		$sumaK = $k1 + $k2 + $k3 + $k4 + $k5;

		$data = array(
			'sumaA' => $sumaA,
			'sumaB' => $sumaB,
			'sumaC' => $sumaC,
			'sumaD' => $sumaD,
			'sumaE' => $sumaE,
			'sumaF' => $sumaF,
			'sumaG' => $sumaG,
			'sumaH' => $sumaH,
			'sumaI' => $sumaI,
			'sumaJ' => $sumaJ,
			'sumaK' => $sumaK
		);

		//$ordenar = sort($data);
		//var_export($ordenar);
		$this->load->view('public/cabeceras');
		$this->load->view('public/menu');
		$this->load->view('public/aptitudes_resultado', $data );
		$this->load->view('public/footer');
	}
}