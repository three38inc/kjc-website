

$(window).on('scroll',function(e){				
    if($(window).scrollTop()>'50')
    {
        $(".navbar").addClass("small");
    }
    else
    {
        if($('.navbar').hasClass('small'))
        {
           $('.navbar').removeClass('small');							
        }
    }
});

$(document).ready(function(){
                setInterval(function(){
					
					if($('.testimonal').scrollTop()>=900)
					{
						/*$('#news').scrollTop("0");*/
						$('.testimonal').animate({
							scrollTop: 0
						},500);
						
					}
					else
					{
						var top = $('.testimonal').scrollTop()+100;
						//alert(top);
						$('.testimonal').animate({
							scrollTop: top
						},500);
						/*$('#news').scrollTop($('#news').scrollTop()+25);*/
					}
//                    alert($('.testimonal').scrollTop());
				},3000);
});