$(document).bind('pageinit', function () {
  $.ajax({
		url : 'db/teamresults.php',
		dataType : 'json',
		success : function (result) {
			var row = '';
			for (var i in result) {
				row += '<tr id="' + result[i].runid + '">';
				row += '<td>' + result[i].name + '</td>';
				row += '<td>' + result[i].runDate + '</td>';
				row += '<td>' + result[i].startTime + '</td>';
				row += '<td>' + result[i].duration + '</td>';
				row += '<td>' + result[i].distance + '</td>';
				row += '<td>' + result[i].comments + '</td>';
				row += '</tr>';
			}
			$('tbody#teamresults').empty();
			$(row).appendTo('tbody#teamresults');
		}
	});
});
