(function($) {
    $(document).ready(function(e) {
        $.Redactor.prototype.advanced = function () {
            return {
                init: function () {
                    var button = this.button.add('advanced', 'Advanced');
                    this.button.addCallback(button, this.advanced.showAlert);
                },
                showAlert: function (buttonName) {
                    alert(buttonName);
                }
            };
        };
    });
})(jQuery);