jQuery(document).on('ready pjax:success',function () {
    (function ($) {
        $(".select2").select2();
        var imageLoader = document.getElementById('imageLoader');
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

            $('#rotate-degree').val(index*90);

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
    })(jQuery);
});
