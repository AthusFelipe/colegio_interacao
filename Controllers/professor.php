<?php




use Devbombeiro\DevAthus\Professor;

require  __DIR__ . '/../config.php';


// include_once "config.php";



if (isset($_POST['nomeprof'])) {
    $p2 = new Professor($_POST['nomeprof'], $_POST['materia'], $_POST['telefone'], $_POST['email']);


    $sql = 'INSERT INTO professores (nomeprof, materia, telefone, email) VALUES (:PROF, :MAT, :TEL, :EMAIL)';
    $newProf = $pdo->prepare($sql);
    $newProf->bindValue(":PROF", $p2->getNomeprof());
    $newProf->bindValue(":MAT", $p2->getMateria());
    $newProf->bindValue(":TEL", $p2->getTelefone());
    $newProf->bindValue(":EMAIL", $p2->getEmail());
    $newProf->execute();
    header("location: ../index.php");
}

function selectMaterias()
{
    global $pdo;
    $sql = 'SELECT * FROM materias';
    $sm = $pdo->prepare($sql);
    $sm->execute();
    $mats = $sm->fetchAll(PDO::FETCH_OBJ);


    $matres = '';
    foreach ($mats as $mat) {
        $matres .= '
        <option value=' . $mat->idmat . '>' . $mat->nomemat . '</option>';
    }
    echo $matres;
}

function buscarProfs()
{
    global $pdo;
    $sql = 'SELECT p.idprof, p.nomeprof, p.materia, p.telefone, m.nomemat FROM professores as p INNER JOIN materias as m ON p.materia= m.idmat';
    $retornaProfs = $pdo->prepare($sql);
    $retornaProfs->execute();
    $tableProfs = $retornaProfs->fetchAll(PDO::FETCH_OBJ);

    $resprof = '';
    foreach ($tableProfs as $prof) {
        $resprof .= "
                           <tr>
                                <th scope='row'>$prof->nomeprof</th>
                                <td>"
            .


            $prof->nomemat .
            "</td>
                                <td>$prof->telefone</td>
                                <td><a href='?excluir=$prof->idprof'>Excluir</a></td>
    
                            </tr>";
    }
    echo $resprof;
}


if (isset($_GET['excluir'])) {
    $sql = 'DELETE FROM professores WHERE idprof = :IDPROF';
    $excProf = $pdo->prepare($sql);
    $excProf->bindValue("IDPROF", $_GET['excluir']);
    $excProf->execute();
}
