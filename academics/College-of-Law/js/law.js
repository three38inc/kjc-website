//custom js for college of law page

$(document).ready(function(){
    
    // init Isotope
    var $ba = $('#ba').isotope({
      filter: '.ba-llb'
    });
    // filter items on button click
    $('.filter-button-ba').on( 'click', 'a', function() {
        $('.filter-button-ba a').removeClass('active');
        $(this).addClass('active');
      var filterValue = $(this).attr('data-filter');
      $ba.isotope({ filter: filterValue });
    });
    
    $('#baLLB').click(function(){window.location.href="BA-LLB/index.php";});
    $('#bcomLLB').click(function(){window.location.href="BCom-LLB/index.php";});
    $('#bbaLLB').click(function(){window.location.href="BBA-LLB/index.php";});
    
});