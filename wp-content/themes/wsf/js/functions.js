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
    var room;
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

    function accesstosection(roominp) {
        if (roominp != undefined) {
            return true;
        } else {
            return false;
        }
    }

    function aceestosquare(roominp, sectinp) {
        if (roominp != undefined && sectinp != undefined) {
            return true;
        } else {
            return false;
        }
    }

    function aceestorass(roominp, sectinp, squareinp) {
        if (roominp != undefined && sectinp != undefined && squareinp != undefined) {
            return true;
        } else {
            return false;
        }
    }

    function aceestoinstall(roominp, sectinp, squareinp, rassr) {
        if (roominp != undefined && sectinp != undefined && squareinp != undefined && rassr != undefined) {
            return true;
        } else {
            return false;
        }
    }

    function acees(roominp, sectinp, squareinp, rassr, instal) {
        if (roominp != undefined && sectinp != undefined && squareinp != undefined && rassr != undefined && instal != undefined) {
            return true;
        } else {
            return false;
        }
    }


    $(".section-amount input").click(function (){
        if (accesstosection(room)) {
            section = $(this).val();
        } else {
            alert("Выберите количество комнат");
            $('.section-amount').find('input[type=radio]').prop( "checked", false );
        }
    });

    $(".room-amount input").click(function (){
        room = $(this).val();
    });

    $(".credit-amount input").click(function (){
        if(aceestorass(room, section, squareVal)) {
            curmonth = $(this).val();
        } else {
            alert("Выберите удобный период рассрочки")
            $('.credit-amount').find('input[type=radio]').prop( "checked", false );
        }
    });


    $("#squareMeasure").on('input', function() {
        if (aceestosquare(room, section)) {
            squareVal = $(this).val();
            minval = (squareVal * section * 30) / 100;
            maxval = (squareVal * section * 95) / 100;
            $("#squareVal").val(squareVal);
            changeMinMax(minval, maxval);
        } else {
            alert("Выберите количество комнат и секцию");
            $(this).val('');
        }

    });

    $("#squareVal").on('input', function() {
        if (aceestosquare(room, section)) {
            squareVal = $(this).val();
            minval = (squareVal * section * 30) / 100;
            maxval = (squareVal * section * 95) / 100;
            // if (measureSquare($(this).val(), 14, 22)) {
            //     alert("Не корректно введена площадь");
            //     $(this).val('');
            // } else {
                $("#squareMeasure").val(squareVal);
                changeMinMax(minval, maxval);
            // }
        } else {
            alert("Выберите количество комнат и секцию");
            $(this).val('');
        }
    });



    $("#instVal").on('input', function() {
        if (aceestoinstall(room, section, squareVal, curmonth)) {
            instalVal = $(this).val();
            $("#frstIns").val(instalVal);
            var res = instalVal / (squareVal * section) * 100;
            rassroch = (squareVal * section) - instalVal;
            month = rassroch / curmonth;
            month3per = (rassroch - (rassroch * 3 / 100)) / curmonth;
            month5per = (rassroch - (rassroch * 5 / 100)) / curmonth;
            $("#pers").val(res.toFixed(2));

            cnageResult(month, rassroch, section, instalVal, month3per, month5per);
        } else {
            alert("Выберите кол. комнат, секцию, метраж, период рассрочки");
            $(this).val('');
        }

    });

    $("#frstIns").on('input', function() {
        if (aceestoinstall(room, section, squareVal, curmonth)) {
            var instRange = $(this).val();
            $("#instVal").val(instRange);
            var res = instRange / (squareVal * section) * 100;
            rassroch = (squareVal * section) - instRange;
            month = rassroch / curmonth;
            month3per = (rassroch - (rassroch * 3 / 100)) / curmonth;
            month5per = (rassroch - (rassroch * 5 / 100)) / curmonth;
            $("#pers").val(res.toFixed(2));
            cnageResult(month, rassroch, section, instRange, month3per, month5per);
        } else {
            alert("Выберите кол. комнат, секцию, метраж, период рассрочки");
            $(this).val('');
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

    function changeMinMax(first, second) {
        $("#minval").html(first.toFixed(0) + ' грн');
        $("#maxval").html(second.toFixed(0) + ' грн');
        $("#frstIns").attr("min", first.toFixed(0));
        $("#frstIns").attr("max", second.toFixed(0));
    }

    function cnageResult(month, rassr, sect, intall, month3, month5) {
        $(".payformouth").html(month.toFixed() + " грн/мес");
        $(".rostr-sum").html(rassr + " грн");
        $(".priseofmtr").html(sect + " грн");
        $(".finst").html(intall + " грн");

        $("#dis0").html(month.toFixed());
        $("#dis1").html(month3.toFixed());
        $("#dis2").html(month5.toFixed());

    }

    function measureSquare(value, minval, maxval) {
        if ((parseFloat(value) < minval) || (value > maxval)) {
            return false;
        } else {
            return true;
        }
    }


})(jQuery);
