$(function(){
    hljs.initHighlightingOnLoad();
    $.each($('.marked'),function(i,o){
        $(o).html(marked($(o).text()));
    });

});

