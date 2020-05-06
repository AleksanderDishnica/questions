<?php
	include 'inc/scripts.php';
	include 'inc/stylesheets.php';
	include 'inc/questions.php';
	include 'modal.php';

	showQuestions([
		'Question number 1',
		'Question number 2',
	]);
?>

<!-- Button trigger modal -->
<div class="container">
	<div class="row">
		<button type="button" class="btn btn-primary mx-auto d-block mt-5" id="start" data-toggle="modal" data-target="#exampleModal">
			Start questionaire
		</button>
	</div>
</div>