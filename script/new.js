$(function() {
	$("#add-share").on('click', function() {
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
		var elems = $('.share-with-container').length;
		console.log(elems);
		//if (!$(".share-with-container:last > i:first").hasClass('icon-remove-sign')
	});
	


/*	$("select[name='visibility']").change(function () {
		if ( $("select[name='visibility'] option:selected").val() == "share" ){
			if ( !$("input[name='sharewith']")[0] ) {
				$("select[name='visibility']").after('<input class="sharewith" type="text" name="sharewith" />');
			}	
		} else {
			if ( $("input[name='sharewith']"[0]) ) {
				$("input[name='sharewith']").remove();	
			}
		}
	});*/
});
