<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');

require_once( APPPATH.'third_party/Smarty/libs/Smarty.class.php' );

class Smarty_template extends Smarty {
	var $debug = false;

	public function __construct() {
		parent::__construct();

		$this->caching = 1;

		$this->template_dir = APPPATH . 'views';
		$this->compile_dir  = APPPATH . 'third_party/Smarty/tmp';
		$this->cache_dir    = APPPATH . 'cache';

		if( ! is_writable( $this->compile_dir ) ) {
		    // make sure the compile directory can be written to
		    @chmod( $this->compile_dir, 0777 );
		}

		$this->assign( 'FCPATH', FCPATH );     // path to website
		$this->assign( 'APPPATH', APPPATH );   // path to application directory
		$this->assign( 'BASEPATH', BASEPATH ); // path to system directory

		log_message('debug', "Smarty Class Initialized");
	}

	function setDebug( $debug=true ) {
		$this->debug = $debug;
	}

	public function useCached( $tpl, $cacheId = null ) {
		if ( $this->isCached( $tpl, $cacheId ) ) {
			$this->display( $tpl, $cacheId );
			exit();
		}
	}

	function view($template, $data = array(), $return = FALSE) {
		if( ! $this->debug ) {
			$this->error_reporting = false;
		}

		$this->error_unassigned = false;

		foreach( $data as $key => $val ) {
			$this->assign( $key, $val );
		}

		if( $return == FALSE ) {
			$CI =& get_instance();

			if( method_exists( $CI->output, 'set_output' ) ) {
				$CI->output->set_output( $this->fetch($template) );
			} else {
				$CI->output->final_output = $this->fetch($template);
			}

			return;
		} else {
			return $this->fetch( $template );
		}
	}
}
