
/**
 * Inicializacion de componentes Materialize
 */
$(document).ready(function(){
    $('.sidenav').sidenav();
    $(".dropdown-trigger").dropdown();
    $('input#input_text, textarea#textarea2').characterCounter();
    $('select').formSelect();
    $('.modal').modal();
});

