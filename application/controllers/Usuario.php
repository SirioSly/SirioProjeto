<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    function __construct() {
        parent::__construct();
         if(!$this->session->userdata('estou_logado')){{
         redirect('Login');}
         } elseif ($this->session->userdata('logado')->perfilAcesso != "ADM") {
             redirect('home');
        }
        
        $this->load->model('Usuario_model', 'usuario');
        //contatos é um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "Sirio";
        $dados['completo'] = "SirioSly";
        $dados['usuario'] = $this->usuario->listar();
        $this->load->view('usuario', $dados);
        $this->load->view('template/footer');
    }

    public function inserir() {
        $data['nomeUsuario'] = mb_convert_case ($this->input->post('nomeUsuario'), MB_CASE_UPPER);
        $data['user'] = mb_convert_case ($this->input->post('user'), MB_CASE_LOWER);
        $data['senha'] = md5($this->input->post('senha'));
        $data['perfilAcesso']= mb_convert_case($this->input->post('perfilAcesso'),MB_CASE_UPPER);
        $result = $this->usuario->inserir($data);
        if ($result == true) {
            $this->session->set_flashdata('sucesso', 'Msg');
            redirect('usuario');
        } else {
            $this->session->set_flashdata('falha', 'msg');
            redirect('usuario');
        }
    }

    public function excluir($id) {
            $result = $this->usuario->deletar($id);
        if ($result == true) {
            $this->session->set_flashdata('excluirS', 'Msg');
            redirect('usuario');
        } else {
            $this->session->set_flashdata('excluirF', 'msg');
            redirect('usuario');
        }
    }

    function editar($id) {
        $this->load->view('template/header');
        $data['acronico'] = "MPF";
        $data['completo'] = "Meu Projeto Framework";
        $data['usuarioEditar'] = $this->usuario->editar($id);
        $this->load->view('usuarioEditar', $data);
        $this->load->view('template/footer');
    }

   public function atualizar(){
        $data['idusuario'] = $this->input->post('idusuario');
        $data['nomeUsuario'] = mb_convert_case ($this->input->post('nomeUsuario'), MB_CASE_UPPER);
        $data['user'] = mb_convert_case ($this->input->post('user'), MB_CASE_LOWER);
        $data['senha'] = md5($this->input->post('senha'));
        $data['perfilAcesso']= mb_convert_case($this->input->post('perfilAcesso'),MB_CASE_UPPER);
           $result = $this->usuario->atualizar($data);
        if ($result == true) {
            $this->session->set_flashdata('sucessoA', 'Msg');
            redirect('usuario');
        } else {
            $this->session->set_flashdata('falhaA', 'msg');
            redirect('usuario');
        }
    }

}
