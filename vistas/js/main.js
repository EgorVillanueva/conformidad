$(document).ready(function() {
    
    /*=====================================
                BARRA DE NAVEGACION
    ======================================*/
    
    // MENÚ ACORDEÓN
    $('.menu li:has(ul)').click(function(e) {
        e.preventDefault();
        
        if($(this).hasClass('activado')) {
            $(this).removeClass('activado');
            $(this).children('ul').slideUp();
        }else {
            // Ocultamos todos los submenu
            $('.menu li ul').slideUp();
            // Quita la clase activado para que se cierren los demas
            $('.menu li').removeClass('activado');
            // Se agrega la clase activado para q desaparezca cuando se haga click en otra
            $(this).addClass('activado');
            // Desplegar solo a los hijos ul
            $(this).children('ul').slideDown();
            //$(this).children('i').addClass('rotar');
        }
    });
    
    // DESPLEGAR MENÚ
    $('.push-menu').click(function() {
        $('.contenedor-nav .menu').slideToggle();
    })
    
    // MENÚ FIJO
    var alturaCabezote = $('.cabezote').innerHeight();
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if($(this).scrollTop() > 0) {
            $('.cabezote').addClass('fixed');
            $('body').css({'marginTop': alturaCabezote + 'px'});
        }else {
            $('.cabezote').removeClass('fixed');
            $('body').css({'marginTop':  '0px'});
        }
        
    })
    
    
});