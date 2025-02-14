<?php
namespace App\Tests; 
use PHPUnit\Framework\TestCase;
use App\calculadora;

class CalculadoraTest extends TestCase
{
    public function testSuma()
    {
        $calc = new Calculadora();
        $resultado = $calc->suma(3, 2);
        $this->assertEquals(5, $resultado);          // Verifica que el resultado sea 5
        $this->assertSame(5, $resultado);             // Verifica que el resultado sea el mismo tipo y valor
        $this->assertGreaterThan(4, $resultado);      // Verifica que el resultado sea mayor que 4
        $this->assertNotNull($resultado);             // Verifica que el resultado no sea nulo
    }

    public function testResta()
    {
        $calc = new Calculadora();
        $resultado = $calc->resta(3, 2);
        $this->assertEquals(1, $resultado);          // Verifica que el resultado sea 1
        $this->assertGreaterThan(0, $resultado);      // Verifica que el resultado sea mayor que 0
        $this->assertNotNull($resultado);             // Verifica que el resultado no sea nulo
    }

    public function testMultiplicacion()
    {
        $calc = new Calculadora();
        $resultado = $calc->multiplicacion(3, 2);
        $this->assertEquals(6, $resultado);          // Verifica que el resultado sea 6
        $this->assertGreaterThan(0, $resultado);      // Verifica que el resultado sea mayor que 0
        $this->assertNotNull($resultado);             // Verifica que el resultado no sea nulo
    }

    public function testDivision()
    {
        $calc = new Calculadora();
        $resultado = $calc->division(4, 2);
        $this->assertEquals(2, $resultado);          // Verifica que el resultado sea 2
        $this->assertGreaterThan(0, $resultado);      // Verifica que el resultado sea mayor que 0
        $this->assertNotNull($resultado);             // Verifica que el resultado no sea nulo
    }

    public function testRaiz()
    {
        $calc = new Calculadora();
        $resultado = $calc->raiz(4);
        $this->assertEquals(2, $resultado);          // Verifica que la raíz cuadrada de 4 sea 2
        $this->assertGreaterThan(0, $resultado);      // Verifica que el resultado sea mayor que 0
        $this->assertNotNull($resultado);             // Verifica que el resultado no sea nulo
    }
}