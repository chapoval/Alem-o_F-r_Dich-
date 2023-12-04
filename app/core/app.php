<?php

class App{

    private $path = "../app/controllers/";

    protected $controller = 'paginaErro';
    protected $metodo = 'index';

    public function __construct(){

        $vetor = $this->getURL();
        $pagina = $this->path.$vetor[0].".php";
        $posicao = $vetor[0];

        $this->getPagina($pagina, $posicao);

        $control = new $this->controller();

        $metodo = $vetor[1] ?? $this->metodo;
        
        if(!empty($vetor[1])){
            
            $this->checarMetodo($control, $metodo);
            unset($vetor[1]);

        }

        $v = array_values($vetor);
        call_user_func_array([$control, $metodo], $v);
    }

    private function getPagina($pagina, $posicao){
        if(file_exists($pagina)){
            require $pagina;
            $this->controller = $posicao;
        }else{
            require $this->path.$this->controller.".php";
        }
    }

    private function checarMetodo($instancia, $metodo){

        if(method_exists($instancia, $metodo)){
            $this->metodo = $metodo;
        }

    }

    private function getURL(){

        $url = $_GET['url'] ?? 'home';
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $vetor = explode("/", $url);
        
        return $vetor;

    }

    

}