(function ($) {

    $(document).ready(function () {

        if($(window).width() <= 414) {
            $('.header-socials').insertAfter('.mobile-menu .menu');
        }



        var slide = $('.anim-bg'),
            slideArr = slide.map(function () {
                return this;
            }).get(),
            i = 0,
            active_slide = slideArr[i],
            slide_end = slideArr.length - 1;

        function nextSlide() {
            if (i < slide_end) {
                $(active_slide).removeClass('active');
                active_slide = slideArr[++i];
                $(active_slide).addClass('active');
            } else {
                $(active_slide).removeClass('active');
                i = 0;
                active_slide = slideArr[i];
                $(active_slide).addClass('active');
            }
        }

        setInterval(function () {
            nextSlide();
        }, 7000);

        $('.burger_button').on('click', function () {
            $('.menu_frame').toggleClass('opened');
        });

        $('form :submit').on('click', function () {
            $('input:required').each(function () {
                if (!$(this).val()) $(this).addClass('incomplete');
            });
        });

        $('.cb').on('click', function () {
            $('.popup_overlay, .popup').addClass('open');
        });

        $('.popup .close, .popup_overlay').on('click', function () {
            $('.popup_overlay, .popup').removeClass('open');
        });

        $("a[rel=gallery], a[rel=group]").fancybox({
            buttons : [
                'zoom',
                'close'
            ]
        });

        $('.close-btn-d').on('click', function () {
            $('.popup-overlay-d').fadeOut();
        });

        /****PROGRESS BAR****/
        function bar() {
            var bar = new ProgressBar.Circle(container, {
                color: '#fff',
                strokeWidth: 4,
                trailWidth: 0,
                easing: 'easeInOut',
                duration: 2000,
                from: {color: '#fff', width: 4},
                to: {color: '#fff', width: 4},
                step: function (state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    circle.path.setAttribute('stroke-width', state.width);

                    var value = Math.round(circle.value() * 100);
                    if (value === 0) {
                        circle.setText('');
                    } else {
                        circle.setText(value + '%');
                    }

                }
            });
            bar.text.style.fontFamily = '"GothamProBold"';
            bar.text.style.fontSize = '2rem';
            bar.animate(0.78); //%
        }

        var link = window.location.href;
        if (link.indexOf('/galereya.html') != -1) {
            bar();
        }

        $('.menu-plans-container .menu li').on('hover', function () {
            if (!($(this).hasClass('current-menu-item'))) {
                $(this).addClass('current-menu-item');
            } else {
                $(this).removeClass('current-menu-item');
            }
        });

        $('input:required').on('input', function () {
            $(this).removeClass('incomplete');
        });

        $('input.phone').mask("+38 (999) 999-9999", {
            completed: function () {
                $(this).removeClass('incomplete');
            }
        });

        $('input.name').on('input', function () {
            $(this).val($(this).val().replace(/[0-9\\/^$.|?*+\-_()]/g, ""));
        });

        $('form').on('submit', function (e) {

            e.preventDefault();

            $.ajax({
                type: "POST",
                url: '/wp-admin/admin-ajax.php',
                data: {
                    action: 'do_something',
                    name: $(this).find('.name').val(),
                    phone: $(this).find('.phone').val(),
                    subject: $(this).find('.subject').val()
                },
                beforeSend: function () {
                    $('form' + ' :submit').remove();
                },
                success: function () {
                    $('form').html('<p class="success-request">Дякую за заявку!<br>Наш менеджер зв`яжеться з Вами найближчим часом!</p>');
                }
            });
        });

        $('.download-form').on('submit', function (e) {

            e.preventDefault();

            $.ajax({
                type: "POST",
                url: '/wp-admin/admin-ajax.php',
                data: {
                    action: 'download',
                    name: $(this).find('.name').val(),
                    phone: $(this).find('.phone').val(),
                    email: $(this).find('.email').val()
                },
                beforeSend: function () {
                    $('.download-form').remove();
                    $('.popup-d').append('<p class="message-d">Начало скачивания</p>')
                },
                success: function () {
                    window.location = '/docs/' + $n;
                }
            });
        });

        $(function () {
            var $flatCat = $('.page-plans-list');
            $flatCat.on('click', '.page-plans-list .menu-item', function (e) {
                e.preventDefault();
                History.pushState(null, document.title, $(this).attr('href'));
                loadPage($(this).attr('href'));
            });

            function loadPage(url) {
                $flatCat.load(url + " .page-plans-list > *");
            }
        });

    });
    let pageURL = $(location). attr("href");
    let uaBtn = $(".qtranxs-lang-menu-item:first-child a");
    let ruBtn = $(".qtranxs-lang-menu-item:last-child a");
    if(pageURL.indexOf("/ru/")>0) {
        uaBtn.removeClass("actv");
        ruBtn.addClass("actv");
    } else {
        ruBtn.removeClass("actv");
        uaBtn.addClass("actv");
    }
    $(window).load(function () {

        $('#preloader').remove();

    });
    if(pageURL==="https://vernisazh.com.ua/category/novyny/"||pageURL==="https://vernisazh.com.ua/ru/category/news/") {
        $("#menu-news-nav li:first-child").addClass("current-menu-item");
    }

    var squareRange;
    var squareVal = $('#squareVal').val();
    var instalVal = $("#instVal").val();
    var instalPer;
    var frstIns;
    var section;
    var rassroch;
    var month;
    var month0per;
    var month3per;
    var month5per;
    var curmonth;
    var minval;
    var maxval;

    $(".section-amount input").click(function (){
       section = $(this).val();
    });

    $(".credit-amount input").click(function (){
        curmonth = $(this).val();
    });

    $("#squareMeasure").on('input', function() {
        squareRange = $(this).val();
        minval = (squareVal * section * 30) / 100;
        maxval = (squareVal * section * 95) / 100;
        $("#squareVal").val(squareRange);
        $("#minval").html(minval.toFixed(0) + ' грн');
        $("#maxval").html(maxval.toFixed(0) + ' грн');
        $("#frstIns").attr("min", minval.toFixed(0));
        $("#frstIns").attr("max" ,maxval.toFixed(0));
    });

    $("#squareVal").on('input', function() {
        squareVal = $(this).val();
        minval = (squareVal * section * 30) / 100;
        maxval = (squareVal * section * 75) / 100;
        $("#squareMeasure").val(squareVal);
        $("#minval").html(minval.toFixed(0) + ' грн');
        $("#maxval").html(maxval.toFixed(0) + ' грн')
    });

    // $("#instVal").on('input', function() {
    //     instalVal = $(this).val();
    //     $("#frstIns").val(instalVal);
    // });

    $("#instVal").on('input', function() {
        // $(this).val($(this).val().replace (/\D/, ''));
        instalVal = $(this).val();
        $("#frstIns").val(instalVal);
        if ((instalVal != '') && (squareVal != '' || squareVal != 0) && (section != undefined) && (curmonth != undefined)) {
            var res = instalVal / (squareVal * section) * 100;
            rassroch = (squareVal * section) - instalVal;
            month = rassroch / curmonth;
            month3per = (rassroch - (rassroch * 3 / 100)) / curmonth;
            month5per = (rassroch - (rassroch * 5 / 100)) / curmonth;
            $("#pers").val(res.toFixed(2));

            $(".payformouth").html(month.toFixed(0) + " грн/мес");
            $(".rostr-sum").html(rassroch + " грн");
            $(".priseofmtr").html(section + " грн");
            $(".finst").html(instalVal + " грн");

            $("#dis0").html(month.toFixed(0));
            $("#dis1").html(month3per.toFixed(0));
            $("#dis2").html(month5per.toFixed(0));

        } else {
            alert ("Проверьте корректность данных");
        }
    });

    $("#frstIns").on('input', function() {
        var instRange = $(this).val();
        // var arrNumb = instRange.split('');
        // var zeroCount = 0;
        // var str;
        $("#instVal").val(instRange);
        if ((squareVal != '' || squareVal != 0) && (section != undefined) && (curmonth != undefined)) {
            var res = instRange / (squareVal * section) * 100;

            $("#pers").val(res.toFixed(2));
            $(".payformouth").html(month.toFixed(2) + " грн/мес");
            $(".rostr-sum").html(rassroch + " грн");
            $(".priseofmtr").html(section + " грн");
            $(".finst").html(instalVal + " грн");

            $("#dis0").html(month.toFixed(0));
            $("#dis1").html(month3per.toFixed(0));
            $("#dis2").html(month5per.toFixed(0));

        } else {
            alert ("Проверьте корректность данных");
        }
    });

    $('.throwdown').click(function() {
       $('.cal-form').find('input[type=text]').val('');
       $('.payformouth, .rostr-sum, .priseofmtr, .finst').html('0' + ' грн');
       $('#dis0, #dis1, #dis2').html('0');
       $('input[type=radio]').prop( "checked", false );
       $('input[type=range]').val('');
    });

    $('input#fname').on('input', function () {
        $(this).val($(this).val().replace(/[0-9\\/^$.|?*+\-_()]/g, ""));
    });



})(jQuery);
