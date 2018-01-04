$(function(){
    $.each($('.marked'),function(i,o){
        $(o).html(marked($(o).text()));
    });
});

