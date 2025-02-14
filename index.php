<?php
require_once 'src/calculadora.php';
use App\calculadora;
$resultado = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = isset($_POST['a']) ? floatval($_POST['a']) : 0;
    $b = isset($_POST['b']) ? floatval($_POST['b']) : 0;
    $calculadora = new calculadora();
    if (isset($_POST['suma'])) {
        $resultado = $calculadora->suma($a, $b);
    } elseif (isset($_POST['resta'])) {
        $resultado = $calculadora->resta($a, $b);
    } elseif (isset($_POST['multiplicacion'])) {
        $resultado = $calculadora->multiplicacion($a, $b);
    } elseif (isset($_POST['division'])) {
        $resultado = $calculadora->division($a, $b);
    } elseif (isset($_POST['raiz'])) {
        $resultado = $calculadora->raiz($a); // Solo toma el valor de $a
    }
}
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora PHP</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div>
            <h1>Calculadora</h1>
            <form method="post">
                <input type="number" step="any" name="a" placeholder="Primer número" required>
                <input type="number" step="any" name="b" placeholder="Segundo número">
                <div>
                    <button type="submit" name="suma">Suma</button>
                    <button type="submit" name="resta">Resta</button>
                    <button type="submit" name="multiplicacion">Multiplica</button>
                    <button type="submit" name="division">Divide</button>
                    <button type="submit" name="raiz">Raíz</button>
                </div>
            </form>
            <?php if ($resultado !== ''): ?>
                <div>
                    <h2>Resultado: <?php echo $resultado; ?></h2>
                </div>
            <?php endif; ?>
        </div>
    </body>

</html>