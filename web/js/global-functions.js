$(document).ready(function(){
        
    $(".homepage-menu a").mouseenter(function(){
        $(this).stop().animate({
            fontSize: "15px"
        }, 200);
    });
    $(".homepage-menu a").mouseleave(function(){
        $(this).stop().animate({
            fontSize: "13px"
        }, 150);
    });


    $(".product-thumbs").mouseenter(function(){
        ($(this).children('.product-description-thumbs')).stop().animate({
            bottom: "150px"
        }, 200);
    });
    $(".product-thumbs").mouseleave(function(){
        ($(this).children('.product-description-thumbs')).stop().animate({
            bottom: "0px"
        }, 200);
    });
    
    startLoop();
    
});

var timer = 0;
var promoCount = 3;
var promoWidth = 225;
var promoTime = 3000;
var promoRunning = true;
var timerID;

function nextPromo(){
    var now = (promoCount-1)*promoWidth;
   
    if(timer < (now)){
        $("#promo-container").stop().animate({
            left: '-=225'
        }, 200);
        $("#promo-container-text").stop().animate({
            left: '-=225'
        }, 200);
        timer += 225;
    }else{
        $("#promo-container").stop().animate({
            left: '0'
        }, 200);
        $("#promo-container-text").stop().animate({
            left: '0'
        }, 200);
        timer = 0;
    }
}
function playPausePromo(){
    if(promoRunning){
        stopLoop();
    }else{
        startLoop();
    }
}
function followingPromo(){
    if(timer > 0){
        $("#promo-container").stop().animate({
            left: '+=225'
        }, 200);
        $("#promo-container-text").stop().animate({
            left: '+=225'
        }, 200);
        timer -= 225;
    }
}

function startLoop(){
    function promoLoop(){
        promoRunning = true;
        nextPromo();
    }
    stopLoop();
    timerID=setInterval(promoLoop, promoTime);
}

function stopLoop(){
        clearInterval(timerID);
        promoRunning = false;
}




function showProduct( id, name ){
    
    $('#'+id).dialog({ 
        title: name,
        modal: true,
        show: 'fade',
        buttons: [{
            text: "Cerrar",
            click: function() {
                $(this).dialog("close");
            }
        }],
        width: 700
    });
    
}