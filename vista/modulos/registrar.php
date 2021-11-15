<form method="post"class="need-validation" novalidate>
    <h3>Datos Auto</h3>
    <div class="row g-3">
        <div class="mb-0">
            <label for="" class="form-label">Patente</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="patente" required>
            <div id="patente" class="form-text">Ejemplo: ab 123 za</div>
            <div class="valid-feedback">Campo requerido</div>
            <div class="invalid-feedback">Ok</div>
        </div>
        <div class="mb-0">
            <label for="" class="form-label">Marca</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="marca">
            <div id="emailHelp" class="form-text">Ejemplo:Volkswagen</div>
        </div>
        <div class="mb-0">
            <label for="" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="modelo">
            <div id="" class="form-text">Ejemplo:Golf</div>
        </div>
        <div class="mb-0">
            <label for="" class="form-label">Año</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="anio">
            <div id="" class="form-text">Ej:2000</div>
        </div>
        <div class="input-group mb-0">
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

        <div >
            <button type="submit" value="registrar" class="btn btn-success" name="btn"> Registrar </button>
            
        </div>
    </div>
</form>
<?php
$registrar = new AutosController();
$registrar->RegistrarAuto();

?>