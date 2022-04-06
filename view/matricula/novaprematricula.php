<?php

include_once '../../Controllers/series.php';
include_once   "../header.html";

?>

<!DOCTYPE html><br>
<p>Formulário de pré-matrícula</p>
<form method='post' action='../../Controllers/matriculas.php'>
    <div class="row mb-3">
        <label for="nomeresp" class="col-sm-2 col-form-label">Responsável</label>
        <div class="col-sm-10">
            <input type="text" class=" form-control" id="nomeresp" name='nomeresp'>
        </div>
    </div>
    <div class="row mb-3">
        <label for="nomealuno" class="col-sm-2 col-form-label">Nome do Aluno</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nomealuno" name='nomealuno'>
        </div>
    </div>

    <div class="row mb-3">
        <label for="contato" class="col-sm-2 col-form-label">Contato</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="contato" name='contato'>
        </div>
    </div>
  
    <select class="form-select" aria-label="Default select example" name='serie'>
  <option selected>Escolha a série</option>
  <?php selectSeries(); ?>

</select>
  <br>
    <button type="submit" class="btn btn-primary">SALVAR</button>
</form>

</html>