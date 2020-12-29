jQuery(document).ready(function ($) {
    $(document).on('click', '.show',function (e) {
        let url = $(this).data('href');
        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        let id = $(this).data('id');

        $.ajax({
            type : 'GET',
            url : url,
            data : {
                _token : CSRF_TOKEN,
            },
            dataType : 'JSON',
            success : function (res) {
                $('#show_title').html(res.nhankhau.ho_ten);
                $('#show_body').html(res.view);
                $('#showModal').modal('show');

                $('#edit_nhankhau').on('click', function (e) {
                    $('#btn_edit_' + id).click();
                })
            }
        })
    });

    // show create form
    $('.create').on('click', function (e) {
        let url = $(this).data('href');
        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        let id = $(this).data('id');

        $.ajax({
            type : 'GET',
            url : url,
            data : {
                _token : CSRF_TOKEN,
            },
            dataType : 'JSON',
            success : function (res) {
                $('#show_title').html(res.title);
                $('#show_body').html(res.view);
                $('#showModal').modal('show');
                if (id != null) {
                    $('#sohokhau_id').val(id);
                }
            }
        })
    });

    // submit create from
    $(document).on('submit', '#create_form', function (e) {
        e.preventDefault();

        let url = $(this).attr('action');
        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        let form = this;

        $.ajaxSetup({
            header : {
                'X-CSRF-TOKEN' : CSRF_TOKEN,
            }
        });

        $.ajax({
            type : 'POST',
            url : url,
            data : $(form).serialize(),
            dataType : 'JSON',
            success : function (res) {
                $('#table_body').prepend(res.view);
                $('#showModal').modal('hide');
                $('.content').prepend(res.message);
            }
        })
    });

    // show edit form
    $(document).on('click', '.edit' ,function (e) {
        let url = $(this).data('href');
        let row = $(this).closest('tr');
        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        jQuery.ajax({
            type : 'GET',
            url : url,
            data : {
                _token : CSRF_TOKEN,
            },
            dataType : 'JSON',
            success : function (res) {
                $('#show_title').html(res.nhankhau.ho_ten);
                $('#show_body').html(res.view);
                $('#showModal').modal('show');

                setActionEditForm(row);
            }
        })
    });


    function setActionEditForm(row) {
        // submit edit form
        $('#edit_form').on('submit', function (e) {
            e.preventDefault();

            let url = $(this).attr('action');
            let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            let form = this;

            $.ajaxSetup({
                header : {
                    'X-CSRF-TOKEN' : CSRF_TOKEN,
                }
            });

            $.ajax({
                type : 'PATCH',
                url : url,
                data : $(form).serialize(),
                dataType : 'JSON',
                success : function (res) {
                    $(row).replaceWith(res.view);
                    $('#showModal').modal('hide');
                    $('.content').prepend(res.message);
                }
            })
        });
    }

    // delete nhankhau
    $(document).on('click', '.delete', function (e) {
        let url = $(this).data('href');
        let row = $(this).closest('tr');
        swal({
            title: 'Xóa nhân khẩu?',
            text: 'Không thể khôi phục sau khi xóa',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
            showLoaderOnConfirm: true,
            allowOutsideClick: false,
        }).then(function(value) {
            if (value) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'DELETE',
                    url: url,
                    data: {
                        _token: CSRF_TOKEN,
                    },
                    dataType: 'JSON',
                    success: function (res) {
                        $(row).remove();
                    },
                    error: function () {
                        swal('Something went wrong!', {
                            icon: "error",
                        });
                    }
                });
            }
        });
    });

    // create CCCD
    $(document).on('submit', '#create_CCCD_form', function (e) {
        e.preventDefault();

        let url = $(this).attr('action');
        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        let form = this;

        $.ajaxSetup({
            header : {
                'X-CSRF-TOKEN' : CSRF_TOKEN,
            }
        });

        $.ajax({
            type : 'POST',
            url : url,
            data : $(form).serialize(),
            dataType : 'JSON',
            success : function (res) {
                $('#createCCCD').modal('hide');
                $('.show[data-id="' + $('#createCCCD').data('id') + '"]').click();
            }
        })
    });

    // edit CCCD
    $(document).on('submit', '#update_CCCD_form', function (e) {
        e.preventDefault();

        let url = $(this).attr('action');
        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        let form = this;

        $.ajaxSetup({
            header : {
                'X-CSRF-TOKEN' : CSRF_TOKEN,
            }
        });

        $.ajax({
            type : 'PATCH',
            url : url,
            data : $(form).serialize(),
            dataType : 'JSON',
            success : function (res) {
                $('#editCCCD').modal('hide');
                $('.show[data-id="' + $('#editCCCD').data('id') + '"]').click();
            }
        })
    });

    // delete CCCD
    $(document).on('submit', '#delete_CCCD_form', function (e) {
        e.preventDefault();

        let url = $(this).attr('action');
        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        let form = this;

        $.ajaxSetup({
            header : {
                'X-CSRF-TOKEN' : CSRF_TOKEN,
            }
        });

        $.ajax({
            type : 'DELETE',
            url : url,
            data : $(form).serialize(),
            dataType : 'JSON',
            success : function (res) {
                $('#deleteCCCDModal').modal('hide');
                $('.show[data-id="' + $('#deleteCCCDModal').data('id') + '"]').click();
            }
        })
    });

    // create GKS
    $(document).on('submit', '#create_GKS_form', function (e) {
        e.preventDefault();

        let url = $(this).attr('action');
        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        let form = this;

        $.ajaxSetup({
            header : {
                'X-CSRF-TOKEN' : CSRF_TOKEN,
            }
        });

        $.ajax({
            type : 'POST',
            url : url,
            data : $(form).serialize(),
            dataType : 'JSON',
            success : function (res) {
                $('#createGKS').modal('hide');
                $('.show[data-id="' + $('#createGKS').data('id') + '"]').click();
            }
        })
    });

    // edit GKS
    $(document).on('submit', '#update_GKS_form', function (e) {
        e.preventDefault();

        let url = $(this).attr('action');
        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        let form = this;

        $.ajaxSetup({
            header : {
                'X-CSRF-TOKEN' : CSRF_TOKEN,
            }
        });

        $.ajax({
            type : 'PATCH',
            url : url,
            data : $(form).serialize(),
            dataType : 'JSON',
            success : function (res) {
                $('#editGKS').modal('hide');
                $('.show[data-id="' + $('#editGKS').data('id') + '"]').click();
            }
        })
    });

    // delete GKS
    $(document).on('submit', '#delete_GKS_form', function (e) {
        e.preventDefault();

        let url = $(this).attr('action');
        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        let form = this;

        $.ajaxSetup({
            header : {
                'X-CSRF-TOKEN' : CSRF_TOKEN,
            }
        });

        $.ajax({
            type : 'DELETE',
            url : url,
            data : $(form).serialize(),
            dataType : 'JSON',
            success : function (res) {
                $('#deleteGKSModal').modal('hide');
                $('.show[data-id="' + $('#deleteGKSModal').data('id') + '"]').click();
            }
        })
    });
});
