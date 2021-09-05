
/* MENU RESPONSIVO */
$(".mb-menu").click(function () {
    $(".hamburger").toggleClass("is-active");
    $("#full-menu").toggleClass('act');
    $(this).toggleClass('act');
});

$("#full-menu .dl-menu > li > a").click(function () {
    var alvo = $(this);
    var lista = "#full-menu .dl-menu > li";
    var classe = "ativo";
    if (alvo.parent().hasClass(classe)) { /* verifica se a classe jÃ¡ existe no elemento atual*/
        $(lista).removeClass(classe); /* remove a classe de todos os li */
        $("#full-menu .dl-subMenu").slideUp("fast"); /* esconde todos as ul que podem estar abertas */
        $("#full-menu .dl-dropMenu").slideUp("fast"); /* esconde todos as ul que podem estar abertas */
    } else { /* se a classe nÃ£o existir naquele elemento */
        $(lista).removeClass(classe); /* remove a classe de todos os outros que houver */
        $("#full-menu .dl-subMenu").slideUp("fast"); /* esconde todos as ul que podem estar abertas */
        alvo.parent().addClass(classe); /* adiciona a classe nesse que foi clicado */
        alvo.next("#full-menu .dl-subMenu").stop().slideDown("fast"); /* abre o submenu deste objeto */
        $("#full-menu .dl-dropMenu").slideUp("fast"); /* esconde todos as ul que podem estar abertas */
    }
});


/* Header scroll */
$(window).scroll(function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > 20) {
        $("header").addClass("scroll");
        $("body").addClass("scroll");
    } else {
        $("header").removeClass("scroll");
        $("body").removeClass("scroll");
    }
});


/* Menu drop */
$('.dl-menu li.drop').mouseenter(function(){
    $('body').addClass('bgDark');
});
$('.dl-menu li.drop').mouseleave(function(){
    $('body').removeClass('bgDark');
});

$('.filtroClubes li.drop').mouseenter(function(){
    $('body').addClass('bgDark');
});
$('.filtroClubes li.drop').mouseleave(function(){
    $('body').removeClass('bgDark');
});