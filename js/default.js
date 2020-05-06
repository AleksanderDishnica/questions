$(function() {
	$('#start').click(function(e){
		$('#exampleModal').modal({
			'backdrop':'static',
		});
	});

	$('#save').click(function(e){
		let name = $('[name=name]').val();

		$.ajax({
			method:'POST',
			url:'ajax/question.php',
			data:{question:name},
			success:function(data){
				console.log(data);
				if(data){
					// Close current modal
					$('#exampleModal').modal('hide');

					// Create the new modal
					$('#example1Modal').modal({
						'backdrop':'static',
					});
				}
				else{
					console.log(123);
					$('#name').append('<p class="text-danger">Name cannot be empty!</p>');
					return false;
				}
			}
		});
	});

	$('#save1').click(function(e){
		let selection = $("input[name='answer']:checked").val();
		console.log(selection);

		$.ajax({
			method:'POST',
			url:'ajax/answer.php',
			data:{selected:selection},
			success:function(data){

			}
		});
	});
});