var mw_width  = 600;
var footerEls_tl;
var $reg_cont, reg_open;
var did_enter = false;
var base         = 'http://www.bicfightforyourwrite.com';
var fb_app_id    = '652943698129898';
var promo_status = 'contest_active';
var statesData   = null;
var fills        = null;
var ranges       = null;
function cbInit() {
    $('input[type=checkbox]').iCheck({});
}


var getVidHTML = function(name) {
    var resWidth  = $(window).width() * .8;
    var resHeight = resWidth * .5625;
    return '<video id="' + name + '" width="' + resWidth + '" height="' + resHeight + '" class="big-vid video-js vjs-default-skin"  controls preload="auto" >'
        + '<source src="' + base + '/assets/video/' + name + '.mp4" type="video/mp4" />'
        + '<source src="' + base + '/assets/video/' + name + '.ogv" type="video/ogg" />'
        + '<source src="' + base + '/assets/video/' + name + '.webm" type="video/webm" />'
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


$(document).ready(function() {

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

    /*function checkPromoBlock() {
     var $columns = $('.promo_block .column');
     $columns.height('auto');
     if (!isMobile) {
     var elementHeights = $columns.map(function() {
     return $(this).height();
     }).get();
     var maxHeight      = Math.max.apply(null, elementHeights);
     $columns.height(maxHeight);
     }
     }*/

    $('.navlink').on('click',function(){
        if ($(this).has('span')){
            ga('send', 'event', 'navlink', 'Click', $(this).find('span').html());
        } else {
            ga('send', 'event', 'navlink', 'Click', $(this).html());
        }
    });


    $.each($('.dropdown'), function(key, value) {
        var width = $(this).width();
        $(this).find('.dropdown-menu').css({'min-width': width + 5});
    });

    /* SCROLL TO */
    $('.scrollTo').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('href');
        $('html,body').animate({
            scrollTop: $(id).offset().top
        }, 500);
    });

    $('#phone').on('keyup', function() {
        var num   = $(this).val();
        num       = num.replace(/\D/g, '');
        var final = num;
        if (num.length >= 10) {
            final = final.substring(0, 10);
        }
        if (num.length >= 6) {
            final = [final.slice(0, 6), '-', final.slice(6)].join('');
        }
        if (num.length >= 3) {
            final = [final.slice(0, 3), ')', final.slice(3)].join('');
            final = [final.slice(0, 0), '(', final.slice(0)].join('');
        }
        $(this).val(final);
    });

    $('.checkbox_substitution.checked').removeClass('checked');
    $('.checkbox_substitution').on('click', function() {
        var $inputCheckbox = $(this).parent().find('input[type="checkbox"]');
        if ($inputCheckbox.is(':checked')) {
            $(this).removeClass('checked');
            $inputCheckbox.prop('checked', false);
        } else {
            $(this).addClass('checked');
            $inputCheckbox.prop('checked', true);
        }
    });
    $.each($('input[type="checkbox"]'), function(key, value) {
        if ($(value).is(':checked')) {
            $(value).parent().find('.checkbox_substitution').addClass('checked');
        }
    });

    $('.navbar-toggle').on('click', function() {
        $('#pageNav').toggleClass('expanded');
    });


    $('#regForm').on('submit', function(e) {
        var first_name = $('#first_name').val();
        var last_name  = $('#last_name').val();
        var city       = $('#city').val();
        var state      = $('#state').val();
        var school     = $('#school').val();
        var email      = $('#email').val();
        var msg        = null;
        $(this).find('input, select').removeClass('error');

        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        if (!re.test(email)) {
            msg = 'The e-mail address is not valid.';
        }
        var substrings = ['http', 'html', 'www', 'href'];
        var length     = substrings.length;
        while (length--) {
            if (first_name.indexOf(substrings[length]) != -1) {
                msg = '*The first name is not valid.';
                $('#first_name').addClass('error');
            }
            if (last_name.indexOf(substrings[length]) != -1) {
                msg = '*The last name is not valid.';
                $('#last_name').addClass('error');
            }
            if (city.indexOf(substrings[length]) != -1) {
                msg = '*The city is not valid.';
                $('#city').addClass('error');
            }
        }
        if (!first_name) {
            msg = '*Please Fix Errors in Red.';
            $('#first_name').addClass('error');
        }
        if (!last_name) {
            msg = '*Please Fix Errors in Red.';
            $('#last_name').addClass('error');
        }
        if (!city) {
            msg = '*Please Fix Errors in Red.';
            $('#city').addClass('error');
        }
        if (!state) {
            msg = '*Please Fix Errors in Red.';
            $('#state').addClass('error');
        }
        if (!school) {
            msg = '*Please Fix Errors in Red.';
            $('#school').addClass('error');
        }
        if (!email) {
            msg = '*Please Fix Errors in Red.';
            $('#email').addClass('error');
        }
        if (msg) {
            $('#pledge_error').html(msg);
            e.preventDefault();
            ga('send', 'event', 'PledgeForm', 'Click', 'Not Validated');
        } else {
            ga('send', 'event', 'PledgeForm', 'Click', 'Validated And Submitted');
        }
    });

    $('#inspire_sample').colorbox({
        transition: "fade",
        width: 400,
        opacity: '0.55'
    });

    var $promoForm = $('#promoForm');

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

    var $votingForm = $('#votingForm');
    $votingForm.validationEngine('attach', {
        onSuccess: function(a, b, c) {
            valid = true;
        },
        scroll: false,
        addPromptClass: true,
        validateNonVisibleFields: true,
        onFailure: function() {
        },
        onValidationComplete: function(form, status) {
            $votingForm.find(".error").removeClass("error");
            $('.formError').hide();

            if (status == false) {
                var fields = this.InvalidFields;
                var msg    = null;

                $.each(fields, function(k, v) {
                    $(v).addClass('error');
                });
                if ($('#rules').hasClass('error')) {
                    $('#rules').removeClass('error');
                    $('#rules_box').addClass('error');
                }

                $.each(fields, function(k, v) {
                    if ($(v.previousSibling).find('.formErrorContent').html().replace('* ', '').indexOf('fill one of the following fields') >= 0 && !msg) {
                        msg = 'Please vote for at least one of the groups above.';
                        return false;
                    }
                    if ($(v.previousSibling).find('.formErrorContent').html().replace('* ', '').indexOf('is required') >= 0 && !msg) {
                        msg = 'Please fill in required fields above.';
                        return false;
                    }
                    if ($(v.previousSibling).find('.formErrorContent').html().replace('* ', '').indexOf('Invalid email address') >= 0 && !msg) {
                        msg = 'The e-mail entered is not valid.';
                        return false;
                    }
                    if ($(v.previousSibling).find('.formErrorContent').html().replace('* ', '').indexOf('phone number') >= 0 && !msg) {
                        msg = 'The phone number entered is not valid.';
                        return false;
                    }
                    if ($(v.previousSibling).find('.formErrorContent').html().replace('* ', '').indexOf('not eligible') >= 0 && !msg) {
                        msg = "You're not eligible to enter this promotion.<br/>See <a class='rules' href='/official-rules' target='_blank'>Official Rules</a> for more details.";
                        return false;
                    }
                    if (v.name == 'rules' && !msg) {
                        msg = 'Please accept the <a href="/official-rules" target="_blank">Official Rules</a>.';
                        return false;
                    }
                });

                if (msg == null) {
                    msg = 'Please fill in required fields above.';
                }

                $votingForm.find("#error_msg").html(msg);
                ga('send', 'event', 'VotingForm', 'Click', 'Not Validated');
                return false;
            } else {
                $votingForm.find("#error_msg").html('&nbsp;');
                ga('send', 'event', 'VotingForm', 'Click', 'Validated And Submitted');
                return true;
            }
        }
    });

    $('.enlarge-image').colorbox({
        transition: "fade",
        width: width * .7,
        opacity: '0.55'
    });

    if ($('.voting').length > 0){
        $('.vote-btn').on('click',function(e) {
            e.preventDefault();
            var group = $(this).closest('.choices').data('group');

            var $closeOverlay = $(this).closest('.choice').find('.overlay');
            var $allOverlay = $(this).closest('.choices').find('.overlay');

            if ($(this).closest('.choices').find('.overlay:hidden').length == 5){
                $(this).closest('.choices').find('.overlay').fadeIn();
                $closeOverlay.hide();
                var finalistID = $(this).data('id');
                $('#group'+group+'vote').val(finalistID);
                $(this).html('Change Vote');
            } else {
                $(this).closest('.choices').find('.overlay').fadeOut();
                $('#group'+group+'vote').val('');
                $(this).html('Vote!');
            }
        });
        var finalistID, $btn, $closeOverlay;
        if ($('#group1vote').val() != ''){
            finalistID = $('#group1vote').val();
            $btn = $('.vote-btn[data-id="'+finalistID+'"]');
            $closeOverlay = $btn.closest('.choice').find('.overlay');
            $btn.closest('.choices').find('.overlay').fadeIn();
            $closeOverlay.hide();
            $btn.html('Change Vote');
        }
        if ($('#group2vote').val() != ''){
            finalistID = $('#group2vote').val();
            $btn = $('.vote-btn[data-id="'+finalistID+'"]');
            $closeOverlay = $btn.closest('.choice').find('.overlay');
            $btn.closest('.choices').find('.overlay').fadeIn();
            $closeOverlay.hide();
            $btn.html('Change Vote');
        }
    }


    var $takeOptinForm = $('#takeOptinForm');
    $takeOptinForm.find('#children').on('change', function(e) {
        if ($(this).find('option:selected').val() == 'yes') {
            $('#schoolChildren:hidden').slideDown();
        } else {
            $('#schoolChildren:visible').slideUp();
        }
    });
    $takeOptinForm.on('submit', function(e) {
        var first_name = $('#first_name').val();
        var last_name  = $('#last_name').val();
        var email      = $('#email').val();
        var zip        = $('#zip').val();
        var children   = $('#children').val();
        var school     = $('#school').val();
        var optin      = $('#optin').is(':checked');
        var msg        = null;
        $(this).find('input, select, .optin_checkbox').removeClass('error');

        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        if (!re.test(email)) {
            msg = 'The e-mail address is not valid.';
        }
        if (!first_name) {
            msg = '*Please Fix Errors in Red.';
            $('#first_name').addClass('error');
        }
        if (!last_name) {
            msg = '*Please Fix Errors in Red.';
            $('#last_name').addClass('error');
        }
        if (!email) {
            msg = '*Please Fix Errors in Red.';
            $('#email').addClass('error');
        }
        if (!zip) {
            msg = '*Please Fix Errors in Red.';
            $('#zip').addClass('error');
        }
        if (!children) {
            msg = '*Please Fix Errors in Red.';
            $('#children').addClass('error');
        }
        if (!school) {
            msg = '*Please Fix Errors in Red.';
            $('#school').addClass('error');
        }
        if (!optin) {
            msg = '*Please Fix Errors in Red.';
            $('.optin_checkbox').addClass('error');
        }
        if (msg) {
            $('#reg_error').html(msg);
            e.preventDefault();
            ga('send', 'event', 'TakeOptinForm', 'Click', 'Not Validated');
        } else {
            ga('send', 'event', 'TakeOptinForm', 'Click', 'Validated And Submitted');
        }
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

    /* PRODUCTS */
    $('.prod_details_block').hover(function(e) {
        if ($(window).width() > 767) {
            var $copy = $(this).find('.copy');
            TweenMax.to($copy, 1, {css: {marginTop: '-' + ($copy.height() - 65)}});
        }
    }, function() {
        if ($(window).width() > 768) {
            var $copy = $(this).find('.copy');
            TweenMax.to($copy, 1, {css: {marginTop: 0}});
        }
    });

    /* Gallery */
    if ($('.gallery').length > 0) {
        $('#searchGalleryForm').on('submit', function(e) {
            e.preventDefault();
        });
        $('#gallerySearch').on('keyup', function(e) {
            e.preventDefault();
            $.ajax({
                url: base + '/gallery-contents?s=' + $('#gallerySearch').val(),
                dataType: 'html',
                async: false,
                success: function(data, status, xhr) {
                    $('#entries').html(data);
                }
            });
        });
        $('body').on('click', '#see-more', function(e) {
            e.preventDefault();
            $.ajax({
                url: base + '/gallery-contents?s=' + $('#gallerySearch').val() + '&p=' + ++p,
                dataType: 'html',
                async: false,
                success: function(data, status, xhr) {
                    $('#see_this_box').remove();
                    $('#entries').append(data);
                }
            });
        });
    }


    /* SOCIAL SHARES */
    $('#fb_share').on('click', function(e) {
        e.preventDefault();
        FB.ui({
            method: 'feed',
            app_id: fb_app_id,
            name: 'BIC Fight For Your Write',
            link: base,
            picture: base + '/assets/img/share_icon.jpg',
            description: "I just joined BIC's mission to celebrate handwriting! Click to learn more.",
            actions: [{
                name: "Take BIC's Pledge!",
                link: base
            }]
        }, function(response) {
            if (response && response.post_id) {
                ga('send', 'event', 'Share', 'Pledge', 'Facebook');
            }
        });
    });
    $('#tw_share').on('click', function(e) {
        e.preventDefault();
        var width   = 575,
            height  = 400,
            left    = ($(window).width() - width) / 2,
            top     = ($(window).height() - height) / 2,
            message = encodeURIComponent("I just joined BIC's mission to celebrate handwriting! Click to learn more."),
            siteURL = encodeURIComponent('http://BICFightForYourWrite.com'),
            hashtag = encodeURIComponent('BICFightForYourWrite'),
            url     = 'http://www.twitter.com/share?text=' + message + '&url=' + siteURL + '&hashtags=' + hashtag,
            opts    = 'status=1' +
                ',width=' + width +
                ',height=' + height +
                ',top=' + top +
                ',left=' + left;

        window.open(url, 'twitter', opts);
        ga('send', 'event', 'Share', 'Pledge', 'Twitter');
        return false;
    });
    $('#em_share').on('click', function(e) {
        e.preventDefault();
        var subject          = encodeURIComponent('BIC Fight For Your Write');
        var body             = encodeURIComponent('I just joined BIC’s mission to celebrate handwriting! Click to learn more. http://www.bicfightforyourwrite.com');
        window.location.href = 'mailto:?subject=' + subject + '&body=' + body;
        ga('send', 'event', 'Share', 'Pledge', 'Email');
    });

    /* PROMO */
    $('#fb-share-promo').on('click', function(e) {
        e.preventDefault();
        FB.ui({
            method: 'feed',
            app_id: fb_app_id,
            name: 'BIC Fight For Your Write',
            link: base,
            picture: 'https://s3-us-west-2.amazonaws.com/emailshare/bic/Promo-Share.jpg',
            description: 'Check out BIC\'s "If I Were Principal for a Day" Promotion and you could win a $10,000 scholarship! Go to BICFightForYourWrite.com to learn more. No Purch Nec., U.S., 21+ Ends 8/15/16',
            actions: [{
                name: "Enter to Win!",
                link: base
            }]
        }, function(response) {
            if (response && response.post_id) {
                ga('send', 'event', 'Share', 'Contest', 'Facebook');
            }
        });
    });
    $('#tw-share-promo').on('click', function(e) {
        e.preventDefault();
        var width   = 575,
            height  = 400,
            left    = ($(window).width() - width) / 2,
            top     = ($(window).height() - height) / 2,
            message = encodeURIComponent("You could win a $10,000 scholarship from BIC! Go to www.BICFightForYourWrite.com to learn more. NPN, U.S. Only, 21+. Ends 8/15/16"),
            siteURL = encodeURIComponent('h'),
            url     = 'http://www.twitter.com/share?text=' + message + '&url=' + siteURL,
            opts    = 'status=1' +
                ',width=' + width +
                ',height=' + height +
                ',top=' + top +
                ',left=' + left;

        window.open(url, 'twitter', opts);
        ga('send', 'event', 'Share', 'Contest', 'Twitter');
        return false;
    });
    $('#em-share-promo').on('click', function(e) {
        e.preventDefault();
        var subject = encodeURIComponent('BIC Fight For Your Write');
        var body    = "";
        if (promo_status == 'sweeps_active') {
            body = encodeURIComponent('I just voted for BIC’s “If I were Principal for a Day” promotion! Vote now at https://www.BICFightForYourWrite.com to learn more and enter for a chance to win daily prizes. No Purch Nec., U.S. only, 21+ Ends 8/15/16. ');
        } else {
            body = encodeURIComponent('I just entered BIC’s “If I Were Principal for a Day” promotion! Check out https://www.BICFightForYourWrite.com to learn more and you could win a $10,000 scholarship! No Purch Nec., U.S. only, 21+ Ends 8/15/16. ');
        }
        window.location.href = 'mailto:?subject=' + subject + '&body=' + body;
        ga('send', 'event', 'Share', 'Contest', 'Email');
    });

    /* XTRAFUN */
    $('#meetXtraFun').on('click', function(e) {
        e.preventDefault();
        $('#xtrafun_popup:hidden').fadeIn();
    });
    $('#close_popup').on('click', function(e) {
        $('#xtrafun_popup:visible').fadeOut();
    });

    /* Signature Map */
    if (Modernizr.svg && fills && statesData) {
        var election = new Datamap({
            scope: 'usa',
            element: document.getElementById('map'),
            geographyConfig: {
                highlightBorderColor: '#ffb81d',
                popupTemplate: function(geography, data) {
                    return '<div class="hoverinfo">' + geography.properties.name + ' Total Pledges: <strong>' + data.pledges + '</strong></div>'
                },
                highlightBorderWidth: 0,
                highlightFillColor: '#f85403',
                borderWidth: 1,
                borderColor: '#ffffff'
            },
            fills: fills,
            data: statesData
        });
        election.labels();
    } else {
        $('#map').css({background: 'url("' + base + '/assets/img/signatures/map_fallback.png") no-repeat center center'});
    }

    /* PRESS */
    $('#pressLinks a').on('click', function() {
        ga('send', 'event', 'click', 'Press Link', $(this).find('span').html());
    });
    $('#pressPDF').on('click', function() {
        ga('send', 'event', 'click', 'Press PDF', $(this).find('span').html());
    });

    /* Contact Us */
    $('#contactForm').on('submit', function(e) {
        var name    = $('#name').val();
        var email   = $('#email').val();
        var subject = $('#subject option:selected').val();
        var message = $('#message').val();

        if (name == '' || email == '' || subject == '-1' || message == '') {
            e.preventDefault();
            $('#error_msg').html('You must fill in all fields above.');
        }
    });

    /* ADMIN */
    if ($('.admin').length > 0) {
        $('#admin-nav').find('.btn').on('click', function(e) {
            e.preventDefault();
            var section = $(this).data('section');
            if ($('#' + section).is(':hidden')) {
                $('.entry-group').hide();
                $('#' + section).show();
                $('#admin-nav').find('.btn').removeClass('active');
                $(this).addClass('active');
            }
        });

        $('.admin .enlargeImage').colorbox({
            transition: "fade",
            width: width * .7,
            opacity: '0.55'
        });

        $('.viewInfo').on('click', function(e) {
            e.preventDefault();
            var entryid = $(this).data('entryid');
            $.ajax({
                url: base + '/admin/get-entry',
                type: 'POST',
                dataType: 'html',
                data: {id: entryid},
                success: function(data, status, xhr) {
                    $('#entryInfo').html(data);
                    $('#entryInfoPopup').fadeIn();
                }
            });
        });
        $('body').on('click', '#close_info', function(e) {
            e.preventDefault();
            $('#entryInfoPopup').fadeOut(function() {
                $('#entryInfo').html('');
            });
        });

        $('.pending-submit').on('click', function(e) {
            e.preventDefault();
            var $this       = $(this);
            var entryId     = $this.data('entryid');
            var inputChoice = $this.parent().find('.accepted').val();
            $.ajax({
                url: base + '/admin/change-accepted',
                type: 'POST',
                dataType: 'html',
                data: {id: entryId, accepted: inputChoice},
                success: function(data, status, xhr) {
                    $this.parent().html(data);
                }
            });
        });

        $('.rotate').on('click', function(e) {
            e.preventDefault();
            var $this   = $(this);
            var entryId = $this.data('entryid');
            var dir     = $this.data('dir');
            var img     = $this.parent().find('img');
            $.ajax({
                url: base + '/admin/rotate/' + entryId + '/' + dir,
                dataType: 'json',
                success: function(data, status, xhr) {
                    if (data.results == true) {
                        d = new Date();
                        img.attr("src", img.attr('src') + "?" + d.getTime());
                    }
                }
            });
        });

        $('.judging-submit').on('click', function(e) {
            e.preventDefault();
            var $this        = $(this);
            var entryId      = $this.data('entryid');
            var originality  = $this.closest('tr').find('select[name="originality"] option').filter(":selected").val();
            var creativity   = $this.closest('tr').find('select[name="creativity"] option').filter(":selected").val();
            var presentation = $this.closest('tr').find('select[name="presentation"] option').filter(":selected").val();
            $.ajax({
                url: base + '/admin/judge',
                type: 'POST',
                dataType: 'json',
                data: {id: entryId, originality: originality, creativity: creativity, presentation: presentation},
                success: function(data, status, xhr) {
                    console.log(data);
                    if (data.results == true){
                        $this.closest('tr').find('.originality-box').html(originality);
                        $this.closest('tr').find('.creativity-box').html(creativity);
                        $this.closest('tr').find('.presentation-box').html(presentation);
                    } else {
                        alert('An error occurred. Please try again.');
                    }
                }
            });
        });
    }

});

function checkEmail(field, rules, i, options) {
    var result = true;
    if (field.val() == '') return true;
    $.ajax({
        url: base + 'registration/checkEmail/' + encodeURIComponent(field.val()),
        dataType: 'json',
        async: false,
        success: function(data, status, xhr) {
            if (!data.result) {
                result = '* The email you entered has already been used in this promotion.';
            } else {
                result = true;
            }

        }
    });
    return result;
}


function checkDOB21(field, rules, i, options) {

    var month = field.parents('form').find('#month');
    var day   = field.parents('form').find('#day');
    var year  = field.parents('form').find('#year');

    if (field.val() == '') {
        rules.push('required');
        return;
    }

    if (month.val() == '') {
        rules.push('required');
        return '* Month is a required field.'
    }
    if (day.val() == '') {
        rules.push('required');
        return '* Day is a required field.'
    }
    if (year.val() == '') {
        rules.push('required');
        return '* Year is a required field.'
    }

    var day_val   = day.val();
    var month_val = month.val();
    var year_val  = year.val();
    var age       = 21;
    var mydate    = new Date();
    mydate.setFullYear(year_val, month_val - 1, day_val);
    var currdate = new Date();
    currdate.setFullYear(currdate.getFullYear() - age);

    if ((currdate - mydate) < 0) {
        return 'You are not eligible, please see official rules.';
    }
    return true;
}

function checkDOB18(field, rules, i, options) {

    var month = field.parents('form').find('#month');
    var day   = field.parents('form').find('#day');
    var year  = field.parents('form').find('#year');

    if (field.val() == '') {
        rules.push('required');
        return;
    }

    if (month.val() == '') {
        rules.push('required');
        return '* Month is a required field.'
    }
    if (day.val() == '') {
        rules.push('required');
        return '* Day is a required field.'
    }
    if (year.val() == '') {
        rules.push('required');
        return '* Year is a required field.'
    }

    var day_val   = day.val();
    var month_val = month.val();
    var year_val  = year.val();
    var age       = 18;
    var mydate    = new Date();
    mydate.setFullYear(year_val, month_val - 1, day_val);
    var currdate = new Date();
    currdate.setFullYear(currdate.getFullYear() - age);

    if ((currdate - mydate) < 0) {
        return 'You are not eligible, please see official rules.';
    }
    return true;
}

function getAge(dateString) {
    var today     = new Date();
    var birthDate = new Date(dateString);
    var age       = today.getFullYear() - birthDate.getFullYear();
    var m         = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
}

function checkAge(month, day, year) {
    var birthday = month + "/" + day + "/" + year;

    if (month == 00 || day == 00 || year == 0000) {
        return false;
    } else {
        var userAge = getAge(birthday);
        if (userAge >= 21) {
            return true;
        } else {
            return false;
        }
    }
}

