 // edit list name
 $(document).on('click', '.editbtn', function (e) {
    e.preventDefault();
    var list = $(this).val();
    // alert(list);
    $('#editModal').modal('show');
    $.ajax({
        type: "GET",
        url: base_url + "/list-edit/" + list,
        success: function (response) {
            if (response.status == 404) {
                $('#success_message').addClass('alert alert-success');
                $('#success_message').text(response.message);
                $('#editModal').modal('hide');
            } else {
                // console.log(response.list.list_name);
                $('#name').val(response.list.list_name);
                $('#user_id').val(response.list.user_id);
                $('#created_by').val(response.list.list_createdby);
                $('#contacts').val(response.list.list_contacts);
                $('#list_id').val(list);
            }
        }
    });
    $('.btn-close').find('input').val('');

});
 // end edit list

 $(document).on('click', '.update_student', function (e) {
    e.preventDefault();

    $(this).text('Updating..');
    var id = $('#list_id').val();
    // alert(id);

    var data = {
        'name': $('#name').val(),
        'user_id': $('#user_id').val(),
        'created_by': $('#created_by').val(),
        'contacts': $('#contacts').val(),
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: "PUT",
        url: base_url + "/list-update/" + id,
        data: data,
        dataType: "json",
        success: function (response) {
            // console.log(response);
            if (response.status == 400) {
                $('#update_msgList').html("");
                $('#update_msgList').addClass('alert alert-danger');
                $.each(response.errors, function (key, err_value) {
                    $('#update_msgList').append('<li>' + err_value +
                        '</li>');
                });
                $('.update_student').text('Update');
            } else {
                $('#update_msgList').html("");

                $('#success_message').addClass('alert alert-success');
                $('#success_message').text(response.message);
                $('#editModal').find('input').val('');
                $('.update_student').text('Update');
                $('#editModal').modal('hide');
                location.replace(base_url+ "/list");
            }
        }
    });

});

// prospecting filter
$(document).on('click', '.prospecting_filter', function (e) {
    e.preventDefault();

    var datatype = $(this).attr('data_type');
        // alert(datatype);
        $.ajax({
        type: "GET",
        url: base_url + "/prospecting-filter/" + datatype,
        beforeSend: function() {
            $('.filter_loader').show();
            $('.hide_old_table_example').hide();
        },
        success: function (response) {
            $('.filter_loader').hide();
            $('.prespeting_responce').html(response);
        }
    });
});
// end prospecting