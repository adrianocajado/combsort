<?php
/**
 * Created by PhpStorm.
 * User: adriano
 * Date: 10/01/2019
 * Time: 09:11
 */
// pode usar um vetor inserido pelo usuário, mas usaremos esse pré-definido
$array = array(27,13,9,1,4);
    $trocar=false;
    //verifica o tamanho do vetor
    $tamanho=count($array);
    //define o tamanho do intervalo inicial
    $intervalo=$tamanho;
    //loop de ordenação
    while($intervalo>1 || $trocar) {
        //vedirica se ainda há
        if ($intervalo>1) {
            // faz a divisão pela constante 1.3 que é parte do método comb, floor arredonda o número para menos
            $intervalo=floor($intervalo/1.3);
        }
        $trocar=false;
        //loop de troca de valores
        for ($i=0; $i+$intervalo<$tamanho; $i++) {
        //verrifica se o primeiro valor é menor que o segundo
            if ($array[$i]>$array[$i+$intervalo]) {
        //troca de valores
                $tmp=$array[$i];
                $array[$i]=$array[$i+$intervalo];
                $array[$i+$intervalo]=$tmp;
                $trocar=true;
            }
        }
    }
// loop que printa o vetor já ordenado
    for ($i=0; $i<$tamanho; $i++){
        echo "valor no indice =>[". $i. "] é ". $array[$i].'<br>';
    }