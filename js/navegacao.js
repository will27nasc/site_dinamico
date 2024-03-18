$(function(){
    carregamentoDinamico();
    function carregamentoDinamico(){
        $('[realtime').click(function(){
            let pagina = $(this).attr('realtime');
            $('main').hide();
            $('main').load(`${include_path}pages${pagina}.php`);

            $('main').fadeIn(1000);
            return false;
        });
    };
});