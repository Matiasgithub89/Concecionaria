<form class="row g-3" method="post">
    <h3>Ingresar patente a buscar:</h3>
    <label for="" class="form-label">Patente</label>
    <div class="mb-0 col-8">
        
        <input type="text" class="form-control" id="" aria-describedby="" name="patente" placeholder="Ejemplo: ab 123 za">        
        
    </div>

    <div class="col-4">
        <button type="submit" value="consulta_patente" class="btn btn-primary mb-3" name="btn">Consultar por Patente</button>
    </div>
</form>

<?php
$autobuscado = new AutosController();
$autobuscado->BuscarPatente();
?>