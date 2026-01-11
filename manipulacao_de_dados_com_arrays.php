<?php 

$frutas = ['Laranja', 'Limão'];

$frutas[] = 'Banana';
array_push($frutas, 'Uva');

print_r($frutas);

echo PHP_EOL;

// Remove item do início do array
array_shift($frutas);

print_r($frutas);

// Adiciona item no início do array
array_unshift($frutas, 'Acerola');

print 'Removendo item do fim do array' . PHP_EOL;

array_pop($frutas);

print_r($frutas) . PHP_EOL;

$frutas[3] = 'Morango';

$frutas[2] = 'Pêssego';

// Ordena array pelo indice [key]
ksort($frutas);

$tamanhoDoArray = count($frutas);

print $tamanhoDoArray;

echo PHP_EOL;

print_r($frutas);

echo PHP_EOL;

if (in_array('Maçã', $frutas)) {
    echo 'Sim, temos Maçã';
} else {
    echo 'Não temos Maçã';
}

$outrasFrutas = array('Maçã', 'Abacaxi', 'Limão');

$todasAsFrutas = array_merge($frutas, $outrasFrutas);

echo PHP_EOL;

print_r($todasAsFrutas);

echo PHP_EOL;

$contagem = array_count_values($todasAsFrutas);

print_r($contagem);

$itensUnicos = array_unique($todasAsFrutas);

echo PHP_EOL;

print_r($itensUnicos);
