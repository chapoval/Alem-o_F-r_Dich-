<?php

use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    public function testGetURL()
    {
        // Crie uma instância da classe App
        $app = new App();

        // Defina o valor de $_GET['url'] para simular diferentes cenários
        $_GET['url'] = 'exemplo/rota';

        // Chame o método getURL e verifique se o resultado é o esperado
        $result = $app->getURL();

        $this->assertEquals(['exemplo', 'rota'], $result);
    }

    public function testChecarMetodoMetodoExistente()
    {
        // Crie uma instância da classe App
        $app = new App();

        // Crie uma classe de controle de exemplo com um método chamado 'index'
        $control = new class {
            public function index() {}
        };

        // Chame o método checarMetodo e verifique se o método é atribuído corretamente
        $app->checarMetodo($control, 'index');

        $this->assertEquals('index', $app->getMetodo());
    }

    // Adicione mais métodos de teste conforme necessário para cobrir outras partes do código
}
