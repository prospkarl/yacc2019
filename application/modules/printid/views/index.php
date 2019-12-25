<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col-6">
                      <h4 class="card-title"> For Printing</h4>
                      <small>NOTE: Camper must be assigned to a group to print id.</small>
                    </div>
                    <div class="col-6">
                      <div class="text-right">
                        <a href="javascript:;" class="btn btn-primary btn-round grey action-print-multiple">Print Multiple &nbsp; <i class="fa fa-print"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table-groups" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="20"></th>
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
                                    <td><input class="select-multiple" data-camperid="<?= $print['id'] ?>" type="checkbox" value=""></td>
                                    <td><?= $print['full_name'] ?></td>
                                    <td><?= $print['church'] ?></td>
                                    <td><?= $print['province'] ?></td>
                                    <td><?= $print['group_name'] ?></td>
                                    <td>
                                      <a href="<?= base_url('printid/p') ?>?print=<?= $print['id'] ?>" class="btn btn-sm btn-success" target="_blank">  Print <i class="fa fa-print"></i></a>
                                    </td>
                                  </tr>
                                <?php endforeach; ?>
                              <?php else: ?>
                                <tr>
                                  <td colspan="100%">No Data Found</td>
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
