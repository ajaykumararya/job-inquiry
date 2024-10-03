$(document).on('ready', function () {



  /*===================================*
	08. CONTACT FORM JS
	*===================================*/
    $(document).on("submit",".submit-enquiry-form", function (event) {
        event.preventDefault();
        var mydata = $(this).serialize();
     
        $.AryaAjax({
            url : 'website/contact-us-action',
            data : new FormData(this),
            success_message : 'Query Submitted Successfully..',
            page_reload : true
        })
      });

      $(document).on('click','.wpr-button.mine-popup',function(){
        
        var that = $(this).closest('form');
        // console.log($(that).serialize());
        $.AryaAjax({
            url : 'website/contact-us-action',
            data : $(that).serialize(),
            success_message : 'Query Submitted Successfully..',
            page_reload : true
        }).then((e) => {
          console.log('res' , e);
            $('#wpr-popup-id-233').hide();
        })
      });
});