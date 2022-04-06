<?php
include_once   "../header.html";

include_once '../../Controllers/matriculas.php' ; ?>

<!DOCTYPE html>

<button type="button" class="btn btn-primary">Nova pré-matricula</button>
</div>
<br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">SÉRIE</th>
      <th scope="col">ALUNO</th>
      <th scope="col">RESPONSÁVEL</th>
      <th scope="col">STATUS</th>
      <th scope="col">DATA</th>

    </tr>
  </thead>
  <tbody>

</tbody>
<?php searchAllPrematriculas() ; ?>
   
</table>

</html>

<?php 
include_once "../footer.html";
; ?>
