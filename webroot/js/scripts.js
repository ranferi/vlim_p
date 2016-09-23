(function($) {
    $(document).ready(function(e) {
        if($.fn.elrte) {
            var options = {
                cssClass : 'el-rte',
                height   : 300,
                toolbar  : 'normal',
                cssfiles : ['../..plugins/elrte/css/elrte-inner.css'],
                fmAllow: true,
                fmOpen : function(callback) {
                    $('<div id="myelfinder"></div>').elfinder({
                        url : 'plugins/elfinder/connectors/php/connector.php',
                        lang : 'en',
                        height: 300,
                        dialog : { width : 640, modal : true, title : 'Select Image' },
                        closeOnEditorCallback : true,
                        editorCallback : callback
                    });
                }
            };
            $('#mensaje').elrte(options);
        }

        $("#da-ex-datetimepicker").datetimepicker();

        if($.fn.spinner) {
            var opts = {
                s1: {},
                s2: {places: 2, step : 0.25},
            };

            for (var n in opts)
                $("#da-ex-" + n).spinner(opts[n]);
        }

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
