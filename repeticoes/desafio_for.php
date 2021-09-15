<div class="titulo">Desafio FOR</div>

<?php

for ($i = 1; $i < 6; $i++) {
    switch ($i) {
        case 1:
            echo '# <br>';
            break;

        case 2:
            echo '## <br>';
            break;

        case 3:
            echo '### <br>';
            break;

        case 4:
            echo '#### <br>';
            break;

        case 5:
            echo '##### <br>';
            break;
        default:
            echo 'Verifiqueo código...';
            break;
    }
}

echo "<hr>";

$impressao = '';

for ($i=1; $i <= 5 ; $i++) { 
    $impressao .= '#';
    echo "$impressao <br>";
}

echo "<hr>";

for ($impressao2= '#'; $impressao2 !== '######'; $impressao2.='#') { 
    echo "$impressao2 <br>";
}