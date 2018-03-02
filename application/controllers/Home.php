<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	function index() {
		$this->lang->load('home');
		$this->load->model( 'home_model' );
		$header = $this->home_model->header();
		$page = $this->home_model->page();

		$this->load->library( 'Smarty_template' );

		$this->smarty_template->assign( 'header', $header );
		$this->smarty_template->assign( 'text', $page );
$this->smarty_template->assign( 'item', 1 );

		$this->smarty_template->useCached( 'home.tpl' );
		$this->smarty_template->display( 'home.tpl' );
	}
}
