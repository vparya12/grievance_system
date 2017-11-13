

(function() {
    $('#file').change(function() {
        $('#name').val($(this).val().split(/\\|\//).pop());
    });
})(jQuery);
}

