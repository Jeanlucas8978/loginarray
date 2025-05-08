<?php
echo"A função explode em PHP divide uma string em um array com base em um delimitador específico";

$nomes = "Clara,João,Léo,Bruna,Marcos"; 

$nomes_array = explode(",", $nomes); 
print_r($nomes_array);

?>