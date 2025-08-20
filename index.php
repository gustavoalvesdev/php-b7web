<?php 

$texto = 'Pera, uva maçã e salada mista';

$posicaoPalavraUva = strpos($texto, 'uva');
$posicaoPalavraPera = strpos($texto, 'Pera');

echo "A palavra uva começa na posição $posicaoPalavraUva e a palavra pera começa na poosição $posicaoPalavraPera";

$parteString = substr($texto, 6, 12);

echo '<br>';    

echo 'Parte da String: ' . $parteString;

echo '<br>';

$tamanhoPalavraPera = strlen('pera');

$pera = substr($texto, $posicaoPalavraPera, $tamanhoPalavraPera);
echo 'Pera: ' . $pera;
