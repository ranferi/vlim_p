(function($) {
    $(document).ready(function(e) {
        $("table#da-ex-datatable-numberpaging").dataTable({
            sPaginationType: "full_numbers",
            "oLanguage": {
                "sLengthMenu": "Mostrando _MENU_ resultados por página",
                "sZeroRecords": "No se ha encontado nada - disculpa",
                "sInfo": "Mostrando _START_ de _END_ de un total de _TOTAL_ resultados",
                "sInfoEmpty": "No hay resultados disponibles",
                "sInfoFiltered": "(filtrados de _MAX_ resultados en total)",
                "sSearch": "Buscar: ",
                "oPaginate": {
                    "sPrevious" : "Anterior",
                    "sNext" : "Siguiente",
                    "sLast" : "Último",
                    "sFirst" : "Primero"
                }
            }
        });
    });
}) (jQuery);
