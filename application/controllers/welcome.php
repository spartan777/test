<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('test_model');
    }

	public function index()
	{
		$this->load->view('public/cabeceras');
		$this->load->view('public/menu');
		$this->load->view('public/index');
		$this->load->view('public/footer');
	}

	public function cuestionario()
	{
		$this->load->view('public/cabeceras');
		$this->load->view('public/menu');
		$this->load->view('public/cuestionario');
		$this->load->view('public/footer');	
	}

	public function ingresar()
	{
		$this->load->view('public/cabeceras');
		$this->load->view('public/menu');
		$this->load->view('public/inicio_sesion');
		$this->load->view('public/footer');	
	}
	
	public function registro(){
		$data = array(
			'nombre' => $this->input->post('Nombre'),
			'paterno' => $this->input->post('Paterno'),
			'materno' => $this->input->post('Materno'),
			'correo' => $this->input->post('Correo'),
			'password' => $this->input->post('Password'),
			'escuela' => $this->input->post('Escuela')
		);

		$resultado = $this->test_model->guardar_registro($data);

		if($resultado == TRUE){
			/*echo "<script languaje='javascript'>
      	            alert('Registro exitoso.');
      	            window.location.href=".base_url()."'welcome/ingresar';
                  </script>";*/
            redirect("welcome/ingresar");
		}else{

		}
	}

	public function iniciar_sesion()
	{
		$correo = $this->input->post('Correo');
	    $password = $this->input->post('Password');

	    $resultado = $this->test_model->buscar_registro($correo, $password);

	    if ($resultado != FALSE) {
	    	foreach ($resultado->result() as $usuario) {
	    		$nombre_usuario = $usuario->nombre;
	    		$paterno_usuario = $usuario->paterno;
	    		$materno_usuario = $usuario->materno;
	    		$escuela_usuario = $uescuela->nombre;
	    		$correo_usuario = $usuario->correo;
	    	}
	    }

		$userdata = array(
            'nombre'  => $nombre_usuario,
            'paterno' => $paterno_usuario,
            'materno' => $materno_usuario,
            'escuela' => $escuela_usuario,
            'correo' => $correo_usuario,
            'logged_in' => TRUE
        );

		$this->session->set_userdata($userdata);
		redirect('test_private');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */