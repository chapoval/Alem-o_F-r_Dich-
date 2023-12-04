<?php

use PHPUnit\Framework\TestCase;


class DatabaseTest extends TestCase {

    public function testBuscarAlunoPorEmail() {
        $database = new Database();

        // Teste com um e-mail existente
        $alunoExistente = $database->buscarAlunoPorEmail('email_existente@teste.com');
        $this->assertNotNull($alunoExistente);

        // Teste com um e-mail inexistente
        $alunoInexistente = $database->buscarAlunoPorEmail('email_inexistente@teste.com');
        $this->assertNull($alunoInexistente);
    }

    public function testAlterarCampo() {
        $database = new Database();

        // Suponha que você tenha um aluno existente com ID 1
        $alunoIdExistente = 1;

        // Teste para alterar o nome do aluno
        $database->alterarCampo($alunoIdExistente, 'nome', 'Novo Nome');
        // Verifique se o nome foi alterado corretamente

        // Teste para alterar a senha do aluno
        $database->alterarCampo($alunoIdExistente, 'senha', 'nova_senha');
        // Verifique se a senha foi alterada corretamente
    }

    public function testQuery() {
        $database = new Database();

        // Teste com uma consulta válida
        $consultaValida = $database->query("SELECT * FROM alunos WHERE cursoa1 = :cursoa1", ['cursoa1' => 1]);
        $this->assertIsArray($consultaValida);

        // Teste com uma consulta inválida
        $consultaInvalida = $database->query("SELECT * FROM alunos WHERE curso_inexistente = :curso_inexistente", ['curso_inexistente' => 1]);
        $this->assertFalse($consultaInvalida);
    }

    public function testCriarTabelaUsuario() {
        $database = new Database();

        // Teste para criar tabela de usuários
        $database->criar_tabela_usuario();
        // Verifique se a tabela foi criada corretamente
    }

    public function testCriarTabelaUsuario1() {
        $database = new Database();

        // Teste para criar tabela de usuários (versão 1)
        $database->criar_tabela_usuario1();
        // Verifique se a tabela foi criada corretamente
    }
}
