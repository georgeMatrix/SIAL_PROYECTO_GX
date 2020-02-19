<div class="modal-header">
    <h5 class="modal-title" id="operadorModal">Detalles Operadores</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Apellido Paterno:</label>
                <label for="">{{$operador->apellido_paterno}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Apellido Materno:</label>
                <label for="">{{$operador->apellido_materno}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Nombres:</label>
                <label for="">{{$operador->nombres}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Nombre corto:</label>
                <label for="">{{$operador->nombre_corto}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">LICENCIA:</label>
                <label for="">{{$operador->licencia}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Vigencia Licencia:</label>
                <label for="">{{$operador->vigencia_licencia}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Vigencia Medico:</label>
                <label for="">{{$operador->vigencia_medico}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Telefono Casa:</label>
                <label for="">{{$operador->telefonoCasa}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Persona Contacto:</label>
                <label for="">{{$operador->personaContacto}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Celular:</label>
                <label for="">{{$operador->celular}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">IMSS:</label>
                <label for="">{{$operador->imss}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Primer RFC:</label>
                <label for="">{{$operador->rfc}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Observaciones:</label>
                <label for="">{{$operador->obs}}</label>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
</div>