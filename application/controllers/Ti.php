<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Ti extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->library('session');
	}

	function index() {
		if( !$this->session->userdata('language') ) {
			$this->session->set_tempdata( 'language', 'portuguese-brazilian', 300 );
		}

		$this->lang->load( array('ti_home','ti_header'), $this->session->language );

		$this->load->model( 'ti_model' );
		$header = $this->ti_model->header();
		$page = $this->ti_model->page();
		$page['titulo_footer'] = $this->lang->line('titulo_footer');

		$this->load->library( 'Smarty_template' );

		$this->smarty_template->assign( 'header', $header );
		$this->smarty_template->assign( 'text', $page );

		$this->smarty_template->useCached( 'ti_home.tpl' );
		$this->smarty_template->display( 'ti/home.tpl' );
	}

	function complete() {
		if( !$this->session->userdata('language') ) {
			$this->session->set_tempdata( 'language', 'portuguese-brazilian', 300 );
		}

		$this->lang->load( array('ti_complete','ti_header'), $this->session->language );

		$this->load->model( 'ti_model' );
		$header = $this->ti_model->header();
		$page = $this->ti_model->page();
		$page['titulo_footer'] = $this->lang->line('titulo_footer');

		$this->load->library( 'Smarty_template' );

		$this->smarty_template->assign( 'header', $header );
		$this->smarty_template->assign( 'text', $page );

		$this->smarty_template->useCached( 'ti_complete.tpl' );
		$this->smarty_template->display( 'ti/complete.tpl' );
	}
}
