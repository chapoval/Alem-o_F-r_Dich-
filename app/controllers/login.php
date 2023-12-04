<?php

class Login extends Controller{

    public function index(){
        
        $this->view('login');
        $aluno = new AlunoModel();

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $emailParaBuscar = $_POST['email'];
            $alunoEncontrado = $aluno->buscarAlunoPorEmail($emailParaBuscar);
            if ($alunoEncontrado) {
                
                print_r($alunoEncontrado);
                if($_POST['senha'] == $alunoEncontrado['senha']){
                    Auth::login($_POST['email']);
                    redirecionar('home', $alunoEncontrado);
                }
                
            } else {
                
                echo "Aluno não encontrado ou erro na busca.";
            }
            
            

        }

    }

    

}