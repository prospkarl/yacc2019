const BASE_URL = $('#base_url').val();

$(document).ready(function () {
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
            { "data": "age" },
            { "data": "church" },
            { "data": "group" },
        ]
    });
});