$(document).ready(function() {

    $(".compressed-window-width").addClass('col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-8');
    $(".fool-window-width").addClass('col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12');

    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    });
    var styleimg = '';
    var styleText = '';
    var typeimg = '';
    var typeText = '';
    var square = '';
    $('.design-select').on('mousemove', function () {
        $(this).css('cursor', 'pointer');
    })
    $('.design-select').on('click', function () {

        if ($(this).children().eq(0).attr('name') === 'design') {
            styleimg = ($(this).children().eq(2).children().eq(0).attr('src'));
            styleText = ($(this).children().eq(3).text());
        }
        if ($(this).children().eq(0).attr('name') === 'type-design') {
            typeimg = ($(this).children().eq(2).children().eq(0).attr('src'));
            typeText = ($(this).children().eq(3).text());
        }
        $(this).children().eq(0).prop("checked", true);
        if ($(this).children().eq(0).prop("checked") === true) {
            $('.form-navigation .btn:eq(1)').prop("disabled", false);
        }
    });

    $("input[name='square']").on('input', function () {
        square = $(this).val();
        $('.form-navigation .btn:eq(1)').prop("disabled", false);
    })
    $('.number').on('click', function () {
        $('.form-navigation .btn:eq(1)').prop("disabled", false);
    })
    var validateName = 0;
    var validateEmail = 0;
    var validateTel = 0;

    $("input[name='nameUser']").on('input', function () {
        if ($(this).val().match(/[А-Яа-яЁё]/) !== null) {
            $(this).parent().css('color', 'white');
            validateName += 1;
            if (validateName > 0 && validateEmail > 0 && validateTel > 0) {
                $('.form-navigation .btn:eq(1)').prop("disabled", false);
            }
        } else {
            validateName = 0;
            $('.form-navigation .btn:eq(1)').prop("disabled", false);
            $(this).parent().css('color', 'red');
        }

    })
    $("input[name='emailUser']").on('input', function () {
        if ($(this).val().match(/\w+@\w+\.\w+/) !== null) {
            $(this).parent().css('color', 'white');
            validateEmail += 1;
            if (validateName > 0 && validateEmail > 0 && validateTel > 0) {
                $('.form-navigation .btn:eq(1)').prop("disabled", false);

            }
        } else {
            validateEmail = 0;
            $('.form-navigation .btn:eq(1)').prop("disabled", true);
            $(this).parent().css('color', 'red');
        }

    })
    $("input[name='telUser']").on('input', function () {
        if ($(this).val().match(/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/) !== null) {
            $(this).parent().css('color', 'white');
            validateTel += 1;
            if (validateName > 0 && validateEmail > 0 && validateTel > 0) {
                $('.form-navigation .btn:eq(1)').prop("disabled", false);

            }
        } else {
            validateTel = 0;
            $('.form-navigation .btn:eq(1)').prop("disabled", true);
            $(this).parent().css('color', 'red');
        }
    })
    $('.quest:not(.quest:eq(0)) div').hide();
    var sum = 0;

    $('.form-next').on('click', function (e) {
        e.preventDefault();
        sum += 20;
        $('.progress-bar').css('width', '' + sum + '%');
        square = $("input[name='square']").val();
        loop(sum);
    })
    $('.form-prev').on('click', function (e) {
        e.preventDefault();
        sum -= 20;
        $('.progress-bar').css('width', '' + sum + '%');
        $('.form-navigation .btn:eq(1)').prop("disabled", false);
        loop(sum);
    })

    function loop(sum) {
        switch (sum) {
            case 0:
                $('.quest:eq(0) div').show();
                $('.form-navigation .btn:eq(0)').prop("disabled", true);
                $('.quest:not(.quest:eq(0)) div').hide();
                break;
            case 20:
                $('.quest:eq(1) div').show();
                $('.quest:not(.quest:eq(1)) div').hide();
                $('.form-navigation .btn:eq(0)').prop("disabled", false);
                break;
            case 40:
                $('.quest:eq(2) div').show();
                $('.quest:not(.quest:eq(2)) div').hide();
                break;
            case 60:
                $('.quest:eq(3) div').show();
                $('.quest:not(.quest:eq(3)) div').hide();
                break;
            case 80:
                $('.quest:eq(4) div').show();
                $('.quest:not(.quest:eq(4)) div').hide();
                $('.form-navigation .btn:eq(1)').prop("disabled", false);
                $('#resStyle').attr('src', styleimg);
                $('#resStyleText').text(styleText);
                $('#resType').attr('src', typeimg);
                $('#resTypeText').text(typeText);
                $('#resSquare').html(square);
                $('#resFormContactName').html($("input[name='nameUser']").val());
                $('#resFormContactEmail').html($("input[name='emailUser']").val());
                $('#resFormContactTel').html($("input[name='telUser']").val());
                break;
            case 100:
                $('.quest:eq(5) div').show();
                $('.quest:not(.quest:eq(5)) div').hide();
                $('.form-navigation .btn:eq(1)').prop("disabled", true);
                break
        }
    }
})
