<!-- Vista desde donde editaremos un producto -->

<div class="card" color="red">
    <div class="card-header">
        <h1>Editar producto</h1>
    </div>
    <div class="card-body">
        <form action="" method="post">

            <div class="mb-3">
              <label for="id" class="form-label">Id: </label>
              <input type="text"
                class="form-control" name="id" value="<?php if (!empty($auto)) {echo $auto ->getID() ;} ?>" readonly id="id" aria-describedby="helpId" >
            </div>
            <div class="mb-3">
              <label for="nombre" class="form-label">Patente: </label>
              <input type="text"
                class="form-control" name="patente" id="" value="<?php if (!empty($auto)) {echo $auto -> getPatente() ;}?>" aria-describedby="helpId" placeholder="Nombre del producto">
            </div>
            <div class="mb-3">
              <label for="nombre" class="form-label">marca: </label>
              <input type="text"
                class="form-control" name="marca" id="marca" value="<?php if (!empty($auto)) {echo $auto -> marca ;}?>" aria-describedby="helpId" placeholder="Nombre del producto">
            </div>
            <div class="mb-3">
              <label for="nombre" class="form-label">Modelo: </label>
              <input type="text"
                class="form-control" name="modelo" id="" value="<?php if (!empty($auto)) {echo $auto -> modelo ;}?>" aria-describedby="helpId" placeholder="Nombre del producto">
            </div>   
            <div class="mb-3">
              <label for="nombre" class="form-label">Año: </label>
              <input type="text"
                class="form-control" name="anio" id="" value="<?php if (!empty($auto)) {echo $auto -> anio ;}?>" aria-describedby="helpId" placeholder="">
            </div>  
            <div class="mb-3">
              <label for="nombre" class="form-label">precio: </label>
              <input type="text"
                class="form-control" name="precio" id="" value="<?php if (!empty($auto)) {echo $auto -> precio ;}?>" aria-describedby="helpId" placeholder="Nombre del producto">
            </div>  
            <div class="mb-3">
              <label for="nombre" class="form-label">Descripción: </label>
              <input type="text"
                class="form-control" name="descrip" id="" value="<?php if (!empty($auto)) {echo $auto -> descrip ;}?>" aria-describedby="helpId" placeholder="Nombre del producto">
            </div>        

            <input value="editar-auto"  id="" class="btn btn-success" type="submit" name="">
            <a href="index.php?rutas=mostrar" class="btn btn-primary">Cancelar</a>
        </form>
    </div>

</div>