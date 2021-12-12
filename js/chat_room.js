
$('#create').click(function(){
    $('.jumbotron').fadeIn("slow");
});

$('#close').click(function(){
    $('.jumbotron').fadeOut("slow");
});

$("#ifChecked").change(function(){

var ischecked=$(this).is(':checked'); 
    if(ischecked)
    {
        $("#checked-a").fadeIn(200);
    }
    else
    {
        $("#checked-a").fadeOut(200);   
    }
});