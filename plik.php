<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $file = $_POST['file'];
    $fileopen = fopen($file,"r");
     
    $ilosc=count(file($file));
    $tab = array();
    for($i = 0;$i<$ilosc;$i++){
        array_push($tab,fgets($fileopen));
    }
    fclose($fileopen);
    $filewrite = fopen($file,"w");
    for($i = $ilosc-1;$i>=0;$i--){
        //echo $tab[$i];
        fwrite($filewrite,$tab[$i]);
    }
    fclose($filewrite);
    // readfile($file);
}
?>