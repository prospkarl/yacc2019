<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col-6">
                      <h4 class="card-title"> For Printing</h4>
                    </div>
                    <div class="col-6">
                      <div class="text-right">
                        <button type="submit" data-toggle="modal" data-target="#addGroup" class="btn btn-primary btn-round">Print all&nbsp; <i class="fa fa-print"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="table-groups" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Church</th>
                                    <th>Province</th>
                                    <th>Group</th>
                                    <th width="10%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php if (!empty($for_printing)): ?>
                                <?php foreach ($for_printing as $print): ?>
                                  <tr class="text-center">
                                    <td><?= $print['full_name'] ?></td>
                                    <td><?= $print['church'] ?></td>
                                    <td><?= $print['province'] ?></td>
                                    <td><?= $print['group_name'] ?></td>
                                    <td>
                                      <a href="javascript:;" class="btn btn-sm btn-success" data-toggle="modal" data-target="#editGroup" onclick="editGroup(<?= $print['id'] ?>)">
                                        Print <i class="fa fa-print"></i>
                                      </a>
                                      <!-- <a href="javascript:;">
                                        <i class="fa fa-trash text-primary"></i>
                                      </a> -->
                                    </td>
                                  </tr>
                                <?php endforeach; ?>
                              <?php else: ?>
                                <tr>
                                  <td colspan="100%">No Groups Created Yet</td>
                                </tr>
                              <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>