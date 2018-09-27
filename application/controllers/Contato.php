<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Contatos_model', 'contatos');
        $this->load->model('Funcao_model', 'funcao');
        //contatos é um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "Sirio Projeto";
        $dados['completo'] = "Meu Projeto";
        $dados['contatos'] = $this->contatos->listar();
        $dados['funcao'] = $this->funcao->listar();
        $this->load->view('contato', $dados);
        $this->load->view('template/footer');
    }

    public function inserir() {
        $dados['nome'] = $this->input->post('nome');
        $dados['email'] = $this->input->post('email');
        $dados['funcao_idfuncao'] = $this->input->post('idfuncao');
        $this->contatos->inserir($dados);
        redirect('contato');
    }

    public function excluir($id) {
        $this->contatos->deletar($id);
        redirect('contato');
    }

    function editar($id) {
        $this->load->view('template/header');
        $data['acronico'] = "Sirio";
        $data['completo'] = "Meu Projeto";
        $data['contatoEditar'] = $this->contatos->editar($id);
        $data['funcao'] = $this->funcao->listar();
        $this->load->view('template/header');
        $this->load->view('contatoEditar', $data);
        $this->load->view('template/footer');
    }

    public function atualizar() {
        $data['id'] = $this->input->post('id');
        $data['nome'] = $this->input->post('nome');
        $data['email'] = $this->input->post('email');
        $data['funcao_idfuncao'] = $this->input->post('idfuncao');
        $this->contatos->atualizar($data);
        redirect('contato');
    }

}
