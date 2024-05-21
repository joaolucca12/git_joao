<?php
echo "<h4>Esta página é dinâmica; executada no serviço Web e enviada ao navegador</h4>";
echo "<h3>Aprendemos a linguagem de programaçao PHP</h3>";
// No PHP, uma variável começa com o $sinal, seguido do nome da variável
$nota1 = 10;
$nota2 = 9;
$media = ($nota1 + $nota2) /2;

echo "A média das notas = $media";
//PHP possui mais de 1000 funções integradas
echo "<br>" . date('D/M/Y');
$nome = "Seu Nome";
echo "<br>" . strtoupper($nome);
echo "O número sorteado foi: " . (rand(10, 100));
//Instruções condicionais são usadas para executar ações diferentes com base em condições diferentes
if($media >= 7){
    echo "<br> APROVADO";
}
else{
    echo "<br> REPROVADO";
}
//Array indexado
$disciplinas = array ("BD", "TPA", "Front-End", "Matemática", "Português");
echo "<br> Mostrando o conteúdo do array";
var_dump($disciplinas);
echo "<br> Disciplina com índice 1, ou seja, a segunda do array é:" . $disciplinas[1];
//Estruturas de repetição
//Modo "dificil" usando FOR




?>



