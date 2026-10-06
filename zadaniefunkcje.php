<?php
    $liczby = array(1, 2, 3, 4, 6, 7, 8);
    
    function sumaTablicy($liczby){
        foreach ($liczby as $liczba)
            if ($liczba % 2 == 0){
                echo $liczba ."<br>";
            }
        }
    echo sumaTablicy($liczby);
?>
