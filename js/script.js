var text = '\
    <div class="console-int"><a class="navbar-brand " href="#"></a>\n\
        <h1 class="keyword">$ Mickael Leriche</h1>\n\
        <h3>Function(){ Développeur }</h3>\n\
    </div>\n\
';

var currentChar = 1;
var htmltag = false;
var cache = '';


function type() {


    // effet machine à érire sur la présentation           
    var str = text.substr(0, currentChar);

    var last = str.substr(str.length - 1, str.length);
    if (last != '<' && last != '>' & last != '/') {
        $("#consoleText2").html(str);
    }
    currentChar++;
    if (currentChar <= text.length) {
        if (last == '<') {
            htmltag = true;
        } else if (last == '>') {
            htmltag = false;
        }
        if (htmltag) {
            setTimeout(type, 1);
        } else {
            setTimeout(type, 50);
        }
    }
}

$(function () {
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        var target = this.hash,
                $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });

    /* Initialisation des blocs caché */
    $('.experience-content').hide();
    $(".bounce-animate").hide();
    $(".bounce-animate-item").hide();
    $("#list-plat").hide();
    $("#list-fram").hide();
    $("#list-cms").hide();
    $("#list-logiciel").hide();

    $("#dev").click(function () {
        $("#list-plat").hide();
        $("#list-fram").hide();
        $("#list-cms").hide();
        $("#list-logiciel").hide();
        $("#list-dev").show(800);
    });
    $("#plateformes").click(function () {
        $("#list-dev").hide();
        $("#list-fram").hide();
        $("#list-cms").hide();
        $("#list-logiciel").hide();
        $("#list-plat").show(800);
    });
    $("#framework").click(function () {
        $("#list-dev").hide();
        $("#list-plat").hide();
        $("#list-cms").hide();
        $("#list-fram").show(800);
    });
    $("#cms").click(function () {
        $("#list-dev").hide();
        $("#list-plat").hide();
        $("#list-fram").hide();
        $("#list-logiciel").hide();
        $("#list-cms").show(800);
    });
    $("#logiciel").click(function () {
        $("#list-dev").hide();
        $("#list-plat").hide();
        $("#list-fram").hide();
        $("#list-cms").hide();
        $("#list-logiciel").show(800);
    });
    $("#consoleText2").html("");
    setTimeout(type, 50);

    /* Action au scroll*/
    $(window).scroll(function () {
        var scrollt = $(this).scrollTop();
        console.log(scrollt);
        if (scrollt > 100) {
            $('.navbar-expand-lg').removeClass('nav-off').addClass('nav-active');
        } else {
            $('.navbar-expand-lg').removeClass('nav-active').addClass('nav-off');
        }
        if (scrollt > 1100) {
            $(".experience-content").show("explode", {pieces: 4}, 500);
        } else {
            $(".experience-content").hide("slow");
        }
        if (scrollt > 2200) {
            $(".bounce-animate").show("bounce", {times: 3}, 1000);
            $(".bounce-animate-item").show(800);
        } else {
            $(".bounce-animate").hide("slow");
            $(".bounce-animate-item").hide("slow");
        }
    });

    /* barre progression page competences */
    $('.bar-percentage[data-percentage]').each(function () {
        var progress = $(this);
        var percentage = Math.ceil($(this).attr('data-percentage'));
        $({countNum: 0}).animate({countNum: percentage}, {
            duration: 2000,
            easing: 'linear',
            step: function () {
                // What todo on every count
                var pct = '';
                if (percentage == 0) {
                    pct = Math.floor(this.countNum) + '%';
                } else {
                    pct = Math.floor(this.countNum + 1) + '%';
                }
                progress.text(pct) && progress.siblings().children().css('width', pct);
            }
        });
    });

});


