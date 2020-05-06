$(function() {
	let alertName = 0;
	let alertEmail = 0;

	$('#start').click(function(e){
		$('#exampleModal').modal({
			'backdrop':'static',
		});
	});

	$('#save').click(function(e){
		let name = $('#name').val();
		let email = $('#email').val();

		if(name){
			$.ajax({
				method:'POST',
				url:'ajax/question.php',
				data:{question:name},
				success:function(data){
					// Create the new modal
					$('#example1Modal').modal({
						'backdrop':'static',
					});
				}
			});
		}else{
			e.preventDefault();
			e.stopPropagation();

			if(alertName == 0 && (name == null || name == '')){
				$('.alerts').append('<p class="text-danger">Name cannot be empty!</p>');
				alertName++;
			}
			if(alertEmail == 0 && (email == null || email == '')){
				$('.alerts').append('<p class="text-danger">Email cannot be empty!</p>');
				alertEmail++;
			}
		}
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