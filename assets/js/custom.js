const BASE_URL = $('#base_url').val();

$(document).ready(function() {
    $('#table-campers').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": BASE_URL + "admin/getusers",
            "type": "POST"
        },
        "columns": [
            { "data": "full_name" },
            { "data": "nick_name" },
            {
                "data": "birth_date",
                "render": function(data) {
                    const d = new Date();
                    const nYear = d.getFullYear();

                    //From DB
                    const bYear = parseFloat(data.substr(0, 4));
                    return nYear - bYear;
                }
            },
            { "data": "church" },
            { "data": "group" },
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
            {
                "data": "id",
                "render": function(data) {
                    var html = '<a href="javascript:;" data-toggle="modal" data-target="#viewUser" onclick="handleView(' + data + ')"> <i class="fa fa-eye text-primary"></i> </a>';
                    html += '<a href="javascript:;"> <i class="fa fa-edit text-primary"></i> </a>'
                    return html
                }
            },
        ],
        "columnDefs": [
            { targets: [6], sortable: false },
        ]
    });



});

function handleView(id) {
    $.ajax({
        url: BASE_URL + 'admin/camperinfo/' + id,
        type: 'POST',
        dataType: 'json',
        success: function(res) {
            $.each(res.returnData, function(key, value) {
                $('.' + key).html(value);
                $('input[name="' + key + '"]').val(value);
            });
        }
    })
}