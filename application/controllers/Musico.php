<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Musico extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	function index() {
		$this->load->model( 'musico_model' );
		$header = $this->musico_model->header();
		$page = $this->musico_model->page();

		$this->load->library( 'Smarty_template' );

		$this->smarty_template->assign( 'header', $header );
		$this->smarty_template->assign( 'text', $page );
$this->smarty_template->assign( 'item', 1 );
		$this->smarty_template->useCached( 'musico_home.tpl' );
		$this->smarty_template->display( 'musico/home.tpl' );
	}
}
