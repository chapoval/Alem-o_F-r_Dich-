<?php

class Home extends Controller{

    public function index($array = []){
        $banco = new Database();
        $banco->criar_tabela_usuario();
        $this->view('home');

    }

    

}