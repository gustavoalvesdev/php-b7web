<?php 

# Define variável float (altura em metros)
$altura = 1.77;
$preco = 2.49; // Define variável float (preço em reais)

// Exibe o tipo da variável $altura (no caso 'double')
print gettype($altura);
print PHP_EOL; # Quebra de linha

// Exibe o valor da variável preço
print $preco;
print PHP_EOL;

/**
 * OPERAÇÕES MATEMÁTICAS COM DECIMAIS
 */
print 'Soma: ' . $altura + $preco;
print PHP_EOL;
print 'Subtração:' . $altura - $preco;
print PHP_EOL;
print 'Multiplicação: ' . $altura * $preco;
print PHP_EOL;
print 'Divisão: ' . $altura / $preco; 
print PHP_EOL;

// Arredonda $altura para o inteiro mais próximo
print $altura . ' arredondada: ' . round($altura);

print PHP_EOL;

// Arredonda $preco para o inteiro mais próximo
print $preco . ' arredondado: ' . round($preco);

print PHP_EOL;

// floor() arredonda "para baixo" (trunca o decimal)
print $altura . ' arredondando para cima: ' . floor($altura);

print PHP_EOL;

// ceil() arredonda para cima
print $preco . ' arredondando para baixo: ' . ceil($preco);
