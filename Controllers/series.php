<?php

require  __DIR__ . '/../config.php';





function selectSeries(){
    global $pdo ; 
    $sql = 'SELECT * FROM serie';
   $s =  $pdo->prepare($sql); 
    $s->execute();
    $ss = $s->fetchAll(PDO::FETCH_OBJ);


    $resSerie = ''; 
    foreach($ss as $serie){
        $resSerie .= "
                        
                        <option value='$serie->codserie'>$serie->nomeserie</option>" ; 
    }
    echo $resSerie; 

}

?>