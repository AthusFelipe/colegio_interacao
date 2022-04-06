<?php

include_once '../../Controllers/professor.php';
include_once   "../header.html";

?>

<!DOCTYPE html><br>
<p>Formulário de cadastro de professor</p>
<form method='post' action='../../Controllers/professor.php'>
    <div class="row mb-3">
        <label for="nomeprof" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-10">
            <input type="text" class=" form-control" id="nomeprof" name='nomeprof'>
        </div>
    </div>
    <div class="row mb-3">
        <label for="telefone" class="col-sm-2 col-form-label">Telefone</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="telefone" name='telefone'>
        </div>
    </div>
    <div class="row mb-3">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name='email'>
        </div>
    </div>
    <select class="form-select" aria-label="Default select example" name='materia'>
        <option selected>Matéria</option>
        <?php selectMaterias(); ?>
    </select><br>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>

</html>