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
//TODO: toggle sign in sign up