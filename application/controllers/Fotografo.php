<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Fotografo extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	function index() {
		$this->load->model( 'fotografo_model' );
		$header = $this->fotografo_model->header();
		$page = $this->fotografo_model->page();

		$this->load->library( 'Smarty_template' );

		$this->smarty_template->assign( 'header', $header );
		$this->smarty_template->assign( 'text', $page );
$this->smarty_template->assign( 'item', 1 );
		$this->smarty_template->useCached( 'fotografo_home.tpl' );
		$this->smarty_template->display( 'fotografo/home.tpl' );
	}
}
