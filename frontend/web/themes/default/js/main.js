jQuery(document).on('ready pjax:success',function () {
    function getBrowserVersion($browserClass,$classes) {
        $version = '';
        $.each($classes, function( $key, $class ) {
            if( ($class.length > $browserClass.length) && $class.match('^' + $browserClass)) {
                $version = getVersion($browserClass,$class);
            }
        });

        return $version;
    }
    function getVersion($browserClass,$class) {
        $version = $class.replace($browserClass,'');
        if( ($class.length > $browserClass.length) && $version.length > 2) {
            $version = $version.split("_");
        }
        return $version;
    }

    (function ($) {
        $siteHtml = $("html");
        $siteClasses = $siteHtml.attr('class').split(" ");
        $oldBrowserFlag = 0;
        $chromeMinVer = 40;
        $safariMinVer = 6;
        $ieMinVer = 9;
        $firefoxMinVer = 35;
        $operaMinVer = 12;

        $chromeVersion  = getBrowserVersion('chrome',$siteClasses);
        if($chromeVersion && $chromeVersion[0] < $chromeMinVer) {
            $oldBrowserFlag = 1;
        }

        $safariVersion  = getBrowserVersion('safari',$siteClasses);
        if($safariVersion && $safariVersion[0] < $safariMinVer) {
            $oldBrowserFlag = 1;
        }

        $ieVersion  = getBrowserVersion('ie',$siteClasses);
        if($ieVersion && $ieVersion[0] < $ieMinVer) {
            $oldBrowserFlag = 1;
        }
        $firefoxVersion  = getBrowserVersion('firefox',$siteClasses);
        if($firefoxVersion && $firefoxVersion[0] < $firefoxMinVer) {
            $oldBrowserFlag = 1;
        }

        $operaVersion  = getBrowserVersion('opera',$siteClasses);
        if($operaVersion && ($operaVersion[0] < $operaMinVer || (($operaVersion[0] == 12 && $operaVersion[1] < 14)) ))  {
            $oldBrowserFlag = 1;
        }

        if($oldBrowserFlag) {
				//$('#out-date-browser').modal('show');
				$('#out-date-browser').modal({
					 backdrop: 'static',
					 keyboard: false,
					 escapeClose: false,
					 clickClose: false,
					 showClose: false
				});
        }


        $('.panel-collapse').on('hide.bs.collapse', function () {
            $(this).parent().find('.glyphicon-triangle-right').show();
            $(this).parent().find('.glyphicon-triangle-bottom').hide();
        });

        $('.panel-collapse').on('show.bs.collapse', function () {
            $(this).parent().find('.glyphicon-triangle-right').hide();
            $(this).parent().find('.glyphicon-triangle-bottom').show();
        });

        $(".select2").select2();
        var imageLoader = document.getElementById('imageLoader');
        if(imageLoader) {
            imageLoader.addEventListener('change', handleImage, false);
            previewTag = $('.preview-wrapper');
            var fileName = "";
            var image = "";
            var ctx = "";
            var canvas = "";
            var index = 0;
            var angles = "";
            var imgg;

            function handleImage(e) {
                var reader = new FileReader();
                reader.onload = function (event) {
                    var img = new Image;
                    canvas = document.getElementById('canvas');
                    ctx = canvas.getContext('2d');

                    /// store angles (0, 90, 180, 270) in an array
                    angles = [0 * Math.PI, 0.5 * Math.PI, Math.PI, 1.5 * Math.PI];
                    index = 0;
                    imgg = img;
                    img.onload = start;
                    img.src = event.target.result;
                    previewTag.show();
                };
                reader.readAsDataURL(e.target.files[0]);
            }

            $('.img-rotate-left').click(rotateCCW);
            $('.img-rotate-right').click(rotateCW);
            function start() {

                /// set size and draw image
                renderImage();

                /// set up buttons


            }

            function rotateCCW() {
                index--;      /// decrement index of array

                if (index < 0) index = angles.length - 1;
                renderImage();
            }

            function rotateCW() {
                index++;     /// increment index of array
                console.log(index);
                if (index >= angles.length) index = 0;
                renderImage();
            }

            function renderImage() {

                $('#rotate-degree').val(index * 90);

                /// use index to set canvas size
                switch (index) {
                    case 0:
                    case 2:
                        /// for 0 and 180 degrees size = image
                        canvas.width = imgg.width;
                        canvas.height = imgg.height;
                        break;
                    case 1:
                    case 3:
                        /// for 90 and 270 canvas width = img height etc.
                        canvas.width = imgg.height;
                        canvas.height = imgg.width;
                        break;
                }

                /// get stored angle and center of canvas
                var angle = angles[index],
                    cw = canvas.width * 0.5,
                    ch = canvas.height * 0.5;

                /// rotate context
                ctx.translate(cw, ch);
                ctx.rotate(angle);
                ctx.translate(-imgg.width * 0.5, -imgg.height * 0.5);

                /// draw image and reset transform
                ctx.drawImage(imgg, 0, 0);
                ctx.setTransform(1, 0, 0, 1, 0, 0);
            }
        }

        loadGallery(true, 'a.thumbnail-img');

        //This function disables buttons when needed
        function disableButtons(counter_max, counter_current){
            $('#show-previous-image, #show-next-image').show();
            if(counter_max == counter_current){
                $('#show-next-image').hide();
            } else if (counter_current == 1){
                $('#show-previous-image').hide();
            }
        }

        /**
         *
         * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
         * @param setClickAttr  Sets the attribute for the click handler.
         */

        function loadGallery(setIDs, setClickAttr){
            var current_image,
                selector,
                counter = 0;

            $('#show-next-image, #show-previous-image').click(function(){
                if($(this).attr('id') == 'show-previous-image'){
                    current_image--;
                } else {
                    current_image++;
                }

                selector = $('[data-image-id="' + current_image + '"]');
                updateGallery(selector);
            });

            function updateGallery(selector) {
                var $sel = selector;
                current_image = $sel.data('image-id');

                $('#image-gallery-caption').text($sel.data('caption'));
                $('#image-gallery-title').text($sel.data('title'));
                $('#image-gallery-image').attr('src', $sel.data('image'));
                disableButtons(counter, $sel.data('image-id'));
            }

            if(setIDs == true){
                $('[data-image-id]').each(function(){
                    counter++;
                    $(this).attr('data-image-id',counter);
                });
            }
            $(setClickAttr).on('click',function(){
                updateGallery($(this));
            });
        }
        $('.weekly-image').click(function (e) {
            e.preventDefault();
            $('#weekly-image-popup').modal('show');
        });
        $('.weekly-text-nav').click(function (e) {
            e.preventDefault();
            $('#home-email-checker').submit();
        });
        $( ".product_type_page .tile" ).hover(
            function() {
                $(this).find('.title').addClass('title_full');
                $(this).find( ".description" ).slideToggle( "slow", function() {});
            }
        );


    })(jQuery);

});
