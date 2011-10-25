$(document).ready(function(){
        
    $(".homepage-menu a").mouseenter(function(){
        $(this).animate({
            fontSize: "15px"
        }, 200);
    });
    $(".homepage-menu a").mouseleave(function(){
        $(this).animate({
            fontSize: "13px"
        }, 150);
    });


    $(".product-thumbs").mouseenter(function(){
        ($(this).children('.product-description-thumbs')).animate({
            bottom: "150px"
        }, 200);
    });
    $(".product-thumbs").mouseleave(function(){
        ($(this).children('.product-description-thumbs')).animate({
            bottom: "0px"
        }, 200);
    });
    
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
        $("#promo-container").animate({
            left: '-=225'
        }, 200);
        timer += 225;
    }else{
        $("#promo-container").animate({
            left: '0'
        }, 200);
        timer = 0;
    }
}
function playPausePromo(){
    if(promoRunning){
        clearTimeout(timerID);
        promoRunning = false;
    }else{
        promoLoop();
    }
}
function followingPromo(){
    if(timer > 0){
        $("#promo-container").animate({
            left: '+=225'
        }, 200);
        timer -= 225;
    }
}


setTimeout("promoLoop()", promoTime);
function promoLoop(){
    promoRunning = true;
    nextPromo();
    timerID=setTimeout("promoLoop()", promoTime);
}

function showProduct( id, name ){
    $('#'+id).dialog({ 
        title: name,
        modal: true,
        show: 'fade',
        buttons: [{
                text: "Cerrar",
                click: function() { $(this).dialog("close"); }
            }],
        width: 400
    });
    }