<?php
	include 'inc/scripts.php';
	include 'inc/stylesheets.php';
	include 'inc/questions.php';

	showQuestions([
		'Question number 1',
		'Question number 2',
	]);
?>

<!-- Button trigger modal -->
<div class="container">
	<div class="row">
		<div class="col-lg-5"></div>
		<div class="col-2">
			<button type="button" class="btn btn-primary align-middle" id="start" data-toggle="modal" data-target="#exampleModal">
			  Start questionaire
			</button>
		</div>
	</div>
</div>

<?php
	include 'modal.php';