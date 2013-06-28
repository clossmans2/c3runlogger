$(document).bind('pageinit', function() {
  $.ajax({
		url : 'db/select-bar.php',
		dataType : 'json',
		success : function (result) {
			console.log(result);
			var row = '';
			for (var i in result) {
				row += '<option>' + result[i].Username + '</option>';
			}
			console.log(row);
			$('select#runner-select').empty();
			$(row).appendTo('select#runner-select');
		}
	});
/*	$('select#runner-select').bind( "change", function(event, ui) {
  ...
});*/
});
