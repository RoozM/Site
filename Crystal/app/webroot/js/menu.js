


$(document).ready(function(){
	/**
		This handles the smooth menu transitions
	*/
	
	
	var title;
	
	function glideUp(obj){
		$(obj).animate({
					bottom: 47
				}, 200);
	}
	
	function glideDown(obj){
		$(obj).animate({
					bottom: 0
				}, 200);
	}
	
	function colorIn(obj){
		var colorto = $(obj).attr("colorto");
		$(obj).animate({
					backgroundColor: colorto,
					fontSize: 45
				}, 200);
	}
	
	function colorOut(obj){
		$(obj).animate({
					backgroundColor: "black",
					fontSize: 30
				}, 200);
	}
	
	$('.menu_item').hover(
			//Hover on
			function(e){
					
				title = $(("#menu_title_"+($(this).attr("item")).toLowerCase()));
				
				//glide colors
				colorIn(this);
				
				
				//glide text
				glideUp(title);
			},
			//Hover out
			function(){
				//glide out colors
			    colorOut(this);
				
				//glide out text
				glideDown(title);
			}
		);
	
	$('.menu_item').each(function(){
		var compare = $(this).attr('item');
		if(compare==current_page){
			title = $(("#menu_title_"+(compare).toLowerCase()));
			glideUp(title);
			colorIn(this);
			var obj = this;
			setTimeout(function(){
				glideDown(title);
			}, 2000);
		}
	});
});

