<?php
function upsideLeft($tinggi, $simbol) {
    for ($i=0; $i < $tinggi; $i++) { 
        for ($j=0; $j <= $i; $j++) { 
            echo"$simbol";
        }
        echo"<br>";
    }
}

function upsideRight($tinggi, $simbol) {
    for($i = 0; $i < $tinggi; $i++) {
        for($j = 1; $j < $tinggi - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for($k = 0; $k <= $i; $k++) {
            echo "$simbol";
        }
        echo "<br>";
    }   
}

function downsideLeft($tinggi, $simbol) {
    for ($i=$tinggi-1; $i >= 0; $i--) { 
        for ($j=0; $j <= $i; $j++) { 
            echo"$simbol";
        }
        echo"<br>";
    }
}

function downsideRight($tinggi, $simbol) {
    for($i = $tinggi-1; $i >= 0; $i--) {
        for($j = 1; $j < $tinggi - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for($k = 0; $k <= $i; $k++) {
            echo "$simbol";
        }
        echo "<br>";
    }
}

function costumeTriangle($pattern, $baris, $symbol){
    switch ($pattern) {
        case '1':
            upsideLeft($baris, $symbol);
            break;
        case '2':
            upsideRight($baris, $symbol);
            break;
        case '3':
            downsideLeft($baris, $symbol);
            break;    
        case '4':
            downsideRight($baris, $symbol);
            break; 
        default:
            echo"pattern yang anda pilih tidak ada!";
            break;
    }
}
$pattern = 4;
$baris = 5;
$symbol = "*";

costumeTriangle($pattern, $baris, $symbol);
?>