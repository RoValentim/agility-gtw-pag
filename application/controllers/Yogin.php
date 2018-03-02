<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Yogin extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	function index() {
		$this->load->model( 'yogin_model' );
		$header = $this->yogin_model->header();
		$page = $this->yogin_model->page();

		$this->load->library( 'Smarty_template' );

		$this->smarty_template->assign( 'header', $header );
		$this->smarty_template->assign( 'text', $page );
$this->smarty_template->assign( 'item', 1 );
		$this->smarty_template->useCached( 'yogin_home.tpl' );
		$this->smarty_template->display( 'yogin/home.tpl' );
	}
}
