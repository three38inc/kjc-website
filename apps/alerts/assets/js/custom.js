$(document).ready(function (e) {
    $('.btn-mail-delete').on('click',function(e){
        var selectedAlerts=[];
        $('body .mails input[type="checkbox"]:checked').each(function(){
            selectedAlerts.push($(this).data("id"));
        });
        if (confirm("Are you Sure to Delete?\nIf you don't want to Delete the alert message press Cancel\nOr Click OK to confirm Delete.")) {
                            $.ajax({
                                type: 'post',
                                beforeSend: function() {
                                    $('.ajax-loader').css("visibility", "visible");
                                },
                                url: "snippets/delete_alert_info.php",
                                data: { Selected:JSON.stringify(selectedAlerts)},
                                cache: false,
                                success: function(e) {
                                    if (e == "Success") {
                                        if (!alert("Success ! Selected Alerts has been Deleted :)"))
                                            location.reload();
                                    }else if(e == "Error") {
                                            if (!alert("Oops something went wrong ! Selected Id is not Present \n "))
                                                location.reload();
                                    }
                                    else {
                                            if (!alert("Oops something went wrong ! Unknown Reason \n "))
                                                location.reload();
                                    }
                                },
                                complete: function() {
                                    $('.ajax-loader').css("visibility", "hidden");
                                },
                                error: function(e) {}
                            });
                        }
    }); 
    $('#label-delete-modal .tag-remove').on('click',function(e){
        if (confirm("Are you Sure to Delete?\nIf you Delete this Tag All associated Alerts would get Deleted!. \nIf you don't want to Delete the Tag press Cancel\nOr Click OK to confirm Delete.")) {
            var tag_id = $(this).parent().data("tag-id");
            console.log(tag_id);
            $.ajax({
                type: 'post',
                beforeSend: function() {
                    $('.ajax-loader').css("visibility", "visible");
                },
                url: "snippets/delete-tag.php",
                data: { tag_id:tag_id},
                cache: false,
                success: function(e) {
                    if (e == "Success") {
                        if (!alert("Success ! Selected Tag has been Deleted :)"))
                            location.reload();
                    }else if(e == "Error") {
                            if (!alert("Oops something went wrong ! Selected Tag is not Present \n "))
                                location.reload();
                    }
                    else {
                            if (!alert("Oops something went wrong ! Unknown Reason \n "))
                                location.reload();
                    }
                },
                complete: function() {
                    $('.ajax-loader').css("visibility", "hidden");
                },
                error: function(e) {}
            });
        }
    });   
});
