$(document).ready(function() {
    function cbInit() {
        $('input[type=checkbox]').iCheck({});
    }
    window._troq = window._troq || [];
    _troq.push(['tagid', '6556198-7803fa5bbff2638012db0b526d604c64']);
    _troq.push(['rtgpg', 'cat']);
    _troq.push(['rtgidcat', 'mission']);
    var getVidHTML = function(name) {
        var resWidth  = $(window).width() * .8;
        var resHeight = resWidth * .5625;
        return '<video id="' + name + '" width="' + resWidth + '" height="' + resHeight + '" class="big-vid video-js vjs-default-skin"  controls preload="auto" >'
            + '<source src="' + base + '/themes/default/videos/' + name + '.mp4" type="video/mp4" />'
            + '<source src="' + base + '/themes/default/videos/' + name + '.ogv" type="video/ogg" />'
            + '<source src="' + base + '/themes/default/videos/' + name + '.webm" type="video/webm" />'
            + '<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p></video>';
    };


    var removeVidSlide = function(vidElemID) {
        _V_(vidElemID).dispose();
    };
    var resizeVidSlide = function(slide) {
        var vidWidthCalculated  = getVidWidth();
        var vidHeightCalculated = getVidHeight();
        slide.width(vidWidthCalculated);
        slide.height(vidHeightCalculated);
    };
    var getVidWidth    = function() {
        return jQuery('#pressContentWrap').width(); //change to colorbox wrap
    };
    var getVidHeight   = function() {
        return getVidWidth() * 0.56190476; //check ratio again
    };
    /* MOBILE */
    var mobileSize = 756;
    var isMobile   = false;
    var width      = 0;

    function checkMobile() {
        width    = $(window).width();
        isMobile = (width < mobileSize);
    }

    checkMobile();
    $(window).on('resize focus', function() {
        checkMobile();
    });


    $('#inspire_sample').colorbox({
        transition: "fade",
        width: 400,
        opacity: '0.55'
    });

    var image_uploader = new plupload.Uploader({
        "runtimes": "html5",
        "browse_button": "browse-button",
        "container": "file-container",
        "url": "/upload-image",
        "headers": {"Accept": "application\/json", "X-CSRF-TOKEN": $('input[name="_token"]').val()},
        "chunk_size": "200kb",
        "filters": {
            mime_types: [
                {title: "Image files", extensions: "jpg,jpeg,png"}
            ],
            max_file_size: "5mb",
            prevent_duplicates: true
        },
        "init": {
            FilesAdded: function(up, files) {
                $('#file_name').html("<i class='fa fa-spinner fa-pulse' aria-hidden='true'></i> Uploading...");
                up.start();
            },
            UploadComplete: function(up, files) {
                if (files.length > 0) {
                    $('#error_msg').html(' ');
                    $('#image').val(files[0].name);
                    $('#file_name').html("Uploaded: " + files[0].name);
                    ga('send', 'event', 'ContestForm', 'Upload', 'Upload Complete');
                } else {
                    $('#error_msg').html('Please choose a file to upload.');
                    ga('send', 'event', 'ContestForm', 'Upload', 'Upload Error');
                }
            }
        }
    });
    image_uploader.init();


    $('.enlarge-image').colorbox({
        transition: "fade",
        width: width * .7,
        opacity: '0.55'
    });






    $('.vidLink').on('click', function(e) {
        e.preventDefault();

        var vidName   = $(this).data('vidname');
        var vidHTML   = getVidHTML(vidName);
        /*var resWidth  = $(window).width() * .8;
         var resHeight = resWidth * .5625;*/
        $.colorbox({
            href: vidHTML,
            inline: true,
            transition: "fade",
            opacity: '0.55',
            onComplete: function() {
                videojs(vidName, {}, function() {
                    homeVid = this;
                    homeVid.play();
                }).ready(function() {
                    var source = 'hp';
                    if ($('body').hasClass('mission')) {
                        source = 'mission';
                        ga('send', 'event', 'Video', 'Play', 'Mission');
                    } else {
                        ga('send', 'event', 'Video', 'Play', 'Home');
                    }
                    this.on("firstplay", function() {
                        _troq.push(
                            ['_rtgclickaction', source],
                            ['_rtgcompletion', '0'],
                            ['_rtgcompletiontime', '0'],
                            ['_rtgvideoclick', '1'],
                            ['_rtgconversion', '1'],
                            ['_rtgconversionlevel', '2'],
                            ['_rtgconversiontype', 'video']
                        );
                        $('#cboxOverlay').on('click', function() {
                            _troq.push(
                                ['_rtgclickaction', source],
                                ['_rtgcompletion', '2'],
                                ['_rtgcompletiontime', this.currentTime()],
                                ['_rtgvideoclick', '1'],
                                ['_rtgconversion', '1'],
                                ['_rtgconversionlevel', '2'],
                                ['_rtgconversiontype', 'video']
                            );
                        });
                    });
                    this.on("pause", function() {
                        _troq.push(
                            ['_rtgclickaction', source],
                            ['_rtgcompletion', '2'],
                            ['_rtgcompletiontime', this.currentTime()],
                            ['_rtgvideoclick', '1'],
                            ['_rtgconversion', '1'],
                            ['_rtgconversionlevel', '2'],
                            ['_rtgconversiontype', 'video']
                        );
                    });
                    this.on("ended", function() {
                        _troq.push(
                            ['_rtgclickaction', source],
                            ['_rtgcompletion', '1'],
                            ['_rtgcompletiontime', this.currentTime()],
                            ['_rtgvideoclick', '1'],
                            ['_rtgconversion', '1'],
                            ['_rtgconversionlevel', '2'],
                            ['_rtgconversiontype', 'video']
                        );
                    });
                });
            },
            onCleanup: function() {
                homeVid.dispose();
                homeVid = null;
                $('#' + vidName).remove();
            }
        })
    });

    var gauge_tls = {};
    var gauge_ts  = 3;
    var $gauge    = $('#mission').find('.gauge');
    if ($gauge[0]) {
        $gauge.each(function(i, s) {
            var obj_var = 'g' + i;

            var $fill_sqs = $(s).find('.fill_cont').find('.fill_sq');
            TweenMax.set($fill_sqs, {transformOrigin: 'bottom right'});
            gauge_tls[obj_var] = new TimelineMax({paused: true});
            var rot            = 0;
            $fill_sqs.each(function(k, v) {
                $(v).hide();
                gauge_tls[obj_var].add([
                    TweenMax.fromTo(v, (gauge_ts / 4), {rotation: rot}, {
                        rotation: (rot + 90) + '_cw',
                        ease: Linear.easeNone,
                        onReverseComplete: function() {
                            $(v).hide();
                        },
                        onStart: function() {
                            if (k == 3) $(v).css('z-index', 13);
                            $(v).show()
                        }
                    })
                ], (k * (gauge_ts / 4)));
                rot = rot + 90;
            });
        });
        var all_gauges_ts = new TimelineMax({delay: .5});
        all_gauges_ts.add([
            gauge_tls.g0.tweenFromTo(0, (gauge_ts * .12), {ease: Back.easeOut}).totalDuration(1),
            TweenMax.to($gauge.eq(0), .4, {scale: 1.05, ease: Power3.easeOut, yoyo: true, repeat: 1})
        ]);
        all_gauges_ts.add([
            gauge_tls.g1.tweenFromTo(0, (gauge_ts * .75), {ease: Back.easeOut}).totalDuration(1),
            TweenMax.to($gauge.eq(1), .4, {scale: 1.1, ease: Power3.easeOut, yoyo: true, repeat: 1})
        ], .3);
        all_gauges_ts.add([
            gauge_tls.g2.tweenFromTo(0, (gauge_ts * .33), {ease: Back.easeOut}).totalDuration(1),
            TweenMax.to($gauge.eq(2), .4, {scale: 1.07, ease: Power3.easeOut, yoyo: true, repeat: 1})
        ], .6);
        all_gauges_ts.play();
    }

    var $missionaccordion = $('#mission-accordion');
    if ($missionaccordion.length > 0) {
        $missionaccordion.find('.top i').attr('class', 'fa fa-2x fa-caret-right col-xs-1 center');
        $missionaccordion.find('.collapse.in').closest('.panel').find('.top i').attr('class', 'fa fa-2x fa-caret-down col-xs-1 center');

        $missionaccordion.find('a').on('click', function() {
            $missionaccordion.find('.top i').attr('class', 'fa fa-2x fa-caret-right col-xs-1 center');
            $(this).find('i').attr('class', 'fa fa-2x fa-caret-down col-xs-1 center');
        });
    }

});
