<?php
class Musico_model extends CI_Model {
	function header() {
		$data['title']       = $this->lang->line('home_title');
		$data['description'] = $this->lang->line('home_description');
		$data['keywords']    = $this->lang->line('home_keywords');

		return $data;
	}

	function page() {
		$data['astronomer']    = $this->lang->line('astronomer');
		$data['dancer']        = $this->lang->line('dancer');
		$data['fighter']       = $this->lang->line('fighter');
		$data['it']            = $this->lang->line('it');
		$data['know_more']     = $this->lang->line('know_more');
		$data['makeup_artist'] = $this->lang->line('makeup_artist');
		$data['musician']      = $this->lang->line('musician');
		$data['photographer']  = $this->lang->line('photographer');
		$data['sportsman']     = $this->lang->line('sportsman');
		$data['yogin']         = $this->lang->line('yogin');

		return $data;
	}
}
