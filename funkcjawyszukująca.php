<?php
    function znajdzElement($tablica, $element){
        $max= $tablica[0];
        for($i=1; $i<count($tablica); $i++){
            if($tablica[$i] > $max){
                $max = $tablica[$i];
            }
        }
        for($i=0; $i<count($tablica); $i++){
            if($tablica[i] == $element) {
                return $i;
            }
        }
        return -1;
    }
    $tablica = array(1, 2, 3, 4, 5);
    $element = 3;
    $index = znajdzElement($tablica, $element);
    if($index != -1){
        echo "Element $element został znaleziony na indeksie: $index";
    } else {
        echo "Element $element nie został znaleziony w tablicy.";
    }
