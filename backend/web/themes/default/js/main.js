/**
 * Created by lacphan on 7/9/16.
 */

jQuery(document).on('ready pjax:success',function () {
    (function ($) {
        jQuery('.btn-bulk-option').click(function(event){

            var form = jQuery(this).closest('form');
            var action = jQuery(this).closest('form').find('select[name="bulk-option"]').val();
            var searchIDs = form.find('input[name="selection[]"]:checked').length;
            if(searchIDs > 0) {
                if(action == 'delete') {
                    event.preventDefault();
                    jQuery.confirm({
                        'title'		: 'Delete Confirmation',
                        'message'	: 'You are about to delete this item. <br />It cannot be restored at a later time! Continue?',
                        'buttons'	: {
                            'Yes'	: {
                                'class'	: 'blue',
                                'action': function(){
                                    form.submit();
                                }
                            },
                            'No'	: {
                                'class'	: 'gray',
                                'action': function(){
                                }
                            }
                        }
                    });
                }

            } else {
                alert('Please select item','Waring');
                return false;
            }
        });
        // $(".select2").select2();
        $('.image-modal').click(function (e) {
            e.preventDefault();
            $('#modal').modal('show').find('#image-viewer').attr('src',$(this).attr('href'))  ;
        });
    })(jQuery);
});
