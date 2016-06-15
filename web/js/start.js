$(document).on('ready', function() {
    $("select[data-colourpicker]").simplecolorpicker();

    //Handle repeating fields properly...
    $(".add-button").click( function() {
        $('select[data-colourpicker]').simplecolorpicker();
    });
});