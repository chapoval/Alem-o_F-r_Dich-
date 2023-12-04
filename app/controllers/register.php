<?php

class Register extends Controller{

    public function index(){

        $aluno = new AlunoModel();
        if(!empty($_POST)){
            $aluno->insert($_POST);

            redirecionar('login');
        }
        var_dump($_POST);
        
        $this->view('register');

    }

    

}