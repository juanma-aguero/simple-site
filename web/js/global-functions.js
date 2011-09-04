function loadHistoryLinks(){
    $('.history-link').bind('click', function(e) {
        var url = $(this).attr('href');
        url = url.replace(/^.*#/, '');
        $.history.load(url);
        return false;
    });
}

$(document).ready(function($) {
    function load(dir) {
        $('#container-center').load(dir);
    }

    $.history.init(function(url) {
        load(url == "" ? "home/index" : url);
    });
   
    loadHistoryLinks();
    
    $('.homepage-menu a').bind('click', function(){
       $('.homepage-menu a').removeClass('selected');
            $(this).addClass('selected');
    });

});