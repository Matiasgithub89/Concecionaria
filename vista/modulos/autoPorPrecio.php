<?php include "vista/modulos/buscarPorFiltro.php"?>

<hr>
<h2>Autos Cargados</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#ID</th>
        <th scope="col">Patente</th>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Año</th>
        <th scope="col">Precio</th>
        <th scope="col">Descrip</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php $autos = AutosM::consultarAutoPorPrecio() ?>
      <?php

      foreach ($autos as $auto) { ?>
        <tr>
          <td scope="row"><?php echo $auto->getID() ?></td>
          <td scope="row"><?php echo $auto->getPatente() ?></td>
          <td><?php echo $auto->marca ?></td>
          <td><?php echo $auto->modelo ?></td>
          <td><?php echo $auto->anio ?></td>
          <td><?php echo $auto->precio ?></td>
          <td><?php echo $auto->descrip ?></td>
          <td>
            <form method="post">
            <div class="btn-group" role="group" aria-label="">
              <a href="index.php?accion=editar&ID=<?php echo $auto->getID() ?>" class="btn btn-primary" >Editar</a>
              <a href="index.php?accion=borrar&ID=<?php echo $auto->getID() ?>" class="btn btn-danger">Borrar</a>
            </div>
            </form>
          </td>

        </tr>
      <?php  } ?>
    </tbody>
  </table>
</div>