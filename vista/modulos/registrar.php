<form class="needs-validation" novalidate method="post">
    <h3>Datos Auto</h3>
    <div class="row g-3">
        <div class="mb-0">
            <label for="" class="form-label">Patente</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="patente" placeholder="Ejemplo: ab 123 za" required>
            <div class="valid-feedback">Se ve bien!!</div>
            <div class="invalid-feedback">El campo es Obligatorio</div>
        </div>
        <div class="mb-0 col-6">
            <label for="" class="form-label">Marca</label>
            <div class="">
                <input type="text" class="form-control" id="" aria-describedby="" name="marca" placeholder="Ejemplo: Fiat">
            </div>
            
        </div>
        <div class="invalid-feedback">El campo es Obligatorio</div>


        <div class="mb-0 col-6">
            <label for="" class="form-label">Modelo</label>
            <div class="">
                <input type="Text" class="form-control" id="" aria-describedby="" name="modelo" placeholder="Ejemplo: Siena">
                <div class="invalid-feedback">El campo es Obligatorio</div>
                <div class="valid-feedback">Se ve bien!!</div>                
            </div>
            
        </div>
        <div class="mb-0">
            <label for="" class="form-label">Año</label>
            <input type="number" class="form-control" id="" aria-describedby="" name="anio" placeholder="Ej:2000" required>
            <div class="valid-feedback">Se ve bien!!</div>
            <div class="invalid-feedback">El campo es Obligatorio</div>
        </div>
        <div class="input-group mb-0">
            <span class="input-group-text">$</span>
            <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="precio" required>            
            <span class="input-group-text">.00</span>
            <div class="valid-feedback">Se ve bien!!</div>
            <div class="invalid-feedback">El campo es Obligatorio</div>


        </div>
        <div id="" class="form-text">Ej:300000</div>
        <div class="input-group">
            <span class="input-group-text">Descipción</span>
            <textarea class="form-control" aria-label="With textarea" name="descrip" Value="alto auto" required></textarea>
            <div class="valid-feedback">Se ve bien!!</div>
            <div class="invalid-feedback">El campo es Obligatorio</div>
        </div>
        <div id="" class="form-text">Ej:30.000 km, Nunca Taxi, Unico Dueño
        </div>

        <div>
            <button type="submit" value="registrar" class="btn btn-success" name="btn"> Registrar </button>

        </div>
    </div>
</form>

<?php
$registrar = new AutosController();
$registrar->RegistrarAuto();

?>