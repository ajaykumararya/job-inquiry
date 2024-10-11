document.addEventListener('DOMContentLoaded', function () {
    const job_category_id = $('[name="job_category_id"]');
    const subCatsBox = $('.list-sub-cats');
    const add_job = document.getElementById('add-job');
    var add_job_validation = MyFormValidation(add_job);

    job_category_id.on('change', function () {
        var selected_value = parseInt($(this).val());
        KTApp.showPageLoading();
        subCatsBox.html('');
        $.AryaAjax({
            url: 'job/list_sub_category',
            data: { job_category_id: selected_value }
        }).then(result => {
            subCatsBox.html(result.html);
            subCatsBox.find('[data-kt-search-element="form"] input').on('input', function () {
                // log($(this).val());
                var searchText = $(this).val().toLowerCase();
                log(searchText)
                if (searchText.trim() == '')
                    $('[data-kt-search-element="clear"]').addClass('d-none');
            
                else
                    $('[data-kt-search-element="clear"]').removeClass('d-none');
                var hasResults = false;
                $('.card-box').each(function () {
                    var box = this;
                    var listItemText = $(this).text().toLowerCase();
            
                    if (listItemText.indexOf(searchText) !== -1) {
                        $(box).stop().show(300);
                        hasResults = true;
                    } else {
                        $(box).stop().hide(300);
                    }
                    if (!hasResults)
                        subCatsBox.find('[data-kt-search-element="empty"]').removeClass('d-none');
                    else
                        subCatsBox.find('[data-kt-search-element="empty"]').addClass('d-none');
                });
            })
            subCatsBox.find('[data-kt-search-element="empty"]').addClass('d-none');
            subCatsBox.find('[data-kt-search-element="clear"]').on('click', function () {
                subCatsBox.find('[data-kt-search-element="form"] input').val('').trigger('input').focus();
            })
            KTApp.hidePageLoading();
        });
    });

    add_job_validation.addField('job_category_id', {
        validators: {
            notEmpty: { message: 'Please Select A category' }
        }
    });
    add_job_validation.addField('comapny_title', {
        validators: {
            notEmpty: { message: 'Please Enter Company Title..' }
        }
    });
    add_job_validation.addField('image', {
        validators: {
            notEmpty: {
                message: 'Please choose a file.'
            },
            file: {
                extension: 'jpg,jpeg,png,gif',
                type: 'image/jpeg,image/png,image/gif',
                maxSize: 5 * 1024 * 1024, // 5 MB
                message: 'The selected file is not valid. Allowed types: jpg, jpeg, png, gif. Maximum size: 5 MB.'
            }
        }
    });
    
    // log(add_job);
    add_job.addEventListener('submit',function(es){
        es.preventDefault();
        var ids = $(document).find('.job_sub_category_ids:checked').length;
        
        if(!ids){
            SwalWarning('Alert','Please Select a sub category..');
            return false;
        }
        $.AryaAjax({
            url : 'job/add',
            data : new FormData(this),
            validation : add_job_validation,
            success_message : 'Job Added Successfully..',
            page_reload : true 
        }).then(result => showResponseError(result));

    })

})