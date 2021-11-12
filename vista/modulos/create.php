<form method="post">
    <h3>Datos Auto</h3>
    <div class="row g-3">
        <div class="mb-3">
            <label for="" class="form-label">Patente</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="patente">
            <div id="patente" class="form-text">Ejemplo: ab 123 za</div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Marca</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="marca">
            <div id="emailHelp" class="form-text">Ejemplo:Volkswagen</div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="modelo">
            <div id="" class="form-text">Ejemplo:Golf</div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Año</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="anio">
            <div id="" class="form-text">Ej:2000</div>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">$</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="precio">
            <span class="input-group-text">.00</span>


        </div>
        <div id="" class="form-text">Ej:300000</div>
        <div class="input-group">
            <span class="input-group-text">Descipción</span>
            <textarea class="form-control" aria-label="With textarea" name="descrip"Value="alto auto"></textarea>
        </div>
        <div id="" class="form-text">Ej:30.000 km, Nunca Taxi, Unico Dueño
        </div>

        <div style="text-align:center">
            <button type="submit" value="registrar" class="btn btn-success" name="btn"> Registrar </button>
            <button type="submit" value="consulta_dni" class="btn btn-primary" name="btn">Consultar por DNI</button>
            <button type="submit" value="consulta_nombre" class="btn btn-primary" name="btn">Consultar por nombre</button>
            <button type="submit" value="actualizar" class="btn btn-info" name="btn">Actualizar </button>
            <button type="submit" value="eliminar" class="btn btn-danger" name="btn">Eliminar por DNI</button>
        </div>
    </div>
</form>
<?php
$registrar = new AutosController();
$registrar->RegistrarAuto();
?>