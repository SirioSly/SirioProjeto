<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Funcao extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('estou_logado')) {
            redirect('Login');
        } elseif ($this->session->userdata('logado')->perfilAcesso != "ADM") {
            redirect('Home');
        }
        $this->load->model('Funcao_model', 'funcao');
        //contatos é um alias para o Contatos_model
    }

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "Sirio";
        $dados['completo'] = "Função";
        $dados['funcao'] = $this->funcao->listar();
        $this->load->view('funcao', $dados);
        $this->load->view('template/footer');
    }

    public function inserir() {
        $dados['nomeFuncao'] = $this->input->post('nomeFuncao');
        $result = $this->funcao->inserir($dados);
        if ($result == true) {
            $this->session->set_flashdata('sucesso', 'Msg');
            redirect('funcao');
        } else {
            $this->session->set_flashdata('falha', 'msg');
            redirect('funcao');
        }
    }

    public function excluir($id) {
        $result = $this->funcao->deletar($id);
        if ($result == true) {
            $this->session->set_flashdata('excluirS', 'Msg');
            redirect('funcao');
        } else {
            $this->session->set_flashdata('excluirF', 'msg');
            redirect('funcao');
        }
    }

    function editar($id) {
        $this->load->view('template/header');
        $data['acronico'] = "MPF";
        $data['completo'] = "Meu Projeto Framework";
        $data['funcaoEditar'] = $this->funcao->editar($id);
        $this->load->view('funcaoEditar', $data);
        $this->load->view('template/footer');
    }

    public function atualizar() {
        $data['idfuncao'] = $this->input->post('idfuncao');
        $data['nomeFuncao'] = $this->input->post('nomeFuncao');
           $result = $this->funcao->atualizar($data);
        if ($result == true) {
            $this->session->set_flashdata('sucessoA', 'Msg');
            redirect('funcao');
        } else {
            $this->session->set_flashdata('falhaA', 'msg');
            redirect('funcao');
        }
    }

}

