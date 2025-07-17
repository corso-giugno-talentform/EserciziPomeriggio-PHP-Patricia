<?php

/*
Presi tutti i numeri da 1 a 10, scrivere un programma che calcoli la somma di tutti i numeri pari tralasciando quelli dispari;

TIPS: Per verificare se un numero è pari o dispari, dovete controllare se il resto della divisione per 2 sia 0 (FALSE) o 1 (TRUE).

2 Diviso 2 = 1 (con resto 0)  // Numero Pari

3 Diviso 2 = 1 (con resto 1)  // Numero Disapri

13 Diviso 2 = 6 (con resto 1) // Numero Disapri
In php potete utilizzare l’operatore modulo % per ottenere il resto della divisione, in questo modo**:**

(2 % 2) == 0  // True perche da resto 0 = Numero Pari

(3 % 2) == 0  // False perche da resto 1 = Numero Disapri

(13 % 2) == 0  // False perche da resto 1 = Numero Disapri
*/


for ($i = 1; $i <= 10; $i++) {
    echo $i . "\n";
    
    if ($i % 2 != 0) {
        echo "Il numero ". $i ." è dispari ". "\n";
    } else {
        echo "Il numero ". $i ." è pari " . "\n";
    }
}