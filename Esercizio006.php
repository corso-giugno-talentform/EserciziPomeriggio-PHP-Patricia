
<?php

/*Dato il seguente Array:
realizzare un ciclo for che:

Se il genere e’ M stampare “Buongiorno Sig. $nome”
Se e’ F stampare “Buongiorno Sig.ra $nome” .
Se non è definito Stampare “$nome ha preferito non specificare."*/

$tasks = [
  [
    'name' => 'Marco',
    'gender' => 'M',
  ],
  [
    'name' => 'Vanessa',
    'gender' => 'F',
  ],
  [
    'name' => 'Jack',
    'gender' => 'M',
  ],
  [
    'name' => 'Mari*',
    'gender' => '',
  ],
];

foreach ($tasks as  $task){
    echo $task['name']."\n".($task['gender'])."\n";
    if ($task['gender']== 'M'){
        echo "Buongiorno Sig ".($task['name'])."\n";
    } else if ($task['gender']){
     echo "Buongiorno Sig.ra ".($task['name'])."\n";
    }
} echo ($task['name'])."ha preferito non specificare."."\n";

