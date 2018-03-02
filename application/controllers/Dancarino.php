<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Dancarino extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	function index() {
		$this->load->model( 'dancarino_model' );
		$header = $this->dancarino_model->header();
		$page = $this->dancarino_model->page();

		$this->load->library( 'Smarty_template' );

		$this->smarty_template->assign( 'header', $header );
		$this->smarty_template->assign( 'text', $page );
$this->smarty_template->assign( 'item', 1 );
		$this->smarty_template->useCached( 'dancarino_home.tpl' );
		$this->smarty_template->display( 'dancarino/home.tpl' );
	}
}
