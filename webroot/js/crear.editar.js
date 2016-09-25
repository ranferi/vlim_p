(function($) {
    $(document).ready(function(e) {
        if( $.fn.spinner ) {

            $('.da-spinner').spinner();

            $('.da-decimal-spinner').spinner({
                step: 0.01,
                numberFormat: "n"
            });

            $.widget( "ui.timespinner", $.ui.spinner, {
                options: {
                    // seconds
                    step: 60 * 1000,
                    // hours
                    page: 60
                },

                _parse: function( value ) {
                    if ( typeof value === "string" ) {
                        // already a timestamp
                        if ( Number( value ) == value ) {
                            return Number( value );
                        }
                        return +Globalize.parseDate( value );
                    }
                    return value;
                },

                _format: function( value ) {
                    return Globalize.format( new Date(value), "t" );
                }
            });

            $( ".da-time-spinner" ).timespinner({
                value: new Date().getTime()
            });
        };

        $('#mensaje').redactor({
            lang: 'es'
        });

        $("#da-ex-datetimepicker").datetimepicker({
            beforeShow: function() {
                setTimeout(function(){
                    $('#ui-datepicker-div').css('z-index', 2000);
                }, 0);
            }
        });

    });

}) (jQuery);
