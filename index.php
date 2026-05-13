<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>
    <main class="container">
<?php 

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['calcular'])) {

    $peso = $_GET['peso'];
    $altura = $_GET['altura'];

    if (isset($peso) && !empty($peso) && isset($altura) && !empty($altura)) {


        $imc = $peso / ($altura * $altura);

        if ($imc < 18.5) {
            echo '<h2>Abaixo do peso</h2>';
        } else if ($imc >= 18.5 && $imc < 24.9) {
            echo '<h2>Peso normal</h2>';
        } else if ($imc >= 25.0 && $imc <= 29.9 ) {
            echo '<h2>Sobrepeso</h2>';
        } else if ($imc > 29.9 && $imc <= 34.9) {
            echo '<h2>Obesidade grau I</h2>';
        } else if ($imc > 34.9  &&  $imc <= 39.9) {
            echo '<h2>Obesidade grau II</h2>';
        } else if ($imc >= 40) {
            echo '<h2>Obesidade grau III (mórbida)</h2>';
        }

        echo "<br><a href='index.php'>Voltar</a>";

        exit;

    } else {
        echo '<h2>Por favor, preencha todos os campos.</h2>';
    }
}



?>

        <h1>Calculadora de IMC</h1>
        
        <form method="GET">
            <label for="peso">Peso (kg):</label><br>
            <input type="number" id="peso" name="peso" step="0.1" required><br><br>
            <label for="altura">Altura (m):</label><br>
            <input type="number" id="altura" name="altura" step="0.01" required><br><br>
            <input type="submit" name="calcular" value="Calcular">
        </form>
    </main>


</body>
</html>