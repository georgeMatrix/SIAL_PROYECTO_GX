let modalContent = $('#operadoresModal').find('.modal-content').first();

$(document).ready(function() {
    $("#operadoresTable").DataTable({
        ajax:{
            url:'api/getOperadores'
        },
        "columns":[
            {title:'OPCIONES', data:'actions'},
            {title:'ID', data:'id', name: 'id'},
            {title:'APELLIDO PATERNO', data:'apellido_paterno', name: 'apellido_paterno'},
            {title:'APELLIDO MATERNO', data:'apellido_materno', name: 'apellido_materno'},
            {title:'NOMBRES', data:'nombres', name: 'nombres'},
            {title:'NOMBRE CORTO', data:'nombre_corto', name: 'nombre_corto'},
            {title:'LICENCIA', data:'licencia', name: 'licencia'},
            {title:'VIGENCIA LICENCIA', data:'vigencia_licencia', name: 'vigencia_licencia'},
            {title:'VIGENCIA MEDICO', data:'vigencia_medico', name: 'vigencia_medico'},
            {title:'TELEFONO DE CASA', data:'telefonoCasa', name: 'telefonoCasa'},
            {title:'PERSONA DE CONTACTO', data:'personaContacto', name: 'personaContacto'},
            {title:'CELULAR', data:'celular', name: 'celular'},
            {title:'IMSS', data:'imss', name: 'imss'},
            {title:'RFC', data:'rfc', name: 'rfc'},
            {title:'OBSERVACIONES', data:'obs', name: 'obs'},
        ]
    })
});

function detalleOperador(id) {
    $.ajax({
        url: '/operadores/'+id,
        type: 'get',
        cache: false,
    })
        .done(function (response) {
            modalContent.html(response);
        })
}