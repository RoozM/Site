$(document).ready(function(){
		$('.blog-template').click(function(){
			var images = new Array("img1", "img2", "img3");
			for(var x = 0; x<images.length; x++){
				$(('#'+images[x])).find('input').val($(this).attr(images[x]));
			}
		})
	});