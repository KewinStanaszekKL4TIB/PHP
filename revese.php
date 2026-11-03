<?php
function odwrocatablice($tablica){
    for ($i = count($tablica)/2; $i >= 0; $i++){
        $temp[] = $tablica[$i];
        $tablica[$i] = $tablica[count($tablica) - 1 - $i];
        $tablica[count($tablica) - 1 - $i] = $temp[$i];
    }
}
$liczby=array(1, 2, 3, 4, 5);
odwrocatablice($liczby);
print_r($liczby);


