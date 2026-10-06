<?php
    $liczby = array(2, 4, 6, 8);
    
    function sumaTablicy($liczby){
        $suma = 0;
        $ilosc = 0;
        while ($ilosc < count($liczby)){
            $suma += $liczby[$ilosc];
            $ilosc++;
        }
        return $suma;
    }
    echo sumaTablicy($liczby);