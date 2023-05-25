<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

//operadores racionais

echo (20> 30) . " False <br>"; // maior
echo (20<30) . "True <br>"; // menor
echo (10 == 10 ). "True<br>"; //igualdade
echo (10 != 10) . "False<br>"; //diferente
echo (10>= 10) . "true<br>"; //maior ou igual
echo (10<=10)  . "true<br>"; //menor ou igual

//operadores lógicos
echo (10 ==10 && 10 >5) . "true <br>"; //Operador E
echo (10 == 10 || 10> 5)  . "True <br>"; //Operador ou
echo (!false) . "False <br>"; // operador não



//operador ternário
echo "<h1>Estrutura de decisão</h1>";
/*
if 
if else
if else if
*/


$idade = 17;
if ($idade >= 18){
    echo "maior de idade"; //verdadeiro
}

else if($idade ==17){
    echo "Volte ano que vem";
}


else{
    echo "Menor de idade"; //falso
}
?>


</body>
</html>