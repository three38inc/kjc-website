//custom js for college of law page

$(document).ready(function(){
    
    
    // init Isotope
    var $ba = $('#course').isotope({
      filter: '.science'
    });
    // filter items on button click
    $('.filter-button-course').on( 'click', 'a', function() {
        $('.filter-button-course a').removeClass('active');
        $(this).addClass('active');
      var filterValue = $(this).attr('data-filter');
      $ba.isotope({ filter: filterValue });
    });
    
    
});