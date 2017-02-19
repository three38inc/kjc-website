
$(function () {
  //$('[data-toggle="tooltip"]').tooltip();
});


$(function() {
	$("#inputNewsBigImg").change(function() {
		
		//$("#message").empty(); // To remove the previous error message
		var file = this.files[0];
		/*var imagefile = file.type;
		var match= ["image/jpeg","image/png","image/jpg","image/gif"];
		if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
		{
			$('#previewing').attr('src','noimage.png');
			$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
			return false;
		}
		else
		{*/
			var reader = new FileReader();
			reader.onload = imageIsLoaded;
			reader.readAsDataURL(this.files[0]);
		//}
	});
});

function imageIsLoaded(e) {
	$("#inputNewsBigImg").css("color","green");
	//$('#image_preview').css("display", "block");
	$('#news_big_img').attr('src', e.target.result);
	//$('#previewing').attr('width', '250px');
	//$('#previewing').attr('height', '230px');
	};


