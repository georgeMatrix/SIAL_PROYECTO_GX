<div class="modal-header">
    <h5 class="modal-title" id="clientesModal">Detalles Cliente</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Nombre del cliente:</label>
                <label for="">{{$cliente->nombre}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Razon Social:</label>
                <label for="">{{$cliente->razon_social}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">RFC:</label>
                <label for="">{{$cliente->rfc}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Regimen:</label>
                <label for="">{{$cliente->regimen}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Calle:</label>
                <label for="">{{$cliente->calle}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Numero:</label>
                <label for="">{{$cliente->numero}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Numero Interior:</label>
                <label for="">{{$cliente->interior}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Colonia:</label>
                <label for="">{{$cliente->colonia}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Ciudad:</label>
                <label for="">{{$cliente->ciudad}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">CP:</label>
                <label for="">{{$cliente->cp}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Estado:</label>
                <label for="">{{$cliente->estado}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Primer Contacto:</label>
                <label for="">{{$cliente->contacto1}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Telefono No. 1:</label>
                <label for="">{{$cliente->contacto1}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Primer Mail:</label>
                <label for="">{{$cliente->mail1}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Segundo Contacto:</label>
                <label for="">{{$cliente->contacto2}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Telefono No. 2:</label>
                <label for="">{{$cliente->tel2}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Segundo Mail:</label>
                <label for="">{{$cliente->mail2}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Dia de Revision:</label>
                <label for="">{{$cliente->dia_revision}}</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="">Dia de Credito:</label>
                <label for="">{{$cliente->dia_credito}}</label>
            </div>
        </div>
    </div>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
</div>