<?php

/*
Scrivere un algoritmo che prenda un anno di nascita (numero intero composto da 4 cifre, solo anno senza specificare giorno o mese) e calcolare l’età effettiva con una sottrazione (ad es. : 2022 - 1992 = 30 ) .

Gestire:

Caso in cui l’età calcolata sia un numero negativo, visualizzare un messaggio di errore “Il numero da te inserito non può essere elaborato";
Se l’età ha un valore compreso tra 0 e 3, voglio visualizzare il messaggio: “Troppo piccolo per scrivere a macchina. ";
Se l’età ha un valore di 4 o superiore , voglio visualizzare il messaggio: “Il nostro sistema ha calcolato che hai: Hai $variabile_eta_calcolata anni";
*/



const ANNO_ATTUALE = 2025; 
$annoDiNascita = 198; 
$longitud = strlen($annoDiNascita);
//echo $longitud;
    if($longitud == 4){
        if ($annoDiNascita > 1920 && $annoDiNascita <2025){
            $somma = ANNO_ATTUALE - $annoDiNascita;
            echo "hai ".$somma."\n";
            if ($somma <= 3 && $somma > 0){
                echo "Troppo piccolo per scrivere a macchina.";
            }  else if ($somma >= 4 ) {
                echo ("Il nostro sistema ha calcolato che hai: Hai ".$somma);
            } else {
            echo "il numero da te inserito non può essere elaborato ";
            }  
        }
    } else {
        echo "hai inserito l'anno sbagliato inserire YYYY";
    }

