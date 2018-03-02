<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Lutador extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	function index() {
		$this->load->model( 'lutador_model' );
		$header = $this->lutador_model->header();
		$page = $this->lutador_model->page();

		$this->load->library( 'Smarty_template' );

		$this->smarty_template->assign( 'header', $header );
		$this->smarty_template->assign( 'text', $page );
$this->smarty_template->assign( 'item', 1 );
		$this->smarty_template->useCached( 'lutador_home.tpl' );
		$this->smarty_template->display( 'lutador/home.tpl' );
	}
}
