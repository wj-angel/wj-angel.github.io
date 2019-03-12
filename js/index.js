window.onload=function(){
    $(".b").children(".goods-list").children(".grid-list").children(".grid-items").hover(
        function(){
            $(this).css({
                "box-shadow":"0px 5px 15px #999999"
                
            },200)
        },
        function(){
            $(this).css({
                "box-shadow":"0px 0px 0px white"
            },200)
        }
    )
    $(".clear-left").children("a").children("img").hover(
        function(){
            $(this).css({
                "box-shadow":"0px 5px 15px #999999"
                
            },200)
        },
        function(){
            $(this).css({
                "box-shadow":"0px 0px 0px white"
            },200)
        }
    )
    $(".clear-right").children("ul").children("li").hover(
        function(){
            $(this).css({
                "box-shadow":"0px 5px 15px #999999"
                
            },200)
        },
        function(){
            $(this).css({
                "box-shadow":"0px 0px 0px white"
            },200)
        }
    )
    $(".pic").hover(
        function(){
            $(this).css({
                "box-shadow":"0px 2px 5px #999999"
                
            },200)
        },
        function(){
            $(this).css({
                "box-shadow":"0px 0px 0px white"
            },200)
        }
    )
    $(".promo").children("ul").children("li").hover(
        function(){
            $(this).css({
                "box-shadow":"0px 5px 15px #999999"
                
            },200)
        },
        function(){
            $(this).css({
                "box-shadow":"0px 0px 0px white"
            },200)
        }
    )
    $(".nav-left").hover(
        function(){
            
            $(".n1").css({
                "border-top-right-radius":"0px"
                
            })
            $(".n6").css({
                "border-bottom-right-radius":"0px"
            })
           
        },
        function(){
            
            $(".n1").css({
                "border-top-right-radius":"10px"
                
            })
            $(".n6").css({
                "border-bottom-right-radius":"10px"
            })
           
        
    })
    
}