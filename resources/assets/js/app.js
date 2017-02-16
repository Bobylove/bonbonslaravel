
$('.action_moins').on('submit', function(event){
	event.preventDefault();
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$.ajax({
		url : $(this).attr('action'),
		type : "POST",
		success : function(response){
			$(".").html(response);

		}

	});

});


$('.action_plus').on('submit', function(event){
	event.preventDefault();
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	
	$.ajax({
		url : $(this).attr('action'),
		type : "POST",
		success : function(response){

			$(".").html(response);

		}

	});

});



