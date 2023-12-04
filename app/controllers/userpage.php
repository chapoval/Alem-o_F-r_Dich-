<?php

class Userpage extends Controller{

    public function index(){
        
        $aluno = new AlunoModel();
        
        $this->view('userpage/userpage', $alunoEncontrado);

    }

    public function buscarAluno(){

        $emailParaBuscar = $_SESSION['USER_DATA'];
        $alunoEncontrado = $aluno->buscarAlunoPorEmail($emailParaBuscar);
        return $alunoEncontrado;

    }

      

}