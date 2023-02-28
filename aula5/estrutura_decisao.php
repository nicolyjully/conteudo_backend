<h2> Estrutura de decisão</h2>
<p>
As estruturas de condição permitem executar 
blocos distintos de código dado a uma condição 




<strong> Exemplo</strong>
<pre>
    if(condição){
        //instruções executadas 
        //caso a condição seja verdadeira 

    }else{
        //instruções executadas, caso
        //a condição seja falsa.
    }
</pre>
</p>

<?php
$media = 7;

if($media >=6){
echo "o aluno foi aprovado";

}else{
    echo "o aluno foi reprovado";
}
?>

media >=6      | aprovado 
6 < media >=3  | exame 
media < 3      | reprovado
<?php
$media = 6;

if($media >=6){
echo "o aluno foi aprovado";
}else if($media >= 3){
  echo "o aluno foi recuperação";
}else{
    echo "o aluno foi reprovado";
}

  ?>
<p>
    o PHP faz a conversão de alguns tipos para verdadeiro ou falso.

    <strong>True</strong>
    <ul>
        <li>string com texto</li>
        <li>numero maior que 0</li>
         <li>vetor com elementos</li>
</ul>
     <strong> false</strong>
     <ul>
     <li>string vazia</li>
        <li>numero igual a 0</li>
         <li>vetor vazio</li>
</ul>

</p>
  <?php

  if(10){
    echo "verdadeiro";
  }else{
    echo "falso";
  }

  ?>
<?php
$media = 4;
if($media >=6 && "quero passar de ano"){
    echo "huhuh sou esperto";
}else{
    echo "ihh, me dei mal";
}
?>