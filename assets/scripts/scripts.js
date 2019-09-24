$(document).ready(function(){

    $("#loginForm").click(function(){
        $("#login").show();
        $("#register").hide();
    })

    $("#registerForm").click(function(){
        $("#login").hide();
        $("#register").show();
    })

    $('.icon').click(function(){
        $('nav').stop().slideToggle('slow');
        $('.icon').toggleClass('open');
        $('.icon i').toggleClass('fa-times');
    });

}); //end doc ready
//TODO: toggle sign in sign up