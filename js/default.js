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
});