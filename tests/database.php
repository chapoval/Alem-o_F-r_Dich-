<?php

class Database{



    private function conexao(){
        $info = DBDRIVER.":host = ".DBHOST."; dbname = ".DBNAME;
        $conexao = new PDO($info, DBUSER, DBPASSWD);
        return $conexao;
    }

    
    public function buscarAlunoPorEmail($email) {
        // Configurações do banco de dados
        $host = DBHOST;
        $usuario_bd = DBUSER;
        $senha_bd = DBPASSWD;
        $nome_bd = DBNAME;

        try {
            // Conectar ao banco de dados usando PDO
            $conexao = new PDO("mysql:host=$host;dbname=$nome_bd", $usuario_bd, $senha_bd);

            // Preparar a consulta SQL
            $consulta = $conexao->prepare("SELECT * FROM alunos WHERE email = :email");

            // Bind do parâmetro e execução da consulta
            $consulta->bindParam(':email', $email);
            $consulta->execute();

            // Obter o resultado da consulta
            $aluno = $consulta->fetch(PDO::FETCH_ASSOC);

            // Retornar o resultado (pode ser um array associativo)
            return $aluno;
        } catch (PDOException $e) {
            // Tratar erros de conexão
            echo "Erro na conexão com o banco de dados: " . $e->getMessage();
            return null; // Ou outra forma de indicar erro, dependendo do seu contexto
        }
    }

    
    function alterarCampo($alunoId, $nomeCampo, $novoValor) {
        // Supondo que você tenha uma conexão ao banco de dados chamada $conexao

        $host = DBHOST;
        $usuario_bd = DBUSER;
        $senha_bd = DBPASSWD;
        $nome_bd = DBNAME;

        $conexao = new PDO("mysql:host=$host;dbname=$nome_bd", $usuario_bd, $senha_bd);

        // Query SQL de atualização
        $query = "UPDATE alunos SET $nomeCampo = :novoValor WHERE id = :alunoId";

        // Prepara a query
        $stmt = $conexao->prepare($query);

        // Liga os parâmetros
        $stmt->bindParam(":novoValor", $novoValor);
        $stmt->bindParam(":alunoId",$alunoId);

        // Executa a query
        $resultado = $stmt->execute();

        // Verifica se a atualização foi bem-sucedida
        if ($resultado) {
            echo "$nomeCampo atualizado com sucesso!";
        } else {
            echo "Erro ao atualizar $nomeCampo: " . $stmt->error;
        }

    }

    public function query($query, $info = [], $tipo = 'object'){
        
        $conexao = $this->conexao();
        $queryDatabase = "USE ".DBNAME."; " . $query;
        $stm = $conexao->prepare($queryDatabase);
        
        if($stm){

            $check = $stm->execute($info);

            if($check){

                if($tipo != 'object'){
                    
                    $tipo = PDO::FETCH_OBJ;

                }else{

                    $tipo = PDO::FETCH_ASSOC;
                    
                }

                $resultado = $stm->fetchAll($tipo);

                if(is_array($resultado) && count($resultado) > 0){

                    return $resultado;

                }

            }

        }

        return false;

    }

    public function criar_tabela_usuario1(){

        $query = " CREATE TABLE `alunos` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `nome` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
            `cpf` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
            `dataNascimento` date NOT NULL,
            `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
            `senha` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
            PRIMARY KEY (`id`)
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
        
        $this->query($query);
    }

    public function criar_tabela_usuario(){

        $query = " CREATE TABLE IF NOT EXISTS `alunos` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `nome` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
            `cpf` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
            `dataNascimento` date NOT NULL,
            `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
            `senha` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
            `cursoa1` tinyint(1) NOT NULL DEFAULT 0, 
            `cursoa2` tinyint(1) NOT NULL DEFAULT 0,
            `cursob1` tinyint(1) NOT NULL DEFAULT 0,
            `cursob2` tinyint(1) NOT NULL DEFAULT 0,
            `cursoe` tinyint(1) NOT NULL DEFAULT 0,
            PRIMARY KEY (`id`)
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
        $this->query($query);
    }

}