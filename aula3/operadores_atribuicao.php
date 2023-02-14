<h2> Operadores de atribuição</h2>
<p>
    são ultilizados para armazenar 
    "atribuir valores a uma váriavel".  
</p>
<ol>
    <li>= | atribuição simples</li>
    <li>= | acumula o novo valor</li>
    <li>= | subtrai o valor da váriavel</li>
    <li>= | incremneta 1 ao valor da váriavel </li>
    <li>= | subtrai 1 ao valor da váriavel</li>
    <li>= | cocatena o texto ao valor da váriavel</li>
</ol>
<strong>Exemplos</strong>
<?php
       $nota = 5; //atribui o numero 5 na váriavel nota
       echo $nota; //imprime o numero 5

       $nota += 5; //atribui o numero 5 na váriavel nota
       echo $nota; //imprime o numero 10 (5 de antes + 5 de agora)

       $nota -= 2; //equivalente a $nota - $nota - 2;
       echo $nota; //imprime o valor 8

       $nota ++; //soma 1 ao valor da váriavel = $nota = $nota +1;
       echo $nota; //imprime o valor 9

       $nota --; //subtrai 1 do valor da váriavel = $nota = $nota -1;
       echo $nota; //imprime o valor 8

       $nome = "nicoly";
       $nome .= "cocentino"; //concacena o valor anterior nicoly, com o novo valor cocentino e armazena na váriavel nome
echo $nome; //imprime nicoly cocentino

?>










