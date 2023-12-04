<?php

use PHPUnit\Framework\TestCase;


class ModelTest extends TestCase {

    public function testInsert() {
        $model = new Model();

        $info = [
            'nome' => 'Teste',
            'cpf' => '12345678901',
            'dataNascimento' => '2000-01-01',
            'email' => 'teste@example.com',
            'senha' => 'senha123'
        ];

        // Teste para inserir um novo aluno
        $this->expectOutputString(''); // A saída do método insert deve ser vazia
        $model->insert($info);

        // Verificar se o aluno foi inserido corretamente (pode adicionar mais verificações conforme necessário)
        $alunoInserido = $model->where(['email' => 'teste@example.com']);
        $this->assertNotEmpty($alunoInserido);
    }

    public function testWhere() {
        $model = new Model();

        $info = ['email' => 'teste@example.com'];

        // Teste para buscar um aluno com base no e-mail
        $aluno = $model->where($info);
        $this->assertNotEmpty($aluno);
    }

    public function testPrimeiroItem() {
        $model = new Model();

        $info = ['email' => 'teste@example.com'];

        // Teste para buscar o primeiro item com base no e-mail
        $aluno = $model->primeiro_item($info);
        $this->assertNotEmpty($aluno);
    }

    public function testValidarEmail() {
        $model = new Model();

        $info = ['email' => 'teste@example.com'];

        // Teste para validar o e-mail
        $aluno = $model->validarEmail($info);
        $this->assertNotEmpty($aluno);
    }

}
