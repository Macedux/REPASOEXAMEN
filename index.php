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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            margin: 5px 0;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: calc(100% - 22px);
        }

        button:hover {
            background-color: #218838;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            font-size: 18px;
            color: #333;
            border: 1px solid #ddd;
            background-color: #e9ecef;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <div class="container">
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
            <div class="result">
                <h2>Resultado: <?php echo $resultado; ?></h2>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>
