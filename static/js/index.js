$(function(){
    /*自动轮播*/
    let t=setInterval(fn,3000);
    let num=0;
    function fn(){
        num++;
        if(num==$('.banner>li').length){
            num=0;
        }
        $('.banner>li').each(function(index,obj){
            $(this).css({opacity:0,transition:'opacity 0.6s'});
            $('.thumb>li').css({transform:'scale(1)'})
        })
        $('.banner>li').eq(num).css({opacity:1,transition:'opacity 0.6s'});
        $('.thumb>li').eq(num).css({transform:'scale(1.15)'})
    }
    function fn2(){
        num--;
        if(num==-1){
            num=$('.banner>li').length-1;
        }
        $('.banner>li').each(function(index,obj){
            $(this).css({opacity:0,transition:'opacity 1s'});
            $('.thumb>li').css({transform:'scale(1)'})
        })
        $('.banner>li').eq(num).css({opacity:1,transition:'opacity 1s'});
        $('.thumb>li').eq(num).css({transform:'scale(1.15)'})
    }
    /*缩略图点击*/
    $('.thumb>li').mouseenter(function(){
        num=$(this).index()-1;
        fn();
    })

    $('#banner').mouseenter(function(){
        clearInterval(t);
    }).mouseleave(function(){
        t=setInterval(fn,3000);
    })
    /*左右按钮*/
    $('.button>li:eq(1)').click(function(){
        fn();
    })
    $('.button>li:eq(0)').click(function(){
        fn2();
    })
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
})