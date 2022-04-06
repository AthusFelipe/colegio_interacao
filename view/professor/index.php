<?php

include_once '../../Controllers/professor.php';
include_once   "../header.html";
?>


<!DOCTYPE html>
<br>

<a href='cadastroprofessor.php'><button type="button" class="btn btn-primary">Novo professor</button></a>
</div>
<br>
<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">NOME</th>
            <th scope="col">MATÉRIA</th>
            <th scope="col">TELEFONE</th>
            <th scope="col">Ações</th>

        </tr>
    </thead>
    <tbody>

    </tbody>
    <?php buscarProfs(); ?>

</table>

</html>

<?php
include_once "../footer.html"; ?>