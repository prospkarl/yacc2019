const BASE_URL = $('#base_url').val();

$(document).ready(function() {
  initDataTable();
});

function initDataTable(){
  $('#table-campers').DataTable({
      "destroy": true,
      "processing": true,
      "serverSide": true,
      "ajax": {
          "url": BASE_URL + "admin/getusers",
          "type": "POST"
      },
      "columns": [
          { "data": "full_name" },
          { "data": "nick_name" },
          { "data": "age"},
          { "data": "church" },
          { "data": "group", "render": function(data) {
            return (data == null) ? 'No group' : data
          }},
          {
              "data": "paid",
              "render": function(data) {
                  if (data == 1) {
                      return 'Paid'
                  } else {
                      return 'Not yet'
                  }
              }
          },
          { "data": "id",
              "render": function(data) {
                  var html = '<a href="javascript:;" data-toggle="modal" data-target="#viewUser" onclick="handleView(' + data + ')" class="btn btn-sm btn-primary"> <i class="fa fa-eye"></i> View</a>';
                  // html += '<a href="javascript:;"> <i class="fa fa-edit text-primary"></i> </a>'
                  return html
              }
          },
      ],
      "columnDefs": [
          { targets: [6], sortable: false },
      ]
  });
}

$('#viewUser form').on('submit', function(e){
  e.preventDefault();

  $.ajax({
    url: $(this).attr('action'),
    type: 'POST',
    dataType: 'json',
    data: $(this).serialize(),
    success: function(res){
      console.log(res);
      Swal.fire({
          title: res.title,
          icon: res.type,
          text: res.message,
          onClose: () => {
            initDataTable();
            toggleEdit();
          }
      })
    }
  })
});

$('#viewUser').on('hidden.bs.modal', function () {
    if ($(this).hasClass('editMode')) {
      toggleEdit();
    }
});

$('.action-edit').on('click', function(){
  toggleEdit();
})

function toggleEdit(){
  $('#viewUser').toggleClass('editMode');
  $('#viewUser .camper-data, #viewUser .form-control, #viewUser .action-edit, #viewUser .action-save').toggle();
}

function handleView(id) {
    $.ajax({
        url: BASE_URL + 'admin/camperinfo/' + id,
        type: 'POST',
        dataType: 'json',
        success: function(res) {
            $.each(res.returnData, function(key, value) {
              if (key == 'paid' || key == 'baptized') {
                $('.' + key).html(value == 1 ? 'Yes' : 'Not Yet');
              }else if (key == 'paidval' || key == 'baptizedval') {
                $('.' + key).val(value);
              } else {
                $('.' + key).html(value);
              }
              $('input[name="' + key + '"]').val(value);
            });
        }
    })
}

function editGroup(id) {
    $.ajax({
        url: BASE_URL + 'groups/groupInfo/' + id,
        type: 'POST',
        dataType: 'json',
        success: function(res) {
          console.log(res);
          $('#editGroup').find('input[name="group_name"]').val(res.groupInfo.group_name);
          $('#editGroup').find('input[name="group_id"]').val(res.groupInfo.group_id);

          let options = '';

          $(res.groupMembers).each(function(index, value){
            options += '<option value="' + value.id + '">' + value.full_name + '</option>'
          })

          $('#editGroup').find('select[name="leader"]').html(options);
          $('#editGroup').find('select[name="leader"]').val(res.groupInfo.leader);
        }
    })
}
