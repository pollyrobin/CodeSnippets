$(function() {
	$("#add-share").live('click', function() {
		var share_span = $(".share-with-container").last().clone(true);
		if (!$(".share-with-container:last > i:first").hasClass('icon-remove-sign') ) {
			$(".icon-plus-sign").last().before('<i class="icon-remove-sign icon-edit"> </i>');
		}
		$(".icon-plus-sign").remove();
		$(".share-with-container").last().after(share_span);
		
		if ( !$(".share-with-container:last > i:first").hasClass('icon-remove-sign') ) {
			$(".icon-plus-sign").last().before('<i class="icon-remove-sign icon-edit"> </i>');
		} 	
	});

	$(".icon-remove-sign").live('click', 'i.icon-remove-sign', function() {
		$(this).parent().remove();
		if ( $('.icon-plus-sign').length == 0 ) {
			$('.icon-remove-sign').last().after('<i id="add-share" class="icon-plus-sign icon-edit"> </i>');
		}
	});
});
