<!-- Modal for user registration -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="email" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name">
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="save">Save changes</button>
      </div>
    </div>
  </div>
</div> 

<!-- Modal for first question -->
<div class="modal fade" id="example1Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select any of the options</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    	<input type="checkbox" id="answer1" name="answer" value="Bike">
		<label for="answer"> Answer number 1</label><br>
		<input type="checkbox" id="answer2" name="answer" value="Car">
		<label for="answer"> Answer number 2</label><br>
		<input type="checkbox" id="answer3" name="answer" value="Boat">
		<label for="answer"> Answer number 3</label><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="save1">Save changes</button>
      </div>
    </div>
  </div>
</div> 