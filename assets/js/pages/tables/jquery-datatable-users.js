$(function () {
    $('.js-basic-example').DataTable({
        responsive: true,
        "columnDefs": [{ "orderable": false, "targets": 4, "searchable":false, "targets": 4 }]
    });
});