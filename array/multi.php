<div class="titulo">Multidimenssionais</div>

<?php

$dados =[
    [
        "nome" => "Roberto",
        "idade" => 28,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Vera",
        "idade" => 27,
        "naturalidade" => "Sergipe"
    ]
];

print_r($dados);

echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

$dados[] = [
    "nome" => "Florinda",
    "idade" => 33,
    "naturalidade" => "Cidade do México"
];

echo '<br>';
print_r($dados);

$dados[2]['vizinhos'] = "Chaves";
echo '<br>';
print_r($dados[2]);

unset($dados[1]);
echo '<br>';
print_r($dados);