$(function () {
    $('.js-basic-example').DataTable({
        responsive: true,
        "order": [[2, "asc"]],
        "columnDefs": [{ "orderable": false, "targets": 4, "searchable":false, "targets": 4 }]
    });
});