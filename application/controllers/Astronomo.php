<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Astronomo extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	function index() {
		$this->load->model( 'astronomo_model' );
		$header = $this->astronomo_model->header();
		$page = $this->astronomo_model->page();

		$this->load->library( 'Smarty_template' );

		$this->smarty_template->assign( 'header', $header );
		$this->smarty_template->assign( 'text', $page );
$this->smarty_template->assign( 'item', 1 );
		$this->smarty_template->useCached( 'astronomo_home.tpl' );
		$this->smarty_template->display( 'astronomo/home.tpl' );
	}
}
