$( document ).ready(function() {

    $('.far').click(function(){
        $('.far').not(this).popover('hide'); //all but this
    });
});