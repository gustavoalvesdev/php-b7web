<?php 

$materias_primas = [];

$materia1 = [
    'id' => 1,
    'categoria' => 'MDF',
    'descricao' => 'MDF Branco TX',
    'unidade' => 'Chapa',
    'espessura_medida' => '18 mm',
    'fornecedor' => 'Duratex',
    'custo_unitario_brl' => 32000,
    'estoque_atual' => 45,
    'estoque_minimo' => 10
];

$materia2 = [
    'id' => 2,
    'categoria' => 'MDF',
    'descricao' => 'MDF Amadeirado Carvalho',
    'unidade' => 'Chapa',
    'espessura_medida' => '18 mm',
    'fornecedor' => 'Guararapes',
    'custo_unitario_brl' => 38000,
    'estoque_atual' => 30,
    'estoque_minimo' => 10
];


$materia3 = [
    'id' => 3,
    'categoria' => 'MDF',
    'descricao' => 'MDF Preto Fosco',
    'unidade' => 'Chapa',
    'espessura_medida' => '15 mm',
    'fornecedor' => 'Arauco',
    'custo_unitario_brl' => 31000,
    'estoque_atual' => 20,
    'estoque_minimo' => 5
];


$materia4 = [
    'id' => 4,
    'categoria' => 'Ferragem',
    'descricao' => 'Dobradiça Soft Close',
    'unidade' => 'Unidade',
    'espessura_medida' => '35 mm',
    'fornecedor' => 'Blum',
    'custo_unitario_brl' => 1850,
    'estoque_atual' => 500,
    'estoque_minimo' => 100
];


$materia5 = [
    'id' => 5,
    'categoria' => 'Ferragem',
    'descricao' => 'Corrediça Telescópica',
    'unidade' => 'Par',
    'espessura_medida' => '45 cm',
    'fornecedor' => 'Hafele',
    'custo_unitario_brl' => 4200,
    'estoque_atual' => 300,
    'estoque_minimo' => 60
];


$materia6 = [
    'id' => 6,
    'categoria' => 'Acabamento',
    'descricao' => 'Fita de Borda Branca',
    'unidade' => 'Metro',
    'espessura_medida' => '22 mm',
    'fornecedor' => 'Rehau',
    'custo_unitario_brl' => 180,
    'estoque_atual' => 2000,
    'estoque_minimo' => 500
];


$materia7 = [
    'id' => 7,
    'categoria' => 'Acabamento',
    'descricao' => 'Fita de Borda Amadeirada',
    'unidade' => 'Metro',
    'espessura_medida' => '22 mm',
    'fornecedor' => 'Rehau',
    'custo_unitario_brl' => 250,
    'estoque_atual' => 1200,
    'estoque_minimo' => 400
];


$materia8 = [
    'id' => 8,
    'categoria' => 'Fixação',
    'descricao' => 'Parafuso Chipboard',
    'unidade' => 'Unidade',
    'espessura_medida' => '4 × 40 mm',
    'fornecedor' => 'Ciser',
    'custo_unitario_brl' => 25,
    'estoque_atual' => 10000,
    'estoque_minimo' => 2000
];


$materia9 = [
    'id' => 9,
    'categoria' => 'Colagem',
    'descricao' => 'Cola PVA',
    'unidade' => 'Litro',
    'espessura_medida' => '',
    'fornecedor' => 'Henkel',
    'custo_unitario_brl' => 1400,
    'estoque_atual' => 80,
    'estoque_minimo' => 20
];

$materia10 = [
    'id' => 10,
    'categoria' => 'Vidro',
    'descricao' => 'Vidro Temperado Incolor',
    'unidade' => 'm²',
    'espessura_medida' => '8 mm',
    'fornecedor' => 'Vidraçaria XYZ',
    'custo_unitario_brl' => 19000,
    'estoque_atual' => 35,
    'estoque_minimo' => 10
];

$materias_primas = [$materia1, $materia2, $materia3, $materia4, $materia5, $materia6, $materia7, $materia8, $materia9, $materia10];


echo "<table border='1'>";

echo "<thead>";
    echo "<th>ID</th>";
    echo "<th>Categoria</th>";
    echo "<th>Descrição</th>";
    echo "<th>Unidade</th>";
    echo "<th>Espessura / Medida</th>";
    echo "<th>Fornecedor</th>";
    echo "<th>Custo Unitário (R$)</th>";
    echo "<th>Estoque Atual</th>";
    echo "<th>Estoque Mínimo</th>";
echo "</thead>";
echo "<tbody>";

foreach ($materias_primas as $materia => $info) {

    echo "<tr>";
    echo "<td>" . $info['id'] . "</td>"; 
    echo "<td>" . $info['categoria'] . "</td>"; 
    echo "<td>" . $info['descricao'] . "</td>"; 
    echo "<td>" . $info['unidade'] . "</td>"; 
    echo "<td>" . (empty($info['espessura_medida']) ? '----' : $info['espessura_medida']) . "</td>"; 
    echo "<td>" . $info['fornecedor'] . "</td>"; 
    echo "<td>" . number_format(($info['custo_unitario_brl'] / 100), 2, ',', '.') . "</td>"; 
    echo "<td>" . $info['estoque_atual'] . "</td>"; 
    echo "<td>" . $info['estoque_minimo'] . "</td>"; 
    echo "</tr>";

}

echo "</tbody>";

echo "</table>";