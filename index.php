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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    	Name: <input type="text" name="name">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="save">Save changes</button>
      </div>
    </div>
  </div>
</div> 

<!-- Modal -->
<div class="modal fade" id="example1Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    	Name: <input type="text" name="name">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="save">Save changes</button>
      </div>
    </div>
  </div>
</div> 