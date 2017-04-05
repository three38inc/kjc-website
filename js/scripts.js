
$(document).ready(function(e) {
    $('#mainCarousel').carousel();
    new WOW().init();
    //				setInterval(function(){
    //
    //					if($('#news').scrollTop()>="180")
    //					{
    //						/*$('#news').scrollTop("0");*/
    //						$('#news').animate({
    //							scrollTop: 0
    //						},500);
    //
    //					}
    //					else
    //					{
    //						var top = $('#news').scrollTop()+50;
    //						//alert(top);
    //						$('#news').animate({
    //							scrollTop: top
    //						},500);
    //						/*$('#news').scrollTop($('#news').scrollTop()+25);*/
    //					}
    //				},3000);

    $(".demo1").bootstrapNews({
        newsPerPage: 7,
        autoplay: true,
        pauseOnHover:true,
        direction: 'up',
        newsTickerInterval: 2000,
        onToDo: function () {
            //console.log(this);
        }
    });

    var open =true;

    $('.hide-btn').on('click',function(){
        if(open){
            $('.newsAlert').transition({ x: '-97%' },500,'snap');
            $('.newsAlert').css('border-radius','5px');
            $('.hide-btn').css('margin-right','-5px');
            $('.hide-btn i').removeClass('fa-angle-double-left');
            $('.hide-btn i').addClass('fa-angle-double-right');
            $('.hide-btn').css('float','right');
            open = !open;
        }
        else{
            $('.newsAlert').transition({ x: '0px' },500,'snap');
            $('.newsAlert').css('border-radius','5px');
            $('.hide-btn').css('margin-left','5px');
            $('.hide-btn i').removeClass('fa-angle-double-right');
            $('.hide-btn i').addClass('fa-angle-double-left');
            $('.hide-btn').css('float','left');
            open = !open;
        }
    });


    $(window).on('scroll',function(e){
        if($(window).scrollTop() + $(window).height() > $(document).height() - 100)
        {
          if(open)
          {
            $('.newsAlert').transition({ x: '-97%' },500,'snap');
            $('.newsAlert').css('border-radius','5px');
            $('.hide-btn').css('margin-right','-5px');
            $('.hide-btn').css('float','right');
            $('.hide-btn i').removeClass('fa-angle-double-left');
            $('.hide-btn i').addClass('fa-angle-double-right');
            open = !open;
          }
        }
        if($(window).scrollTop()=='0')
        {
            $('#top').addClass('big');
            //if(!isOpen)
            $('#top1').addClass('big');

            $('.st-menu').css('padding-top',(document.body.scrollTop+110)+'px');
            if($(window).width()>'767')
            {
                $('.widget.two').addClass('peek');
                $('.widget.one').addClass('peek');
            }
        }
        else
        {
            if($('#top').hasClass('big')&&$('#top1').hasClass('big'))
            {
                $('#top').removeClass('big');
                $('#top1').removeClass('big');
            }
            $('.st-menu').css('padding-top',(document.body.scrollTop+60)+'px');
            if($(window).width()>'767')
            {
                if($('.widget.two').hasClass('peek')&&$('.widget.two').hasClass('peek'))
                {
                    $('.widget.two').removeClass('peek');
                    $('.widget.one').removeClass('peek');
                }
            }
        }
    });

    $(".navbar-toggle").on("click", function () {
        $(this).toggleClass("active");
    });

    $(".navbar-default .navbar-nav > li > a").on('click',function(){
        //$(".navbar-collapse").toggleClass("in");
        //$(".navbar-toggle").toggleClass("active");

    });


    $(document).on('click', '.yamm .dropdown-menu', function(e) {
      //e.stopPropagation()
    });


});






//			var prevIndex = 0;
//			$('#mainCarousel').on('slide.bs.carousel', function () {
//				var carouselData = $(this).data('bs.carousel');
//				var currentIndex = carouselData.getItemIndex(carouselData.$element.find('.item.active'));
//
//				if(currentIndex!=2)
//					currentIndex = currentIndex + 1;
//				else
//					currentIndex = 0;
//
//				//console.log('currentIndex = '+currentIndex+' - prevIndex = '+prevIndex);
//
//				if(prevIndex!=currentIndex)
//				{
//					$('#cap'+prevIndex).toggleClass('active');
//					$('#cap'+currentIndex).toggleClass('active');
//					prevIndex = currentIndex;
//				}
//			});
//
//			var previousIndex = 0;
//			$('#testCarousel').on('slide.bs.carousel', function () {
//				var carouselData = $(this).data('bs.carousel');
//				var currentIndex = carouselData.getItemIndex(carouselData.$element.find('.item.active'));
//				//alert(currentIndex);
//				if(currentIndex!=2)
//					currentIndex = currentIndex + 1;
//				else
//					currentIndex = 0;
//				if(currentIndex == 0 && previousIndex!=2)
//                {
//                    currentIndex = 1;
//                }
//				//console.log('currentIndex = '+currentIndex+' - prevIndex = '+prevIndex);
//
//				if(previousIndex!=currentIndex)
//				{
//					$('#testcap'+previousIndex).toggleClass('active');
//					$('#testcap'+currentIndex).toggleClass('active');
//					previousIndex = currentIndex;
//				}
//			});
//


//			$('#animatedButton1').on('click', function() {
//				$('#topHeading').html('&nbsp;Collabrations');
//				$('#SubHeading').html('International Collaboration');
//				$('#innerContent').html('Kristu Jayanti college has established international collaboration with various universities across the world. The purpose of this agreement is to establish a framework within which academic and scientific...<a href="#">[Read More]</a>');
//			});
//
//			$('#animatedButton2').on('click', function() {
//				$('#topHeading').html('&nbsp;Student Life');
//				$('#SubHeading').html('Student Life');
//				$('#innerContent').html('Kristu Jayanti College moulds graduates with holistic sense, academic skills, to be socially responsible citizens to give themselves for the greater good. Students are encouraged to enjoy their studies...<a href="#">[Read More]</a>');
//			});
//
//			$('#animatedButton3').on('click', function() {
//				$('#topHeading').html('&nbsp;Achievements');
//				$('#SubHeading').html('Achievements');
//				$('#innerContent').html('The institution has experienced a rapid growth since its humble inception, inspired and guided by a charismatic management. Driven by a quest for excellence, it endeavors to impart, a holistic curriculum...<a href="#">[Read More]</a>');
//			});
//
//			$('#animatedButton4').on('click', function() {
//				$('#topHeading').html('&nbsp;Extra-Curriculam');
//				$('#SubHeading').html('Beyond Curriculam');
//				$('#innerContent').html('The Centre for Continuing Professional Development (CCPD) was initiated with an objective of providing training solutions to the corporates, NGOs and Educational Institutions with the specifi,...<a href="#">[Read More]</a>');
//			});
