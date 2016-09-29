(function($) {
    $(document).ready(function(e) {
        $("table#da-ex-datatable-numberpaging").dataTable({
            "language": {
                "lengthMenu": "Mostrando _MENU_ resultados por página",
                "zeroRecords": "No se ha encontrado nada - disculpa",
                "info": "Mostrando _START_ de _END_ de un total de _TOTAL_ resultados",
                "infoEmpty": "No hay resultados disponibles",
                "infoFiltered": "(filtrados de _MAX_ resultados en total)",
                "search": "Buscar: ",
                "paginate": {
                    "previous" : "Anterior",
                    "next" : "Siguiente",
                    "last" : "Último",
                    "first" : "Primero"
                }
            }
        });
    });
}) (jQuery);
