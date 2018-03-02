<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Esportista extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	function index() {
		$this->load->model( 'esportista_model' );
		$header = $this->esportista_model->header();
		$page = $this->esportista_model->page();

		$this->load->library( 'Smarty_template' );

		$this->smarty_template->assign( 'header', $header );
		$this->smarty_template->assign( 'text', $page );
$this->smarty_template->assign( 'item', 1 );
		$this->smarty_template->useCached( 'esportista_home.tpl' );
		$this->smarty_template->display( 'esportista/home.tpl' );
	}
}
