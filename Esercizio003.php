<?php

/*
Utilizzando il costrutto Switch, scrivere un algoritmo per una pizzeria che prenda in input una qualsiasi ordinazione (una stringa).

Stringa da Verificare - Costo

Pizza - 6 Euro;
Birra - 3 Euro;
Panino - 8 Euro
Insalata - Non Disponibile;
Dessert - 3 Euro;
Scrivere tutte le casistiche qui sopra enunciate in cui, dato in input il nome del prodotto da ordinare, venga stampato in output una frase del tipo:

“Hai ordinato Carne con un costo di 10 Euro";
Gestire anche la casistica in cui venga inserita una pietanza non presente nel menu.
*/


echo "Cosa vuoi mangiare inserire:
Pizza - 6 Euro;
Birra - 3 Euro;
Panino - 8 Euro
Insalata - Non Disponibile;
Dessert - 3 Euro; ";
$scelta = trim(fgets(STDIN));
$sceltaMinuscola = strtolower($scelta);
//echo $sceltaMinuscola;
echo "la tua ordinazione, $sceltaMinuscola!\n";
switch ($scelta){
 case ('pizza'):
     echo "Hai ordinato $sceltaMinuscola con un costo di 6 Euro";
     break;
 case ('birra'):
     echo "Hai ordinato $sceltaMinuscola con un costo di 3 Euro";
     break;
 case ('panino'):
     echo "Hai ordinato $sceltaMinuscola con un costo di 8 Euro";
     break;
 case ('insalata'):
     echo "l' $sceltaMinuscola non è disponibile";
     break;
 case ('desert'):
     echo "Hai ordinato $sceltaMinuscola con un costo di 3 Euro";
     break;
 default:
     echo "Questa pietanza non presente nel menu";
     
}