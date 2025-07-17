
<?php

/*
Data una costante chiamata BUDGET di 1000 euro, scrivere un algoritmo che prenda una cifra espressa in euro.
Gestire:
Che la cifra non sia superiore a 1000 euro;
In caso sia inferiore o uguale, dovrete dividere la cifra inserita in 3 RATE di pagamento e stampare in console un messaggio: “Paga in 3 comode rate da: $valore_calcolato Euro";
TIPS: Dopo la divisione vi uscirà un numero float con tutta la parte decimale, per gestirla e limitare a 2 le cifre dopo la virgola, potete utilizzare la built-in function round() in questo modo: round($valore_calcolato, 2); 
*/

const BUDGET = 1000;
$valore = 200;
if ($valore <= 1000 && $valore > 1 ){
 $divisione = $valore / 3; 
 $valoreDivisione = number_format($divisione, 2);
 $valoreRound = round($divisione, 2);
 echo "il tuo valore è ".$valore." sarà diviso in 3 rate di ".$valoreRound.'\n';
  echo "il tuo valore è ".$valore." sarà diviso in 3 rate di ".$valoreDivisione.'\n';
} else {
    echo "il tuo valore è superiore di 1000 o inferiore di un 1 euro";
}

