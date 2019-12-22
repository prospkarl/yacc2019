<!-- Modal -->
<div class="modal fade" id="addGroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
      <form class="" action="<?= base_url('groups/add') ?>" method="post">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLabel">Add Group</h5>
          </div>
          <div class="modal-body">
            <div class="row" style="margin-bottom:1em">
              <div class="col-12">
                        <small>Group Name</small>
                        <input type="text" name="group_name" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" >Add</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
      </form>
    </div>
</div>

<div class="modal fade" id="editGroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
      <form class="" action="<?= base_url('groups/edit') ?>" method="post">
        <input type="hidden" name="group_id" class="form-control" required>
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLabel">Edit Group</h5>
          </div>
          <div class="modal-body">
            <div class="row" style="margin-bottom:1em">
              <div class="col-12">
                <small>Group Name</small>
                <input type="text" name="group_name" class="form-control" required>
              </div>
            </div>
            <div class="row" style="margin-bottom:1em">
              <div class="col-12">
                <small>Leader</small>
                <select class="form-control" class="data-leader" name="leader">

                </select>
              </div>
            </div>
          </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" >Edit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
      </form>
    </div>

</div>
