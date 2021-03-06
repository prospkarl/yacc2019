<!-- Modal -->
<div class="modal fade" id="viewUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <form action="<?= base_url('admin/edit') ?>" method="post">
        <input type="hidden" style="display:none" name="id" class="form-control">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLabel">Personal Information</h5>
            </div>
            <div class="modal-body">
              <div class="row" style="margin-bottom:2em">
                <div class="round">
                  <img class="avatar" src="assets/img/logo.png" alt="">
                </div>
              </div>
                <div class="row" style="margin-bottom:1em">
                    <div class="col-6">
                        <small>Full Name</small>
                        <h4 class="camper-data full_name">Karl Dale P. Arriba</h4>
                        <input type="text" style="display:none" name="full_name" class="form-control">
                    </div>
                    <div class="col-6">
                        <small>Nick Name</small>
                        <h4 class="camper-data nick_name">Caloy</h4>
                        <input type="text" style="display:none" name="nick_name" class="form-control">
                    </div>
                </div>
                <div class="row" style="margin-bottom:1em">
                    <div class="col-6">
                        <small>Birthdate</small>
                        <h4 class="camper-data birth_date">Caloy</h4>
                        <input type="text" style="display:none" name="birth_date" class="form-control">
                    </div>
                    <div class="col-6">
                        <small>Age</small>
                        <h4 class="camper-data age">20</h4>
                        <input type="text" style="display:none" name="age" class="form-control">
                    </div>
                </div>
                <div class="row" style="margin-bottom:1em">
                    <div class="col-6">
                        <small>Church</small>
                        <h4 class="camper-data church">Bacay Church of Christ</h4>
                        <input type="text" style="display:none" name="church" class="form-control">
                    </div>
                    <div class="col-6">
                        <small>Province</small>
                        <h4 class="camper-data province">Sample Province</h4>
                        <input type="text" style="display:none" name="province" class="form-control">
                    </div>
                </div>
                <div class="row" style="margin-bottom:1em">
                    <div class="col-6">
                        <small>Baptized</small>
                        <h4 class="camper-data baptized">Yes</h4>
                        <select class="form-control baptizedval" style="display:none" name="baptized">
                          <option value="0">Not Yet</option>
                          <option value="1">Paid</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <small>Paid</small>
                        <h4 class="camper-data paid">Paid</h4>
                        <select class="form-control paidval" style="display:none" name="paid">
                          <option value="0">Not Yet</option>
                          <option value="1">Paid</option>
                        </select>
                    </div>
                </div>
                <div class="row" style="margin-bottom:1em">
                    <div class="col-6">
                        <small>Date Registered</small>
                        <h4 class="camper-data date_registered">December 1, 2019</h4>
                        <input type="text" style="display:none" name="date_registered" class="form-control">
                    </div>
                    <div class="col-6">
                        <small>Group</small>
                        <h4 class="camper-data group">Assign to a group</h4>
                        <select class="form-control" style="display:none" name="group">
                          <option value="" selected disabled hidden>Select a group</option>
                          <?php foreach ($groups as $group): ?>
                            <option value="<?= $group['group_id'] ?>"><?= $group['group_name'] ?></option>
                          <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="row" style="margin-bottom:1em">
                    <div class="col-12">
                        <small>Additional Info</small>
                        <h4 class="camper-data additional_info">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis ea fuga suscipit eius libero maiores exercitationem fugiat possimus temporibus voluptates sunt natus, tenetur ut perferendis quo? Voluptas consequatur beatae nam?</h4>
                        <input type="text" style="display:none" name="additional_info" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary action-edit">Edit</button>
                <button type="submit" class="btn btn-success action-save" style="display:none">Save</button>
                <a href="" class="btn btn-success action-print" target="_blank">Print ID <i class="fa fa-print"></i></a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
      </form>
    </div>
</div>
