$(window).load(function() {

	// Post image container width 
	
	var imageContainerWidth = $("article").width() + 150;
	var imageContainerWidthMobile = $("article").width() + 70;
	
	if ($(window).width() < 700) {
		$("section.post-image").css({width: imageContainerWidthMobile});
	} else {
		$("section.post-image").css({width: imageContainerWidth});
	}
	
	// Post image centering
	
	$("section.post-image").each(function() {
		
		var imageHeight = $(this).find("img").height();
		var imageWidth = $(this).find("img").width();
				
		$(this).find("img").css({marginLeft: imageWidth / -2, marginTop: imageHeight / -2});
		
	});
	
	// Remove border last article 
	
	$("article:last").css({border: "none"});
	
});


$(window).resize(function() {
	
	// Post image container width 
	
	var imageContainerWidth = $("article").width() + 150;
	var imageContainerWidthMobile = $("article").width() + 70;
	
	if ($(window).width() < 700) {
		$("section.post-image").css({width: imageContainerWidthMobile});
	} else {
		$("section.post-image").css({width: imageContainerWidth});
	}
	
	// Post image centering
	
	$("section.post-image").each(function() {
		
		var imageHeight = $(this).find("img").height();
		var imageWidth = $(this).find("img").width();
				
		$(this).find("img").css({marginLeft: imageWidth / -2, marginTop: imageHeight / -2});
		
	});
	
});
