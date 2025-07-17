<?php

/*Utilizzando la logica appena appresa con l’operatore Modulo, scrivere un programma che stampi in console tutti i numeri da 1 a 30.

Se il numero e’ multiplo di 3 deve stampare “PHP”;
Se multiplo di 5 deve stampare “JAVASCRIPT”;
Se multiplo di 3 e 5 (15) deve stampare “Francesco”;*/

for ($i = 1; $i <= 30; $i++) {
  //  echo $i . "\n";
    
  if ($i % 3 == 0 || $i % 5 == 0  ) {
    if ($i % 3 == 0 && $i % 5 == 0 ){
            //  echo "Il numero ". $i ." è multiplo di 3 e 5 ". "\n";
              echo "Francesco". "\n";
          } else if ($i % 5 == 0){
            //  echo "Il numero ". $i ." è multiplo di 5 ". "\n";
              echo "JAVASCRIPT". "\n";
          } else if ($i % 3 == 0 ){
            //  echo "Il numero ". $i ." è multiplo di 3 ". "\n";
              echo "PHP". "\n";
          } 
        } else  {
          echo $i. "\n";
          //  echo "Il numero ". $i ." non è multiplo ne de 3 ne di 5 ". "\n";
          }
    }   
