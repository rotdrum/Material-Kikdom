$(document).ready(function() {
    $( ".sub-navbar-1" ).hide();
    $( ".sub-navbar-2" ).hide();
    $( ".sub-navbar-3" ).hide();
    $( ".sub-navbar-4" ).hide();

    $("#dropdown-1").click(function() {
        $(".sub-navbar-1").slideToggle();
        $(".sub-navbar-2").slideUp();
        $(".sub-navbar-3").slideUp();
        $(".sub-navbar-4").slideUp();
    });
    $("#dropdown-2").click(function() {
        $(".sub-navbar-2").slideToggle();
        $(".sub-navbar-1").slideUp();
        $(".sub-navbar-3").slideUp();
        $(".sub-navbar-4").slideUp();
    });
    $("#dropdown-3").click(function() {
        $(".sub-navbar-3").slideToggle();
        $(".sub-navbar-1").slideUp();
        $(".sub-navbar-2").slideUp();
        $(".sub-navbar-4").slideUp();
    });
    $("#dropdown-4").click(function() {
        $(".sub-navbar-4").slideToggle();
        $(".sub-navbar-1").slideUp();
        $(".sub-navbar-2").slideUp();
        $(".sub-navbar-3").slideUp();
    });

    $(".sub-navbar-1").mouseleave(function() {
        $(this).slideUp();
    });
    $(".sub-navbar-2").mouseleave(function() {
        $(this).slideUp();
    });
    $(".sub-navbar-3").mouseleave(function() {
        $(this).slideUp();
    });
    $(".sub-navbar-4").mouseleave(function() {
        $(this).slideUp();
    });



    

    
});