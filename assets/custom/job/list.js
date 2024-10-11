document.addEventListener('DOMContentLoaded',function(){
    $('#table-list').DataTable();

    $('.delete-job').click(function(){
        var id = $(this).data('id');
        SwalWarning('Confirmation','Are you sure you want delete this',true,'Delete').then( r => {
            if(r.isConfirmed){
                // alert('YES');
                $.AryaAjax({
                    url : 'job/delete',
                    data: {id},
                    success_message : 'Deleted Successfully..',
                    page_reload : true
                });
            }
        })
    })
})