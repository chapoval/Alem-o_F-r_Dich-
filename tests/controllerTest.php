<?php

use PHPUnit\Framework\TestCase;

class ControllerTest extends TestCase {

    public function testView() {
        $controller = $this->getMockForAbstractClass('Controller');

        // Teste com um arquivo existente
        $this->expectOutputString('Conteúdo da view existente');
        $controller->view('view_existente', ['variavel' => 'valor']);

        // Teste com um arquivo inexistente
        $this->expectOutputString('Não foi possível encontrar o arquivo ../app/views/view_inexistente.php');
        $controller->view('view_inexistente', ['variavel' => 'valor']);
    }

    public function testCheckView() {
        $controller = $this->getMockForAbstractClass('Controller');

        // Teste com um arquivo existente
        $this->expectOutputString('Conteúdo da view existente');
        $this->invokeMethod($controller, 'checkView', ['../app/views/view_existente.php']);

        // Teste com um arquivo inexistente
        $this->expectOutputString('Não foi possível encontrar o arquivo ../app/views/view_inexistente.php');
        $this->invokeMethod($controller, 'checkView', ['../app/views/view_inexistente.php']);
    }

    private function invokeMethod(&$object, $methodName, array $parameters = array()) {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);

        return $method->invokeArgs($object, $parameters);
    }

}
