$(function() {
	$("#add-share").live('click', function() {
		var share_span = $(".share-with-container").last().clone(true);
		share_span.find(':input').val('');
		if (!$(".share-with-container:last > i:first").hasClass('icon-remove-sign')) {
			$(".icon-plus-sign").last().before('<i class="icon-remove-sign icon-edit"> </i>');
		}
		$(".icon-plus-sign").remove();
		if ($(".share-with-container").last().next().hasClass('share-alert')){
			$(".share-with-container").last().next().after(share_span);
		} else {
			$(".share-with-container").last().after(share_span);
		}

		if (!$(".share-with-container:last > i:first").hasClass('icon-remove-sign')) {
			$(".icon-plus-sign").last().before('<i class="icon-remove-sign icon-edit"> </i>');
		} 	
	});

	$(".icon-remove-sign").live('click', 'i.icon-remove-sign', function() {
		$(this).parent().remove();
		if ($('.icon-plus-sign').length == 0) {
			$('.icon-remove-sign').last().after('<i id="add-share" class="icon-plus-sign icon-edit"> </i>');
			
		}
		if ($('.icon-remove-sign').length == 1) {
			$('.icon-remove-sign').remove();
		}
	});
	$(".share-input").blur(function() {
		var share = $(this).val();
		var obj = $(this).parent();
		console.log(share);
		if ($.trim(share) !== '') {
		
			$.post('../script/validate/share.php', { share: share}, function(data) {
				if (data == 1){
					if (obj.next().hasClass('share-alert')) {
						obj.next().addClass('alert-success').removeClass('alert-error').html('Found the user');
					}
				} else {
					if (obj.next().hasClass('share-alert')) {
						if (obj.next().hasClass('alert-error')) {
							obj.next().html('User still not found');
						}
					} else {
						obj.after('<div class="alert alert-error share-alert">User not found</div>');
					}
				}
			});
		}
	});		
	$('#token-input-demo-input-facebook-theme').live('focus', function() {
	 	$('.token-input-list-facebook').addClass('blue-shadow');
	});
	$('#token-input-demo-input-facebook-theme').live('blur', function() {
	 	$('.token-input-list-facebook').removeClass('blue-shadow');
	});
	
});
