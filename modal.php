<!-- Modal for user registration -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <!-- <label for="name">Name</label> -->
          <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter name" required>
        </div>
        <div class="form-group">
          <!-- <label for="email">Email address</label> -->
          <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email" required>
        </div>
        <div class="alerts"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="save">Save changes</button>
      </div>
    </div>
  </div>
</div> 

<!-- Modal for first question -->
<div class="modal fade" id="question1Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question nr1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="checkbox" id="q1a1" name="q1a1" value="Bike">
        <label for="q1a1"> Answer number 1</label><br>
        <input type="checkbox" id="q1a2" name="q1a2" value="Car">
        <label for="q1a2"> Answer number 2</label><br>
        <input type="checkbox" id="q1a3" name="q1a3" value="Boat">
        <label for="q1a3"> Answer number 3</label><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="save1">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal for second question -->
<div class="modal fade" id="question2Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question nr2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="checkbox" id="q2a1" name="q2a1" value="Bike">
        <label for="q2a1"> Answer number 1</label><br>
        <input type="checkbox" id="q2a2" name="q2a2" value="Car">
        <label for="q2a2"> Answer number 2</label><br>
        <input type="checkbox" id="q2a3" name="q2a3" value="Boat">
        <label for="q2a3"> Answer number 3</label><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="save2">Save changes</button>
      </div>
    </div>
  </div>
</div> 