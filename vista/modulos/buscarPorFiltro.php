<form class="row g-3" method="post">
    <h3>Ingresar patente a buscar:</h3>


    <div class="mb-0 col-5">
        <label for="" class="form-label">Busqueda por Patente</label>
        <div class="">
            <input type="text" class="form-control" id="" aria-describedby="" name="patente" placeholder="Ejemplo: ab 123 za">
        </div>
        <div class="col-12">
            <button type="submit" value="consulta_patente" class="btn btn-primary mb-12" name="btn">Consultar por Patente</button>
        </div>
    </div>


    <div class="mb-0 col-5">
        <label for="" class="form-label">Busqueda por Id</label>
        <div class="">
            <input type="text" class="form-control" id="" aria-describedby="" name="ID" placeholder="Ejemplo: 1">
        </div>
        <div class="col-12">
            <button type="submit" value="consulta_id" class="btn btn-primary mb-12" name="btn">Consultar por ID</button>
        </div>
    </div>


</form>

<?php
$autobuscado = new AutosController();
$autobuscado->BuscarPorFiltro();
?>