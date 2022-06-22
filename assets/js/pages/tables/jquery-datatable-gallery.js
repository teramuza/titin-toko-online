$(function () {
    $('.js-basic-example').DataTable({
        responsive: true,
        "columnDefs": [{ "orderable": false, "targets": 5, "searchable":false, "targets": 5 }]
    });
});