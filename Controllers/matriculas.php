<?php

use Devbombeiro\DevAthus\Matriculas;

include __DIR__ . "\..\config.php";





function NovaMatricula($nr, $na, $se)
{
  global $pdo;
  $mat = new Matriculas($nr, $na, $se);

  $mat->consultar();

  $sql = 'INSERT INTO matriculas (nomeresp, nomealuno, serie, status, data) VALUES (?, ?, ?, ?, ?)';
  $matDB = $pdo->prepare($sql);
  $matDB->bindValue(1, $mat->getNomeresp());
  $matDB->bindValue(2, $mat->getNomealuno());
  $matDB->bindValue(3, $mat->getSerie());
  $matDB->bindValue(4, $mat->getStatus());
  $matDB->bindValue(5, $mat->getDatamatricula());



  $matDB->execute();
}


function searchAllPrematriculas()
{
  global $pdo;
  $sql = 'SELECT * FROM matriculas';
  $sap = $pdo->prepare($sql);
  $sap->execute();
  $pm = $sap->fetchAll(PDO::FETCH_OBJ);


  $listarpm = '';
  foreach ($pm as $premat) {
    $listarpm .=
      "   <tr>
        <th scope='row'>$premat->idmatriculas</th>
        <td>$premat->serie</td>
        <td>$premat->nomealuno</td>
        <td>$premat->nomeresp</td>
        <td>$premat->status</td>      
        <td>" . date('d-m-Y', strtotime($premat->data)) . "</td>
        

      </tr>";
    //A DATA JÁ VEM FORMATADA NO PADRÃO BRASILEIRO(LINHA 48)
  }
  echo  $listarpm;
}
