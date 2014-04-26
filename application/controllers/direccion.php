<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Direccion extends CI_Controller {

	function __construct(){
		parent::__construct();
		@ session_start();
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->library(array('session','form_validation'));
		$this->load->model("model_usuario");
		$alarma=0;


	} /* END function Admin */

function hrefini(){

$this->load->view('header/header_ini');
$this->load->view('form/inicio');
$this->load->view('footer');

}
function hrefaf(){

}
function hrefb(){

$this->load->view('usuario/baja');

}
function hrefarea(){

$this->load->view('header/header_area');
$this->load->view('form/fmrarea');
$this->load->view('footer');

}
function hrefa_area(){

$this->load->view('header/header_area');
$this->load->view('form/a_area');
$this->load->view('footer');

}
function hrefp(){

$this->load->view('usuario/cat_proveedor');

}
function hreft(){

$this->load->view('usuario/cat_traslado');

}
function hrefs(){

$this->load->view('usuario/saldos');

}
function hrefc(){
$this->load->view('header');
$this->load->view('form/cuentas_contables');
$this->load->view('footer');

}
function hrefsucur(){

$this->load->view('header/header_sucur');
$this->load->view('form/fmrsucursal');
$this->load->view('footer');

}
function hrefa_sucur(){

$this->load->view('header/header_sucur');
$this->load->view('form/a_sucursal');
$this->load->view('footer');

}

} /*END CLASS*/
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
