<?php

class Model extends Database{

    protected $table = "";

    public function insert($info){

        
        $info['cursoa1'] = 0;
        $info['cursoa2'] = 0;
        $info['cursob1'] = 0;
        $info['cursob2'] = 0;
        $info['cursoe'] = 0;

        c(array_values($info));

        if(!empty($this->campos)){
            foreach($info as $chave => $valor){
                if(!in_array($chave, $this->campos)){
                    unset($info[$chave]);
                }
            }
        }

        $chaves = array_keys($info);
        $valores = array_values($info);

        $query = "insert into ". $this->table;
        $query .= " (".implode(",",$chaves).") values (:".implode(",:",$chaves).")";

        $this->query($query,$info);
        
    }

    public function where($info){

        $query = "select * from ".$this->table." where ";
        $query .= " ".implode(",", $chaves)." && id = :id limit 1";

        foreach($chaves as $chave){
            $query .= $chave . "=:". $chave. " && ";
        }

        $query = trim($query, "&& ");
        $res = $this->query($query,$info);
        var_dump($res);

        if(is_array($res)){
            return $res;
        }

        return false;
    }

    public function primeiro_item($info){

        
        $chaves = array_keys($info);
        
        $query = "select * from ".$this->table." where ";

        foreach($chaves as $chave){
            $query .= $chave."=:".$chave." && ";
        }

        $query = trim($query, "&& ");
        $query .= " order by id desc limit 1";
        
        echo "# |".$query."| #";

        $res = $this->query($query, $info);
        

        if(is_array($res)){
            echo "Dentro do is array";
            print($res);
            return $res[0];
        }

        //return false;
    
    }

    public function validarEmail($info){
        
        $query = "select * from ".$this->table." where email =:email";
        $query .= " order by id desc limit 1";
        
        echo "# |".$query."| #";

        $res = $this->query($query, $info);
        

        if(is_array($res)){
            echo "Dentro do is array";
            print($res);
            return $res[0];
        }

    }

}