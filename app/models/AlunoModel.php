<?php

class AlunoModel extends Model{

    protected $erros = [];
    protected $table = "alunos";

    protected $campos = [
        'nome',
        'cpf',
        'dataNascimento',
        'email',
        'senha',
        'cursoa1',
        'cursoa2',
        'cursob1',
        'cursob2',
        'cursoe'
    ];

    public function validar(){

        if(empty($this->erros)){
            return true;
        }

        return false;

    }

    

}