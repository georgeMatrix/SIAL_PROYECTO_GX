let modalContent = $('#clientesModal').find('.modal-content').first();

$(document).ready(function() {
    $("#clientesTable").DataTable({
        ajax:{
            url:'api/getClientes'
        },
        "columns":[
            {title:'OPCIONES', data:'actions'},
            {title:'ID', data:'id', name: 'id'},
            {title:'NOMBRE', data:'nombre', name: 'nombre'},
            {title:'RAZON SOCIAL', data:'razonSocial', name: 'razonSocial'},
            {title:'RFC', data:'rfc', name: 'rfc'},
            {title:'REGIMEN', data:'regimen', name: 'regimen'},
            {title:'CALLE', data:'calle', name: 'calle'},
            {title:'NUMERO', data:'numero', name: 'numero'},
            {title:'INTERIOR', data:'interior', name: 'interior'},
            {title:'COLONIA', data:'colonia', name: 'colonia'},
            {title:'CIUDAD', data:'ciudad', name: 'ciudad'},
            {title:'CP', data:'cp', name: 'cp'},
            {title:'ESTADO', data:'estado', name: 'estado'},
            {title:'PRIMER CONTACTO', data:'contacto1', name: 'contacto1'},
            {title:'TELEFONO NO.1', data:'tel1', name: 'tel1'},
            {title:'PRIMER MAIL', data:'mail1', name: 'mail1'},
            {title:'SEGUNDO CONTACTO', data:'contacto2', name: 'contacto2'},
            {title:'TELEFONO NO.1', data:'tel2', name: 'tel2'},
            {title:'SEGUNDO MAIL', data:'mail2', name: 'mail2'},
            {title:'DIA DE REVISION', data:'dia_revision', name: 'dia_revision'},
            {title:'DIA DE CREDITO', data:'dia_credito', name: 'dia_credito'},
        ]
    })
});

function detalleCliente(id) {
    $.ajax({
        url: '/clientes/'+id,
        type: 'get',
        cache: false,
    })
        .done(function (response) {
            modalContent.html(response);
        })
}