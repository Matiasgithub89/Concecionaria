<form class="row g-3" method="post">
    <h3>Ingresar ID a buscar:</h3>
    <label for="" class="form-label">ID</label>
    <div class="mb-0 col-8">
        
        <input type="text" class="form-control" id="" aria-describedby="" name="id" placeholder="Ejemplo: ab 123 za">        
        
    </div>

    <div class="col-4">
        <button type="submit" value="consulta_id" class="btn btn-primary mb-3" name="btn-buscar-id">Consultar por ID</button>
    </div>
</form>

<?php
$autobuscado = new AutosController();
$autobuscado->BuscarID();
?>