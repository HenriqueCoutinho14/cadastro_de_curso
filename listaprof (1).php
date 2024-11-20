
<?php

include 'banco.php';
?>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Lista de Professores</h1>
      <p class="lead">Construa uma tabela de preços para seus potenciais clientes, com esse exemplo Bootstrap. Além do mais, é feito com componentes padrões, utilitários e um pouquinho de customização.</p>


    <div class="container">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Idioma</th>
        <th>Data</th>
        <th>Sexo</th>
        <th>Idade</th>
       
      </tr>
    </thead>
    <tbody>
    <?php
    $professor = listaprof();
    for ($i=0; $i < count($professor); $i++) {
      echo "<tr>";
      echo "<td>".$professor[$i]["id"]."</td>";
      echo "<td>".$professor[$i]["nome"]."</td>";
      echo "<td>".$professor[$i]["idioma"]."</td>";
      echo "<td>".$professor[$i]["data_inclusao"]."</td>";
      echo "<td>".$professor[$i]["sexo"]."</td>";
      echo "<td>".$professor[$i]["idade"]."</td>";
      echo "</tr>";
    }
    ?>
    </tbody>
  </table>
    </div>
    <?php

    include'footer.php';
   ?>
