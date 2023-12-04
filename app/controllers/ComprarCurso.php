
<?php
class ComprarCurso extends Controller{

    public function index(){

        
    }

    public function cursoa1(){

        $aluno = new AlunoModel();
        $emailParaBuscar = $_SESSION['USER_DATA'];
        $_aluno = $aluno->buscarAlunoPorEmail($emailParaBuscar);

        $aluno->alterarCampo($_aluno['id'],'cursoa1',1);

        redirecionar('home');
    }

    public function cursoa2(){

        $aluno = new AlunoModel();
        $emailParaBuscar = $_SESSION['USER_DATA'];
        $_aluno = $aluno->buscarAlunoPorEmail($emailParaBuscar);

        $aluno->alterarCampo($_aluno['id'],'cursoa2',1);

        redirecionar('home');
    }

    public function cursob1(){

        $aluno = new AlunoModel();
        $emailParaBuscar = $_SESSION['USER_DATA'];
        $_aluno = $aluno->buscarAlunoPorEmail($emailParaBuscar);

        $aluno->alterarCampo($_aluno['id'],'cursob1',1);

        redirecionar('home');
    }

    public function cursob2(){

        $aluno = new AlunoModel();
        $emailParaBuscar = $_SESSION['USER_DATA'];
        $_aluno = $aluno->buscarAlunoPorEmail($emailParaBuscar);

        $aluno->alterarCampo($_aluno['id'],'cursob2',1);

        redirecionar('home');
    }

    public function cursoe(){

        $aluno = new AlunoModel();
        $emailParaBuscar = $_SESSION['USER_DATA'];
        $_aluno = $aluno->buscarAlunoPorEmail($emailParaBuscar);

        $aluno->alterarCampo($_aluno['id'],'cursoe',1);

        redirecionar('home');
    }

}