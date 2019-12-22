<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col-6">
                      <h4 class="card-title"> Groups</h4>
                    </div>
                    <div class="col-6">
                      <div class="text-right">
                        <button type="submit" data-toggle="modal" data-target="#addGroup" class="btn btn-primary btn-round">Create new group</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="table-groups" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Group Name</th>
                                    <th>Leader</th>
                                    <th>Member Count</th>
                                    <th width="10%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php if (!empty($groups)): ?>
                                <?php foreach ($groups as $group): ?>
                                  <tr class="text-center">
                                    <td><?= $group['group_name'] ?></td>
                                    <td><?= $group['leader_name'] ?></td>
                                    <td><?= $group['count'] ?></td>
                                    <td>
                                      <a href="javascript:;" data-toggle="modal" data-target="#editGroup" onclick="editGroup(<?= $group['group_id'] ?>)">
                                        <i class="fa fa-edit text-primary"></i>
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

<?php include('modals.php') ?>
