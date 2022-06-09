<?php

namespace SRC;

function verificar($numero): int
{
    if ($numero == 1) {
        return 0;
    }
    for ($contador = 2; $contador < sqrt($numero); $contador++) {
        if ($numero % $contador == 0) {
            return 0;
        }
        return 1;
    }
}

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao 
    qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o 
    segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public static function SeculoAno(int $ano): int
    {
        $seculo = 0;
        $ano = (string)$ano;
        if (strlen($ano) <= 2 || strlen($ano) > 4) {
            echo "digite um ano válido. ";
        } elseif (strlen($ano) == 4) {
            $comeco = intval(substr($ano, 0, 2));
            $resto = intval(substr($ano, -2));
            if ($resto > 0) {
                $seculo = $comeco + 1;
            } else {
                $seculo = $comeco;
            }


            // echo " primeiro digito ", $comeco, " e os ultimos são ", $resto, ". ";
        } elseif (strlen($ano) == 3) {
            $comeco = intval(substr($ano, 0, 1));
            $resto = substr($ano, -1);

            if ($resto > 0) {
                $seculo = $comeco + 1;
            } else {
                $seculo = $comeco;
            }
            // echo " primeiro digito ", $comeco, " e os ultimos são ", $resto, ". ";
        }
        return $seculo;
    }


    /*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */

    public static function PrimoAnterior(int $numero)
    {
        $contador = $numero - 1;
        if ($contador < 11) {
            return 7;
        } elseif ($numero == 7) {
            return 5;
        } elseif ($numero == 5) {
            return 3;
        } elseif ($numero == 3) {
            return 2;
        }
        if ($numero == 2) {
            return 2;
        } else {

            while ($contador > 2) {
                echo "<pre>";
                if ($contador % 2 == 0 || $contador % 3 == 0 || $contador % 5 == 0 || $contador % 7 == 0) {
                } else {
                    return $contador;
                    break;
                }
                $contador--;
            }
        }
    }



    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	  $multidimensional = array(
            array(25, 22, 18),
            array(10, 15, 13),
            array(24, 5, 2),
            array(80, 17, 15)
        );
	resposta = 25

     * */
    public static function SegundoMaior($array): int
    {

        $lista = [];
        // percorrer o array multidimensional.
        foreach ($array as $row) {
            foreach ($row as $i => $a) {
                // echo 'Indice: '. $i." -> Valor: ".$a."<br>";
                // adiciona valor por valor no array lista.
                array_push($lista, $a);
            }
        }
        // array em ordem crescente.
        sort($lista);
        // pega penultimo valor.
        $saida = array_slice($lista, -2, 1);

        return $saida[0];
    }








    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */

    // public function SequenciaCrescente(array $arr): boolean
    // {
    // }
}
