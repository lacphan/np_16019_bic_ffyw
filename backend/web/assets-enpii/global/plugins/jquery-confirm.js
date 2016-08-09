/**
 * Created by lacphan on 12/12/15.
 */
window.alert = function(message, title) {
    var modalBox = $("#bootstrap-alert-box-modal");
    if(modalBox.length == 0) {
        $("body").append('<div id="bootstrap-alert-box-modal" class="modal fade">\
            <div class="modal-dialog">\
                <div class="modal-content">\
                    <div class="modal-header" style="min-height:40px;">\
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>\
                        <h4 class="modal-title"></h4>\
                    </div>\
                    <div class="modal-body"><p></p></div>\
                    <div class="modal-footer">\
                        <a href="#" data-dismiss="modal" class="btn btn-default">Close</a>\
                    </div>\
                </div>\
            </div>\
        </div>');
    }
    modalBox.find('.modal-header').find('h4').text(title || "");
    modalBox.find('.modal-body').find('p').text(message || "");
    modalBox.modal('show');
};
(function(jQuery){

    jQuery.confirm = function(params){
        var confirmModal = jQuery("#bootstrap-confirm-box-modal");
        if(confirmModal.length){
            confirmModal.modal('show');
            return false;
        }

        var buttonHTML = '';
        jQuery.each(params.buttons,function(name,obj){

            // Generating the markup for the buttons:

            buttonHTML += '<a href="#" class="btn btn-default button '+obj['class']+'">'+name+'<span></span></a>';

            if(!obj.action){
                obj.action = function(){};
            }
        });

        var markup = [
            '<div id="bootstrap-confirm-box-modal" class="modal fade">',
                '<div class="modal-dialog">',
                    '<div id="confirmBox" class="modal-content">',
                        '<div class="modal-header" style="min-height:40px;">',
                            '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>',
                            '<h4 class="modal-title">',params.title,'</h4>',
                        '</div>',
                        '<div class="modal-body"><p>',params.message,'</p></div>',
                        '<div class="modal-footer">',
                            buttonHTML,
                        '</div>',
                    '</div>',
                '</div>',
            '</div>'
        ].join('');

        jQuery(markup).hide().appendTo('body').modal('show');

        var buttons = jQuery('#confirmBox').find('.button'),
            i = 0;

        jQuery.each(params.buttons,function(name,obj){
            console.log(i);
            buttons.eq(i).click(function(){
                // Calling the action attribute when a
                // click occurs, and hiding the confirm.

                obj.action();
                jQuery.confirm.hide();
                return false;
            });
            i++;
        });
    };
    jQuery.confirm.hide = function(){
        jQuery("#bootstrap-confirm-box-modal").modal('hide').on('hide.bs.modal',function(){
            jQuery(this).remove();
        });
    }

})(jQuery);