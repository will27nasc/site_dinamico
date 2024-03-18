$(function(){
    $('.menu-hamburger').click(function(){
        let listMenu = $('.mobile ul');
        let icone = $('.menu-hamburger i').find('i');

        listMenu.is(':hidden')? 
            icone.removeClass('fa-bars') &&
            icone.addClass('fa-x') &&
            listMenu.fadeIn()
             : 
            icone.removeClass('fa-x') &&
            icone.addClass('fa-bars') &&
            listMenu.fadeOut();
    });

    if($('target').length > 0){
        let elemento = '#'+$('target').attr('target');
        let divScroll = $(elemento).offset().top;
        $('html,body').animate({'scrollTop':divScroll}, 2000);
    };
});

