$(function () {
    $('.js-basic-example').DataTable({
        responsive: true,
        "order": [[0, "desc"]],
        "columnDefs": [{ "orderable": false, "targets": 2, "searchable":false, "targets": 2 }]
    });
});