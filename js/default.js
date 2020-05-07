$(function() {
	let alertName = 0;
	let alertEmail = 0;

	$('#start').click(function(e){
		$('#registerModal').modal({
			'backdrop':'static',
		});
	});

	$('#save').click(function(e){
		let name = $('#name').val().trim();
		let email = $('#email').val().trim();

		if(name && email){
			$.ajax({
				method:'POST',
				url:'ajax/question.php',
				data:{question:name},
				success:function(data){
					// Empty all alerts
					$('.alerts').empty();

					// Create the new modal
					$('#questionModal').modal({
						'backdrop':'static',
					});
				}
			});
		}else{
			e.preventDefault();
			e.stopPropagation();

			if(alertName == 0 && (name == null || name == '') && name.length === 0){
				$('.alerts').append('<p class="text-danger" id="alertName">Name cannot be empty!</p>');
				alertName++;
			}
			else if(alertName == 1 && (name != null || name != '') && name.length !== 0){
				console.log('alertName: ' + alertName + '<br>');
				$('#alertName').empty();
				alertName--;
			}else{
				console.log(123);
			}

			if(alertEmail == 0 && (email == null || email == '') && email.length === 0){
				$('.alerts').append('<p class="text-danger" id="alertEmail">Email cannot be empty!</p>');
				alertEmail++;
			}
			else if(alertEmail == 1 && (email != null || email != '') && email.length !== 0){
				console.log('alertEmail: ' + alertEmail + '<br>');
				$('#alertEmail').empty();
				alertEmail--;
			}else{
				console.log(123);
			}
		}

		$('#registerModal .close, #registerModal #close').click(function(){
			$('#alertName').empty();
			$('#alertEmail').empty();
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