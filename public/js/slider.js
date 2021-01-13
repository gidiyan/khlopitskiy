var cont=0;
function loopSlider(){
    var xx= setInterval(function(){
        switch(cont)
        {
            case 0:{
                $("#slider-1").fadeOut(400);
                $("#slider-2").delay(400).fadeIn(400);
                $("#sButton1").removeClass("bg-color4");
                $("#sButton2").addClass("bg-color4");
                cont=1;
                break;
            }
            case 1:
            {
                $("#slider-2").fadeOut(400);
                $("#slider-1").delay(400).fadeIn(400);
                $("#sButton2").removeClass("bg-color4");
                $("#sButton1").addClass("bg-color4");
                cont=0;
                break;
            }
        }},6000);
}

function reinitLoop(time){
    clearInterval(xx);
    setTimeout(loopSlider(),time);
}

function sliderButton1(){
    $("#slider-2").fadeOut(400);
    $("#slider-1").delay(400).fadeIn(400);
    $("#sButton2").removeClass("bg-color4");
    $("#sButton1").addClass("bg-color4");
    reinitLoop(3000);
    cont=0
}

function sliderButton2(){
    $("#slider-1").fadeOut(400);
    $("#slider-2").delay(400).fadeIn(400);
    $("#sButton1").removeClass("bg-color4");
    $("#sButton2").addClass("bg-color4");
    reinitLoop(3000);
    cont=1
}

$(window).ready(function(){
    $("#slider-2").hide();
    $("#sButton1").addClass("bg-color4");
    loopSlider();
});
