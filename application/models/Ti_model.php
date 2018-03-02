<?php
class Ti_model extends CI_Model {
	function header() {
		$data['title']       = $this->lang->line('title');
		$data['description'] = $this->lang->line('description');
		$data['keywords']    = $this->lang->line('keywords');

		return $data;
	}

	function page() {
		$data['titulo_nav']		= $this->lang->line('titulo_nav');
		$data['titulo_aside']		= $this->lang->line('titulo_aside');

		$data['alt_photo']		= $this->lang->line('alt_photo');

		$data['titulo_dados_pessoais']	= $this->lang->line('titulo_dados_pessoais');
		$data['profissao']		= $this->lang->line('profissao');
		$data['nacionalidade']		= $this->lang->line('nacionalidade');
		$data['estado_civil']		= $this->lang->line('estado_civil');
		$data['idade']			= $this->lang->line('idade');
		$data['nascimento']		= $this->lang->line('nascimento');
		$data['endereco']		= $this->lang->line('endereco');
		$data['cidade']			= $this->lang->line('cidade');
		$data['estado']			= $this->lang->line('estado');
		$data['cep']			= $this->lang->line('cep');
		$data['pais']			= $this->lang->line('pais');
		$data['mobile']			= $this->lang->line('mobile');

		$data['titulo_objetivo']	= $this->lang->line('titulo_objetivo');
		$data['objetivo_desc']		= $this->lang->line('objetivo_desc');

		$data['titulo_escolaridade']	= $this->lang->line('titulo_escolaridade');
		$data['escola1_nome']		= $this->lang->line('escola1_nome');
		$data['escola1_curso']		= $this->lang->line('escola1_curso');
		$data['escola1_data']		= $this->lang->line('escola1_data');
		$data['escola1_cidade']		= $this->lang->line('escola1_cidade');
		$data['escola1_estado']		= $this->lang->line('escola1_estado');
		$data['escola1_pais']		= $this->lang->line('escola1_pais');
		$data['escola1_situacao']	= $this->lang->line('escola1_situacao');
		$data['escola2_nome']		= $this->lang->line('escola2_nome');
		$data['escola2_curso']		= $this->lang->line('escola2_curso');
		$data['escola2_data']		= $this->lang->line('escola2_data');
		$data['escola2_cidade']		= $this->lang->line('escola2_cidade');
		$data['escola2_estado']		= $this->lang->line('escola2_estado');
		$data['escola2_pais']		= $this->lang->line('escola2_pais');
		$data['escola2_situacao']	= $this->lang->line('escola2_situacao');
		$data['escola3_nome']		= $this->lang->line('escola3_nome');
		$data['escola3_curso']		= $this->lang->line('escola3_curso');
		$data['escola3_data']		= $this->lang->line('escola3_data');
		$data['escola3_cidade']		= $this->lang->line('escola3_cidade');
		$data['escola3_estado']		= $this->lang->line('escola3_estado');
		$data['escola3_pais']		= $this->lang->line('escola3_pais');
		$data['escola3_situacao']	= $this->lang->line('escola3_situacao');

		$data['titulo_cursos_resumido']	= $this->lang->line('titulo_cursos_resumido');
		$data['titulo_cursos']		= $this->lang->line('titulo_cursos');
		$data['curso1_nome']		= $this->lang->line('curso1_nome');
		$data['curso1_entidade']	= $this->lang->line('curso1_entidade');
		$data['curso2_nome']		= $this->lang->line('curso2_nome');
		$data['curso2_entidade']	= $this->lang->line('curso2_entidade');

		$data['titulo_resumo_resumido']	= $this->lang->line('titulo_resumo_resumido');
		$data['titulo_resumo']		= $this->lang->line('titulo_resumo');
		$data['resumo1']		= $this->lang->line('resumo1');
		$data['resumo2']		= $this->lang->line('resumo2');
		$data['resumo3']		= $this->lang->line('resumo3');
		$data['resumo4']		= $this->lang->line('resumo4');

		$data['titulo_exp_resumido']	= $this->lang->line('titulo_exp_resumido');
		$data['titulo_experiencia']	= $this->lang->line('titulo_experiencia');
		$data['exp1_empresa']		= $this->lang->line('exp1_empresa');
		$data['exp1_cidade']		= $this->lang->line('exp1_cidade');
		$data['exp1_estado']		= $this->lang->line('exp1_estado');
		$data['exp1_pais']		= $this->lang->line('exp1_pais');
		$data['exp1_cargo']		= $this->lang->line('exp1_cargo');
		$data['exp1_data']		= $this->lang->line('exp1_data');
		$data['exp1_periodo']		= $this->lang->line('exp1_periodo');
		$data['exp1_detalhe1']		= $this->lang->line('exp1_detalhe1');
		$data['exp1_detalhe2']		= $this->lang->line('exp1_detalhe2');
		$data['exp1_detalhe3']		= $this->lang->line('exp1_detalhe3');
		$data['exp1_detalhe4']		= $this->lang->line('exp1_detalhe4');
		$data['exp2_empresa']		= $this->lang->line('exp2_empresa');
		$data['exp2_cargo']		= $this->lang->line('exp2_cargo');
		$data['exp2_data']		= $this->lang->line('exp2_data');
		$data['exp2_detalhe1']		= $this->lang->line('exp2_detalhe1');
		$data['exp2_detalhe2']		= $this->lang->line('exp2_detalhe2');
		$data['exp2_detalhe3']		= $this->lang->line('exp2_detalhe3');
		$data['exp2_detalhe4']		= $this->lang->line('exp2_detalhe4');
		$data['exp3_empresa']		= $this->lang->line('exp3_empresa');
		$data['exp3_cargo']		= $this->lang->line('exp3_cargo');
		$data['exp3_data']		= $this->lang->line('exp3_data');
		$data['exp3_detalhe1']		= $this->lang->line('exp3_detalhe1');
		$data['exp3_detalhe2']		= $this->lang->line('exp3_detalhe2');
		$data['exp3_detalhe3']		= $this->lang->line('exp3_detalhe3');
		$data['exp3_detalhe4']		= $this->lang->line('exp3_detalhe4');
		$data['exp4_empresa']		= $this->lang->line('exp4_empresa');
		$data['exp4_cargo']		= $this->lang->line('exp4_cargo');
		$data['exp4_data']		= $this->lang->line('exp4_data');
		$data['exp4_detalhe1']		= $this->lang->line('exp4_detalhe1');
		$data['exp4_detalhe2']		= $this->lang->line('exp4_detalhe2');
		$data['exp4_detalhe3']		= $this->lang->line('exp4_detalhe3');
		$data['exp4_detalhe4']		= $this->lang->line('exp4_detalhe4');
		$data['exp5_empresa']		= $this->lang->line('exp5_empresa');
		$data['exp5_cargo']		= $this->lang->line('exp5_cargo');
		$data['exp5_data']		= $this->lang->line('exp5_data');
		$data['exp5_detalhe1']		= $this->lang->line('exp5_detalhe1');
		$data['exp5_detalhe2']		= $this->lang->line('exp5_detalhe2');
		$data['exp5_detalhe3']		= $this->lang->line('exp5_detalhe3');
		$data['exp5_detalhe4']		= $this->lang->line('exp5_detalhe4');
		$data['exp6_empresa']		= $this->lang->line('exp6_empresa');
		$data['exp6_cargo']		= $this->lang->line('exp6_cargo');
		$data['exp6_data']		= $this->lang->line('exp6_data');
		$data['exp6_detalhe1']		= $this->lang->line('exp6_detalhe1');
		$data['exp6_detalhe2']		= $this->lang->line('exp6_detalhe2');

		$data['titulo_observacoes']	= $this->lang->line('titulo_observacoes');
		$data['obs1']			= $this->lang->line('obs1');
		$data['obs2']			= $this->lang->line('obs2');
		$data['obs3']			= $this->lang->line('obs3');
		$data['obs4']			= $this->lang->line('obs4');

		return $data;
	}
}
