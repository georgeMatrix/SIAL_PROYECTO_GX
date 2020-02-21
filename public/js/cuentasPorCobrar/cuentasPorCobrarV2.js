var tabla
$('#formCuentasPorPagar').submit(function(e){

    e.preventDefault()
    tabla = $("#cuentasPorCobrarTable").DataTable({
        'columnDefs': [
            {
                'targets': 0,
                'checkboxes': {
                    'selectRow': true
                }
            }
            /*{render: $.fn.dataTable.render.number( ',', '.', 2, '$' )
                ,
                "targets": 19}*/
        ],
        'select': {
            'style': 'multi'
        },
        'order': [[1, 'asc']],
        ajax:{
            url:'api/getCuentasPorCobrar',
            type: "POST",
            data: function (d) {
                d.facturador = $("#facturadorCuentasPorPagar option:selected" ).val();
                d.cliente= $("#clienteCuentasPorPagar option:selected" ).val();
            },

        },
        /*columnDefs:[{
            render: $.fn.dataTable.render.number( ',', '.', 2, '$' )
            ,
            "targets": 18
        }
        ],*/
        "columns":[
            {data: null, defaultContent: '' },
            {title:'TIPO', data:'USER_CARTA_PORTE_TIPO_ID', name: 'USER_CARTA_PORTE_TIPO_ID'},
            {title:'CARTA PORTE', data:'created_at', name: 'created_at'}, //se puso created_at por que se necesitaba una columna que no se estubiera utilizando
            {title:'FACTURADOR', data:'emisor_razon_social', name: 'emisor_razon_social'},
            {title:'CLIENTE', data:'receptor_razon_social', name: 'receptor_razon_social'},
            {title:'NOMBRE RUTA', data:'USER_NOMBRE_RUTA', name: 'USER_NOMBRE_RUTA'},
            {title:'UNIDAD', data:'USER_UNIDAD', name: 'USER_UNIDAD'},
            {title:'REMOLQUE', data:'USER_REMOLQUE', name: 'USER_REMOLQUE'},
            {title:'OPERADOR', data:'USER_OPERADOR', name: 'USER_OPERADOR'},
            {title:'CLAVE PRODUCTO O SERVICIO', data:'clave_prod_serv', name: 'clave_prod_serv'},
            {title:'NO. IDENTIFICACION', data:'no_identificacion', name: 'no_identificacion'},
            {title:'CANTIDAD', data:'cantidad', name: 'cantidad'},
            {title:'CLAVE UNIDAD', data:'clave_unidad', name: 'clave_unidad'},
            {title:'UNIDAD', data:'unidad', name: 'unidad'},
            {title:'DESCRIPCION', data:'descripcion', name: 'descripcion'},
            {title:'VALOR UNITARIO', data:'valor_unitario', render: $.fn.dataTable.render.number( ',', '.', 2, '$' )
            },
            {title:'IMPORTE', data:'importe', render: $.fn.dataTable.render.number( ',', '.', 2, '$' )
            },
            {title:'IVA TRASLADADO ', data:'cfdi_t_iva_importe', render: $.fn.dataTable.render.number( ',', '.', 2, '$' )
            },
            {title:'IVA RETENIDO ', data:'cfdi_r_iva_importe', render: $.fn.dataTable.render.number( ',', '.', 2, '$' )
            },
            {title:'TOTAL', data:null, render: function ( data, type, row ) {
                    return "$"+(parseFloat(row.importe) + parseFloat(row.cfdi_t_iva_importe ) - parseFloat(row.cfdi_r_iva_importe));
                    //return data.valor_unitario;
                    //return '$' + row.importe + row.cfdi_t_iva_importe-row.cfdi_r_iva_importe;
                }
            },
        ],
        serverSide: false,
        processing: true,
        destroy: true
    })
});

$(document).ready(function(){
    /*$("#XMLFactura").prop("href", localStorage.getItem("direccionXML"));
    var screen = $('#loading-screen');
    configureLoadingScreen(screen);
    modal();*/
})

$("#btnShow").click(function(){
    //var data = $("#cuentasPorCobrarTable").DataTable().row({ selected: true }).data();
    var rows_selected = $("#cuentasPorCobrarTable").DataTable().checkboxes.selected()[0];
    console.log(rows_selected);   //display int value

    /*var selectedIds = $("#cuentasPorCobrarTable").DataTable().checkboxes.selected()[0];
    console.log(selectedIds)*/

    rows_selected.forEach(function (selectedId) {
        alert(selectedId);
    });
    //function getSelected(){
    // 	var selectedIds = tbl.columns().checkboxes.selected()[0];
    // 	console.log(selectedIds)
    //
    // 	selectedIds.forEach(function(selectedId) {
    //     alert(selectedId);
    // 	});
    // }
});

function getSelected(){
	var selectedIds = tabla.columns().checkboxes.selected()[0];
	console.log(selectedIds)

	selectedIds.forEach(function(selectedId) {
    console.log(selectedId);
	});
}