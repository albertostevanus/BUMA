$('#delete').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget)

    var employee_id = button.data('employeeid')
    var modal = $(this)

    modal.find('.modal-body #employee_id').val(employee_id);
})
