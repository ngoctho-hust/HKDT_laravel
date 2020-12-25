$(document).ready(function () {
    jQuery(document).on('click', '.show', function (e) {
        let url = jQuery(this).data('href');
        let CSRF_TOKEN = jQuery('meta[name="csrf-token"]').attr('content');

        jQuery.ajax({
            type : 'GET',
            url : url,
            data : {
                _token : CSRF_TOKEN,
            },
            dataType : 'JSON',
            success : function (res) {
                jQuery('#show_title').html(res.nhankhau.ho_ten);
                jQuery('#show_body').html(res.view);
                jQuery('#showModal').modal('show');
            }
        })
    });

    // show create form
    jQuery(document).on('click', '.create', function (e) {
        let url = jQuery(this).data('href');
        let CSRF_TOKEN = jQuery('meta[name="csrf-token"]').attr('content');

        jQuery.ajax({
            type : 'GET',
            url : url,
            data : {
                _token : CSRF_TOKEN,
            },
            dataType : 'JSON',
            success : function (res) {
                jQuery('#show_title').html(res.title);
                jQuery('#show_body').html(res.view);
                jQuery('#showModal').modal('show');
            }
        })
    });

    // submit create from
    jQuery(document).on('submit', '#create_form', function (e) {
        e.preventDefault();

        let url = jQuery(this).attr('action');
        let CSRF_TOKEN = jQuery('meta[name="csrf-token"]').attr('content');

        let form = this;

        jQuery.ajaxSetup({
            header : {
                'X-CSRF-TOKEN' : CSRF_TOKEN,
            }
        });

        jQuery.ajax({
            type : 'POST',
            url : url,
            data : jQuery(form).serialize(),
            dataType : 'JSON',
            success : function (res) {
                jQuery('#table_body').prepend(res.view);
                jQuery('#createModal').modal('hide');
                jQuery('.content').prepend(res.message);
            }
        })
    });

    // show edit form
    jQuery(document).on('click', '.edit', function (e) {
        let url = jQuery(this).data('href');
        let CSRF_TOKEN = jQuery('meta[name="csrf-token"]').attr('content');

        jQuery.ajax({
            type : 'GET',
            url : url,
            data : {
                _token : CSRF_TOKEN,
            },
            dataType : 'JSON',
            success : function (res) {
                jQuery('#show_title').html(res.nhankhau.ho_ten);
                jQuery('#show_body').html(res.view);
                jQuery('#showModal').modal('show');
            }
        })
    });

    // // submit edit form
    // jQuery(document).on('submit', '#edit_form', function (e) {
    //     e.preventDefault();
    //
    //     let url = jQuery(this).attr('action');
    //     let CSRF_TOKEN = jQuery('meta[name="csrf-token"]').attr('content');
    //
    //     let form = this;
    //
    //     jQuery.ajaxSetup({
    //         header : {
    //             'X-CSRF-TOKEN' : CSRF_TOKEN,
    //         }
    //     });
    //
    //     jQuery.ajax({
    //         type : 'POST',
    //         url : url,
    //         data : jQuery(form).serialize(),
    //         dataType : 'JSON',
    //         success : function (res) {
    //             jQuery('#table_body').prepend(res.view);
    //             jQuery('#createModal').modal('hide');
    //             jQuery('.content').prepend(res.message);
    //         }
    //     })
    // });
});
