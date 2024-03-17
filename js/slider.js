$(function(){
    let curSlider = 0;
    let maxSlider = $('.banner-single').length - 1;
    let delay = 3;

    initSlider();
    changeSlide();

    function initSlider(){
        $('.banner-single').hide();
        $('.banner-single').eq(0).show();
        for(let i = 0; i < maxSlider+1; i++){
            let content = $('.bullets').html();

            if(i == 0){
                content += '<span class="active-slider"></span>';
            }else{
                content += '<span></span>';
            }

            $('.bullets').html(content);
        }
    }

    function changeSlide(){
        setInterval(function(){
            $('.banner-single').eq(curSlider).stop().fadeOut(2000);
            curSlider++;
            if(curSlider > maxSlider){
                curSlider = 0;   
            }

            $('.banner-single').eq(curSlider).stop().fadeIn(2000);
            $('.bullets span').removeClass('active-slider');
            $('.bullets span').eq(curSlider).addClass('active-slider');
        },delay * 1000)
    }

    $('body').on('click','.bullets span',function(){
        let currentBullet = $(this);
        $('.banner-single').eq(curSlider).stop().fadeOut(1000);
        curSlider = currentBullet.index();
        $('.banner-single').eq(curSlider).stop().fadeIn(1000);
        $('.bullets span').removeClass('active-slider');
        currentBullet.addClass('active-slider');
    });
})