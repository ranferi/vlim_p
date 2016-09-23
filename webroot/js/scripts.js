(function($) {
    $(document).ready(function(e) {
        $("#da-ex-datetimepicker").datetimepicker();

        if($.fn.spinner) {
            var opts = {
                s1: {},
                s2: {places: 2, step : 0.25},
                s3: {prefix : '$', places: 2, step: 0.1}
            };

            for (var n in opts)
                $("#da-ex-" + n).spinner(opts[n]);
        }


    });

}) (jQuery);
