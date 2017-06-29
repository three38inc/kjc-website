$(document).ready(function (e) {
    $('.create-label').on('click', function (e) {
        $.ajax({
            url: "snippets/create-label.php",
            type: "post",
            data: $('#contact-form').serialize(),
            success: function (data) {
                
            },
            error: function (data) {
                
            }
        });
    });
    $('.button-list-1 .btn1').on('click',function(e){
        $(this).toggleClass('btn-custom');
    });
    
});
