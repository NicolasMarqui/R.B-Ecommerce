$(document).ready(function(){

    $(window).scroll(function(){
        let top = $('.bottom');
        let filters = $('.filtersAndCat');

        if($(window).scrollTop() > 150){
            top.css('position', 'fixed');
            top.css('top', '0');
            top.css('width', '100%');
            //top.css('background-color', '#fff');

        }else{
            top.css('position', 'relative');
        }
    })
    
    function backHome(){
        let logo = $('#mainLogo');

        $(logo).click(function(){
            window.location.href="home"
        })
    }

    backHome();

    let image = $('.displayNewProduto > img');
    let info = $('.info');

    $(image).hover(function(){
        info.css('visibility', 'visible');
        $(this).css('opacity', '0.4');
    }, function(){
        info.css('visibility', 'hidden');
        $(this).css('opacity', '1');
    })

    let navMobileOpen = $('.menuMobile i');
    let navMovileClose = $('#closeMe');
    let fullNav = $('.fullNavMobile');

    $(navMobileOpen).click(function(){
        fullNav.removeClass('hidden-xs hidden-sm');
        fullNav.css('width', '100%');
    })

    $(navMovileClose).click(function(){
        fullNav.addClass('hidden-xs hidden-sm');
    })




    



})