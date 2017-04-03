$(':radio[name="rp"]').change(function() {
	
    var choosenForm = $(this).filter(':checked').val();

    if(choosenForm === "form1"){
        $("#form1").show();
        $("#form2").hide();
    }else if(choosenForm === "form2"){
        $("#form1").show();
        $("#form2").show();
    }
});

$(':radio[name="rrq"]').change(function() {
	
    var choosenForm = $(this).filter(':checked').val();

    if(choosenForm === "yes"){
        $("#yes").show();
        
    }else if(choosenForm === "no"){
        $("#yes").hide();
        
    }
});

$(':radio[name="rrp"]').change(function() {
	
    var choosenForm = $(this).filter(':checked').val();

    if(choosenForm === "yes"){
        $("#pay").show();
        
    }else if(choosenForm === "no"){
        $("#pay").hide();
        
    }
});
