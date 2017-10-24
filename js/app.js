$(document).ready(function(){
	$('#submit').on('click', function(){
		var name = $('#name').val();
		var shout = $('#shout').val();
		var date = getDate();
		var dataString = 'name=' + name + '&shout=' + shout + '&date=' + date;

		// validate
		if(name == '' || shout == ''){
			alert('Please fill in your name and shout');
		} else {
			$.ajax({
				type:"POST",
				url:"../jsshoutbox/shoutbox.php",
				data: dataString,
				cache: false,
				success: function(html){
					$('#shouts ul').prepend(html);
				}
			});
		}

		return false;
	});
});

//formats date like MySQL date
function getDate(){
	var date;
	date = new date;
	date = date.getUTCFullYear() + '_' +
		('00' + (date.getUTCMonth() + 1)).slice(-2) + '_' +
		('00' + date.getUTCDate()).slice(-2) + '_' +
		('00' + date.getUTCHours()).slice(-2) + ':' +
		('00' + date.getMinutes()).slice(-2) + ':' +
		('00' + date.getSeconds()).slice(-2);
	return date;
}