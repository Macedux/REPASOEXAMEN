<?php
require_once 'src/Calculadora.php';
use App\Calculadora;

$resultado = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = isset($_POST['a']) ? floatval($_POST['a']) : 0;
    $b = isset($_POST['b']) ? floatval($_POST['b']) : 0;
    $calculadora = new Calculadora();
    
    if (isset($_POST['suma'])) {
        $resultado = $calculadora->suma($a, $b);
    } elseif (isset($_POST['resta'])) {
        $resultado = $calculadora->resta($a, $b);
    } elseif (isset($_POST['multiplicacion'])) {
        $resultado = $calculadora->multiplicacion($a, $b);
    } elseif (isset($_POST['division'])) {
        $resultado = $calculadora->division($a, $b);
    } elseif (isset($_POST['raiz'])) {
        $resultado = $calculadora->raiz($a);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head