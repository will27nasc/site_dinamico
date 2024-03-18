$(function(){
    let atual = -1;
    let maximo = $('.box-especialidades').length - 1;
    let timer;
    let animacaoDelay = 3;

    executarAnimacao();
    function executarAnimacao(){
        $('.box-especialidades').hide();

        timer = setInterval(function(){
            atual++;
            if(atual > maximo){
                clearInterval(timer);
                return false;
            }
            $('.box-especialidades').eq(atual).fadeIn();
        },animacaoDelay * 1000);
    }
});