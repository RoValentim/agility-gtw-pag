<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Maquiador extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	function index() {
		$this->load->model( 'maquiador_model' );
		$header = $this->maquiador_model->header();
		$page = $this->maquiador_model->page();

		$this->load->library( 'Smarty_template' );

		$this->smarty_template->assign( 'header', $header );
		$this->smarty_template->assign( 'text', $page );
$this->smarty_template->assign( 'item', 1 );
		$this->smarty_template->useCached( 'maquiador_home.tpl' );
		$this->smarty_template->display( 'maquiador/home.tpl' );
	}
}
