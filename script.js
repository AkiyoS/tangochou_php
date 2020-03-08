$(function () {

    var t = localStorage.getItem('times');
    console.log(t);

    if (t == 1) {
        $('.bottom > p').html('<img src="./img/it.png" alt="" width="180px">');
    } else if (t == 111) {
        $('.bottom > p').html('<img src="./img/zen.png" alt="" width="180px">');
    } else if (t == 111111) {
        $('.bottom > p').html('<img src="./img/bb.png" alt="" width="180px">');
    } else if (t == 111111111) {
        $('.bottom > p').html('<img src="./img/Taj.png" alt="" width="180px">');
    } else {
        $('.bottom > p').css('display', 'none');
    }

    $('.turn').on('click', function () {
        $('.over').show();
        $('.turn').hide();
    });

    $('.next').on('click', function () {
        // var t = localStorage.getItem('times');

        if (t >= 1) {
            $times = t + 1;
            localStorage.setItem('times', $times);
        } else {
            $times = 1;
            localStorage.setItem('times', $times);
        }

        location.reload();
    });

    $('.reverse').on('click', function () {
        location.replace('reverse.php');
    });

    $('.normal').on('click', function () {
        location.replace('index.php');
    });

    $('#menuIcon').on('click', function () {
        $('.menuOpen').show(500);
        $('.menu > button').toggleClass('tg')
    })

    $('#closeIcon').on('click', function () {
        $('.menuOpen').hide(500);
        $('.menu > button').toggleClass('tg');
    })

    $('.dots > p').on('click', function () {
        $(this).toggleClass('offDot')
            .toggleClass('onDot');
    })

    $('.dlt').on('click', function () {
        var checked = confirm("削除したカードは復元できません");
        if (checked == true) {
            return true;
        } else {
            return false;
        }
    })

});