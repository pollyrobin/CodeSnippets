$(function() {
	$("select[name='visibility']").change(function () {
		if ( $("select[name='visibility'] option:selected").val() == "share" ){
			$("select[name='visibility']").after('&nbsp; <input type="text" name="sharewith" />');
		}
	});
});
