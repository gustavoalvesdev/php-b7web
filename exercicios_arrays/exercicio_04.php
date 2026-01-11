<?php 

$precos = ['Sabonete' => 3.75, 'Bicicleta' => 1200.00, 'Arroz' => 35.92];

$precos['Bicicleta'] += 10;

$precos['Sabonete'] -= 1;

print_r($precos);
