$(document).ready(function(){
    
    function backHome(){
        let logo = $('#mainLogo');

        $(logo).click(function(){
            window.location.href="index.php"
        })
    }

    backHome();


})