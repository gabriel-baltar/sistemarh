<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supervisor extends CI_Controller {
	
    public function __construct(){
        parent::__construct();
		$this->load->model('supervisor_model');
    }	

	public function index()
	{
		$dados['title'] = "Supervisor | Relatórios";
		$dados['avaliacao'] = $this->supervisor_model->listarAvaliacao()->result();
		$dados['curriculo'] = $this->supervisor_model->listarCurriculo()->result();
		$dados['status'] = $this->supervisor_model->listarStatus()->result();
		$dados['cargos'] = $this->supervisor_model->listarCargos()->result();
		$this->load->view('template/supervisor/header', $dados);
		$this->load->view('pages/supervisor/relatorios', $dados);
		$this->load->view('template/supervisor/footer');
	}
	
	public function cadastraCandidato()
	{
		$dados['avaliacao'] = $this->supervisor_model->listarAvaliacao()->result();
		$dados['curriculo'] = $this->supervisor_model->listarCurriculo()->result();
		$dados['status'] = $this->supervisor_model->listarStatus()->result();
		$dados['cargos'] = $this->supervisor_model->listarCargos()->result();
		$this->load->view('template/supervisor/header');
		$this->load->view('pages/supervisor/cadastra_candidato', $dados);
		$this->load->view('template/supervisor/footer');
	}
	
	public function cadastrarCandidato()
	{
		$tb_candidato['nome'] = $this->input->post("nome");
		$tb_candidato['sobrenome'] = $this->input->post("sobrenome");
		$tb_candidato['email'] = $this->input->post("email");
		$tb_candidato['telefone'] = $this->input->post("telefone");
		$tb_candidato['id_curriculo'] = $this->input->post("curriculo");
		$tb_candidato['cargo_id'] = $this->input->post("cargo");
		$tb_candidato['dt_processo'] = $this->input->post("data");
		$tb_candidato['observacao'] = $this->input->post("observacao");
		if($this->db->insert('tb_candidato', $tb_candidato)){
			$this->session->set_flashdata('msg-sucesso', "Dados salvos com sucesso.");
		}else{
			$this->session->set_flashdata('msg-erro', "Ocorreu alguma falha, registro n?o foi salvo.");
		}
		redirect(base_url('/supervisor'));
	}
	
	
	public function visualizaFuncionarios()
	{
		$dados['title'] = "Supervisor | Visualizar Funcionários";
		$dados['avaliacao'] = $this->supervisor_model->listarAvaliacao()->result();
		$dados['curriculo'] = $this->supervisor_model->listarCurriculo()->result();
		$dados['status'] = $this->supervisor_model->listarStatus()->result();
		$dados['cargos'] = $this->supervisor_model->listarCargos()->result();		
		$dados['funcionarios'] = $this->supervisor_model->listarFuncionarios()->result();
		$this->load->view('template/supervisor/header', $dados);
		$this->load->view('pages/supervisor/visualiza_funcionarios', $dados);
		$this->load->view('template/supervisor/footer');
	}	
	
	public function processosAgendados()
	{	
		$dados['cargos'] = $this->supervisor_model->listarCargos()->result();
		$dados['title'] = "Supervisor | Processos Agendados";
		$dados['agendados'] = $this->supervisor_model->listarAgendados()->result();
		$this->load->view('template/supervisor/header', $dados);
		$this->load->view('pages/supervisor/processos_agendados', $dados);
		$this->load->view('template/supervisor/footer');
	}	
	
	public function processosRealizados()
	{
		$dados['cargos'] = $this->supervisor_model->listarCargos()->result();
		$dados['title'] = "Supervisor | Processos Realizados";
		$dados['realizados'] = $this->supervisor_model->listarRealizados()->result();
		$this->load->view('template/supervisor/header', $dados);
		$this->load->view('pages/supervisor/processos_realizados', $dados);
		$this->load->view('template/supervisor/footer');
	}	
	public function cadastrarUsuario()
	{
		$tb_funcionario['nome'] = $this->input->post("nome");
		$tb_funcionario['sobrenome'] = $this->input->post("sobrenome");
		$tb_funcionario['email'] = $this->input->post("email");
		$tb_funcionario['dt_nascimento'] = $this->input->post("dt_nascimento");
		$tb_funcionario['cargo_id'] = $this->input->post("cargo");
		if($this->db->insert('tb_funcionario', $tb_funcionario)){
			$this->session->set_flashdata('msg-sucesso', "Dados salvos com sucesso.");
		}else{
			$this->session->set_flashdata('msg-erro', "Ocorreu alguma falha, registro n?o foi salvo.");
		}
		redirect(base_url('supervisor'));
	}	
	public function teste()
	{
		$dados['title'] = "Supervisor | Relatórios";
		$dados['avaliacao'] = $this->supervisor_model->listarAvaliacao()->result();
		$dados['curriculo'] = $this->supervisor_model->listarCurriculo()->result();
		$dados['status'] = $this->supervisor_model->listarStatus()->result();
		$dados['cargos'] = $this->supervisor_model->listarCargos()->result();
		$this->load->view('pages/teste/header/header');
		$this->load->view('pages/teste/body/bodyindex');
		$this->load->view('pages/teste/footer/footer');
	}
}