$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
//        if(value == "news1")
//        {
//            $('.filter').show('1000');
//        }
//        else
//        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
//        }
    });
    
//    if ($(".filter-button").removeClass("active")) {
//$(this).removeClass("active");
//}
$(".fil-1").trigger("click");

});