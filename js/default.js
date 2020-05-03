$(function() {
	$('#save').click(function(e){
		let name = $('[name=name]').val();

		$.ajax({
			method:'POST',
			url:'ajax/question.php',
			data:{question:name},
			success:function(data){
				$('#exampleModal').modal('hide');
				$('#example1Modal').modal();
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