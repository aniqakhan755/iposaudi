$(document).ready(function() {
    $('.ajax-form').submit(function(e) {
        const form = $(this);
        const modal = form.parents('.modal')
        e.preventDefault();

        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function (response) {
                toastr.success(response.message);
                modal.modal('hide');
                location.reload();
            },
            error: function (errors) {
                var errors = JSON.parse(errors.responseText);
                console.log(errors);
                $.each(errors.errors, function (key, val) {
                    toastr.error(val);
                });

            }
        });
    })

    $('.ajax-file-form').submit(function(e) {
        const form = $(this);
        const modal = form.parents('.modal')
        e.preventDefault();

        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data:  new FormData(this),
            mimeType:"multipart/form-data",
            contentType: false,
            cache: false,
            processData:false,
            success: function (res) {
                const response = JSON.parse(res);
                toastr.success(response.message);
                modal.modal('hide');
                location.reload();
            },
            error: function (errors) {
                var errors = JSON.parse(errors.responseText);
                console.log(errors);
                $.each(errors.errors, function (key, val) {
                    toastr.error(val);
                });

            }
        });
    })
});
