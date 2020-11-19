var str = '';
$('#submit').click(function (){
    var data = $('.login-form').serializeArray();
    console.log($('.login-form'));
    $.ajax({
        url:'login.php',
        type:'post',
        data:{data},
        dataType:'json',
        success:function (e){
            if(e['code']===200){
                $('.dis-panel:eq(0)').text(e['msg']);
                $('.dis-panel:eq(0)').animate({opacity:1,right:'50px'},1000)
                setTimeout(function (){
                    location.href="index.html";
                },3000)
            }else{
                $('.dis-panel:eq(0)').text(e['msg']);
                $('.dis-panel:eq(0)').animate({opacity:1,right:'50px'},500)
                setTimeout(function (){
                    $('.dis-panel:eq(0)').animate({opacity:0,right:'-250px'},1000)
                },3000)
            }
        }
    })
})
$('.back-con').mouseenter(function (e){
    $('.back').animate({
        left:'20px',
        opacity:1
    },1000)
    $
})
$('.back-con').mouseleave(function (e){
    $('.back').animate({
        left:'-100px',
        opacity:0
    },1000)
})
$('.back').click(function (){
    location.href = "index.html";
})
$('.reg').click(function (e){
    e.preventDefault();
    $(".reg-panel").css('display','block');
    $(".reg-panel").animate({opacity:1},200)
})
//注册关闭按钮
$(".reg-close").click(function (){
    $(".reg-panel").animate({opacity:0},200)
    $(".reg-panel").css('display','none');
})
//注册按钮点击
$("#regbtn").click(function (e){
    e.preventDefault();
    var data1 = $(".reg-form").serializeArray();
    $.ajax( {
        url: "reg.php",
        data:{data:data1},
        type: 'post',
        dataType: 'json',
        success:function (e){
            if(e['code']==200){
                $('.dis-panel:eq(0)').text(e['msg']);
                $('.dis-panel:eq(0)').animate({opacity:1,right:'50px'},500)
                setTimeout(function (){
                    $('.dis-panel:eq(0)').animate({opacity:0,right:'-250px'},1000)
                },3000);
                $(".reg-panel").css('display','none');
                $(".reg-panel").animate({opacity:0},200)
            }else{
                $('.dis-panel:eq(0)').text(e['msg']);
                $('.dis-panel:eq(0)').animate({opacity:1,right:'50px'},500)
                setTimeout(function (){
                    $('.dis-panel:eq(0)').animate({opacity:0,right:'-250px'},1000)
                },3000)
            }
        }
    })
})