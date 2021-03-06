<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    public function __construct(){                
        parent::__construct();      
        $this->load->model('padrao_model');
		$this->load->model('gerente_model');
		$this->load->model('supervisor_model');
		$this->load->model('funcionario_model');
    }
	
	public function login(){
		$login = $this->input->post('login');
		$senha = MD5($this->input->post('senha'));
		$gerente  		= $this->padrao_model->selectGerente($login,$senha)->result();
		$supervisor		= $this->padrao_model->selectSupervisor($login,$senha)->result();
		$auxiliar  		= $this->padrao_model->selectAuxiliar($login,$senha)->result();
		$funcionario  	= $this->padrao_model->selectFuncionario($login,$senha)->result();
		
		if($gerente){
			foreach($gerente as $g)
			$this->session->set_userdata('nome', $g->nome);
			$this->session->set_userdata('id', $g->id_usuario);
			$this->session->set_userdata('usuario', $g->usuario);
			$data['avaliacao'] = $this->gerente_model->listarAvaliacao()->result();
			$data['curriculo'] = $this->gerente_model->listarCurriculo()->result();
			$data['status'] = $this->gerente_model->listarStatus()->result();
			$data['cargos'] = $this->gerente_model->listarCargos()->result();
			$data['title'] = "Gerente";
			$this->load->view('template/gerente/header', $data);
			$this->load->view('pages/gerente/relatorios');
			$this->load->view('template/gerente/footer');		
			
		}elseif($supervisor){
			foreach($supervisor as $s)
			$this->session->set_userdata('nome', $s->nome);
			$this->session->set_userdata('id', $s->id_usuario);
			$this->session->set_userdata('usuario', $s->usuario);			
			$data['avaliacao'] = $this->gerente_model->listarAvaliacao()->result();
			$data['curriculo'] = $this->gerente_model->listarCurriculo()->result();
			$data['status'] = $this->gerente_model->listarStatus()->result();
			$data['cargos'] = $this->gerente_model->listarCargos()->result();
			$data['title'] = "Supervisor";
			$this->load->view('template/supervisor/header', $data);
			$this->load->view('pages/supervisor/relatorios');
			$this->load->view('template/supervisor/footer');	
			
		}elseif($auxiliar){
			foreach($auxiliar as $a)
			$this->session->set_userdata('nome', $a->nome);
			$this->session->set_userdata('id', $a->id_usuario);
			$this->session->set_userdata('usuario', $a->usuario);						
			$data['avaliacao'] = $this->gerente_model->listarAvaliacao()->result();
			$data['curriculo'] = $this->gerente_model->listarCurriculo()->result();
			$data['status'] = $this->gerente_model->listarStatus()->result();
			$data['cargos'] = $this->gerente_model->listarCargos()->result();			
			$data['title'] = "Auxiliar";
			$this->load->view('template/auxiliar/header', $data);
			$this->load->view('pages/auxiliar/relatorios');
			$this->load->view('template/auxiliar/footer');
			
		}elseif($funcionario){
			foreach($funcionario as $f)
			$this->session->set_userdata('nome',$f->nome);
			$this->session->set_userdata('id',$f->id);
			$this->session->set_userdata('usuario', $f->usuario);
			//$data['funcionario'] = $this->funcionario_model->buscarFuncionario()->result();	
			$dadosSessao['funcionario'] = $funcionario;
			$dadosSessao['logado'] = TRUE;
			$dadosSessao['msg'] = "";			
			$data['title'] = "Funcionário";
			$this->load->view('template/funcionarios/header', $data);
			$this->load->view('pages/funcionarios/index');
			$this->load->view('template/funcionarios/footer');			
		
		}else{
			$dadosSessao['funcionario'] = NULL;
			$dadosSessao['logado'] = FALSE;
			$dadosSessao['msg'] = "Usuário ou senha incorreta";
			$this->session->set_userdata($dadosSessao);                
			redirect(base_url("/"));			
		}	
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('/');
	}    
}

