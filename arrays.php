<?php 

$pessoa1 = [
    'nome' => 'Gustavo',
    'idade' => 34,
    'cidade' => 'Ferraz'
];

$pessoa2 = [
    'nome' => 'Maria',
    'idade' => 22,
    'cidade' => 'Mogi'
];

$pessoa3 = [
    'nome' => 'Antonio',
    'idade' => 55,
    'cidade' => 'Poá'
];

$pessoas = [ 
    $pessoa1,
    $pessoa2,
    $pessoa3
];

echo "<table border='1'>";

echo "<thead>";
    echo "<th>Nome</th>";
    echo "<th>Idade</th>";
    echo "<th>Cidade</th>";
echo "</thead>";
echo "<tbody>";

foreach ($pessoas as $pessoa => $info) {

    echo "<tr>";
    echo "<td>" . $info['nome'] . "</td>"; 
    echo "<td>" . $info['idade'] . "</td>"; 
    echo "<td>" . $info['cidade'] . "</td>"; 
    echo "</tr>";

}

echo "</tbody>";

echo "</table>";