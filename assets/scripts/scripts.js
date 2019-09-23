$(document).ready(function(){

    $("#loginForm").click(function(){
        $("#login").show();
        $("#register").hide();
    })

    $("#registerForm").click(function(){
        $("#login").hide();
        $("#register").show();
    })


}); //end doc ready
//TODO: Fix toggling active class when form submit un successful