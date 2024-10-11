document.addEventListener('DOMContentLoaded', function (e) {
    const delete_url = 'job/delete-category';
    const form = document.getElementById('add_course_category');
    const list_url = 'job/list-category';
    const save_url = 'job/add-category';
    const table = $('#category_list');
    const columns = [
        { 'data': 'title' },
        { 'data': 'set_in_page' },
        { 'data': null }
    ];
    // var dt = '';
    if (table.length) {
        const dt = table.DataTable({
            dom: small_dom,
            buttons: [],
            // ajax: {
            //     url: ajax_url + list_url,
            //     success: function (d) {
            //         // console.log(d);
            //         if (d.data && d.data.length) {
            //             dt.clear();
            //             dt.rows.add(d.data).draw();
            //         }
            //         else {
            //             toastr.error('Table Data Not Found.');
            //             DataTableEmptyMessage(table);
            //         }
            //     },
            //     error: function (a, b, v) {
            //         console.warn(a.responseText);
            //     }
            // },
            // columns: columns
            // columnDefs: [
            //     {
            //         targets: -1,
            //         // data: null,
            //         orderable: false,
            //         className: 'text-end',
            //         render: function (data, type, row) {
            //             console.log(data);
            //             return `<div class="btn-group">
            //                         <buttons class="btn btn-primary btn-xs btn-sm edit-record"><i class="ki-outline ki-pencil"></i> Edit</buttons>
            //                         ${deleteBtnRender(0, data)}
            //                     </div>
            //                     `;
            //         }
            //     }
            // ],
        });
        // dt.on('draw', function (e) {
        //     EditForm(table, 'job/edit-category', 'Edit Category');
        //     const handle = handleDeleteRows(delete_url);
        //     handle.done(function (e) {
        //         // console.log(e);
        //         table.DataTable().ajax.reload();
        //     });
        // });
        $('.delete-record').on('click',function(){
            var row = $(this).closest('tr');
            var job_category_id = row.data('id');
            SwalWarning('Confirmation!','Are you sure for delete it.',true,'Delete').then( (res) => {
                if(res.isConfirmed){
                    // alert(job_category_id);
                    $.AryaAjax({
                        url : `job/delete_category/${job_category_id}`,
                        success_message : 'Category Deleted Successfully..',
                        page_reload : true
                    }).then( (res) => showResponseError(res));
                }
            })
        })
        $('.edit-record').on('click',function(){
            var row = $(this).closest('tr');
            var job_category_id = row.data('id');
            var title = row.find('td').eq(0).text();
            var rowData = {job_category_id,title}
            var url = 'job/edit-category';
            var templateSource = document.getElementById('formTemplate');
                if (templateSource) {
                    templateSource = templateSource.innerHTML;
                    var template = Handlebars.compile(templateSource);
                    var formTemplate = template(rowData);
                    myModel('Edit Category', formTemplate, url).then((d) => {
                        // log(d);

                        if (d.status) {
                            location.reload();
                            ki_modal.modal('hide');

                        }
                        else {
                            // alert('hi');
                            if ('errors' in d) {
                                log(d.errors);
                                $.each(d.errors, function (i, v) {
                                    toastr.error(v);
                                });
                            }
                            else {
                                mySwal('Something Went Wrong.', 'Record not Update.', 'error')
                            }
                        }
                    });
                }
                else
                    SwalWarning('Template not found.', `${title} form template not found.`);
        })
    }
    if (form) {
        var validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    title: {
                        validators: {
                            notEmpty: {
                                message: 'Enter A Valid Category Name'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.form-group',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );
        form.addEventListener('submit', function (e) {
            // Prevent default button action
            e.preventDefault();
            var test = save_ajax(form, save_url, validator);
            test.done(function (data) {
                // console.log(data);
                table.DataTable().ajax.reload();
            })
        });
    }
});
