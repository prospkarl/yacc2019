
<div class="container m-top-60">
  <div class="my-3 p-3 bg-white rounded shadow-sm " >
    <h4 class="border-bottom border-gray pb-2 mb-0">List of students</h4>
    <table id="datatable_sample" class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Student ID</th>
          <th scope="col">Full Name</th>
          <th scope="col">Username</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($result as $row): ?>
          <tr>
            <td><?php echo $row->id; ?></td>
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->username; ?></td>

          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
