$(function(){
    /*搜索框*/
    $(".search>input").focus(function(){
        $(".search").animate({width:"200px"});
        $(".search>input").animate({width:"180px"});
        $(".search-icon").css({background:"#9d9d9d"})
    }).blur(function(){
        $(".search").animate({width:"160px"});
        $(".search>input").animate({width:"140px"});
        $(".search-icon").css({background:"none"})
    })
    /*点击*/
    $(".headline>li>a").click(function(){
        $(".headline>li>a").css({color:"#9d9d9d"})
        $(this).css({color:"#000"})
    })

})
$("#iframeId").on('load',function(){

});