$(document).ready(function(){
    
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

    let colors = ["red", "blue", "orange"];
    let initial = 0;

    let hero = $('.hero');

    setInterval(() => {
        hero.css('background-color', `colors[${initial}]`)
        initial += 1 % colors.length;
    },1200)


})