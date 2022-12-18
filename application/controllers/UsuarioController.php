<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioController extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

    function __construct()
    {
        parent::__construct();
        $this->load->model('usuario');
        $this->load->helper('url');
    }
    
	public function index()
	{

		$this->load->view('index');
        // $this->usuario->get_last_ten_entries();
	}

    public function datos(){

        $data = array(
            'naturaal' => 1,
            'entero' => 6,
            'racional' => 3,
            'irracional' => 2,
            'primo' => 1,
            'compuesto' => 3,
        );

        if ($this->usuario->insertar($data)) {
            echo "Se inserto con exito";
        }
        

    }
}
