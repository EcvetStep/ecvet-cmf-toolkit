$(window).load(function() {
    var act = '';

    $('#content > ul > li').css({
        position: 'absolute',
        display: 'none'
    });
    $('#content > ul > li').find('.box1').css({
        height: '0'
    })

    $('#menu > li > a span').css({
        opacity: '0'
    })

    $('#menu > li > a').hover(function() {
        $(this).find(' > span').stop().animate({
            opacity: '1'
        }, 600);
    }, function() {
        if (!$(this).hasClass('active')) {
            $(this).find(' > span').stop().animate({
                opacity: '0'
            }, 600);
        }
    })

    $('#menu > li').each(function(num) {
        $(this).data({
            num: num
        })
    })
    $('#content > ul > li').each(function(num) {
        $(this).data({
            num: num
        })
    })

    if (location.hash.slice(0, 3) == '#!/') {
        page = location.hash.slice(3);
        if (page == '') page = 'overview';
        open_page('#' + page);
        fl = false;
    } else {
        page = 'overview';
        open_page('#' + page);
        fl = false;
    }
    if ((location.hash == '#') || (location.hash == '')) {
        open_page('');
        fl = true;
        $('#content').stop().animate({
            height: '668'
        })
    }
    $('a').click(function() {
        if ($(this).attr('href').slice(0, 3) == '#!/') {
            page = $(this).attr('href').slice(3);
            open_page('#' + page);
            return false;
        }
        if ($(this).attr('data-type') == 'close') {
            close_page()
        }
    })

    function open_page(page) {
        location.hash = '#!/' + page.slice(1);
        $('#menu a').removeClass('active').find(' > span').stop().animate({
            opacity: '0'
        }, 600);
        num = $(page).data('num');
        $('#menu > li').each(function() {
            if ($(this).data('num') == num) {
                $(this).find('> a').addClass('active').find('> span').stop().animate({
                    opacity: '1'
                }, 600);
            }
        })
        fl = false;
        $('#content').stop().animate({
            height: '868'
        })
        act2 = '#' + page.slice(1);
        // check if we're already in the page that's requested
        if (act == act2) return;
        // otherwise close the previous active page
        if (act != '') {
            $(act).find('.box1').stop().animate({
                height: '0'
            }, 700, 'easeOutCirc', function() {
                $(act).css({
                    display: 'none'
                });
                $(page).css({
                    display: 'block'
                }).find('.box1').stop().animate({
                    height: '100%'
                }, 700, 'easeOutCirc', function() {
                    act = page;
                });
            })
        } else {
            $(page).css({
                display: 'block'
            }).find('.box1').stop().animate({
                height: '100%'
            }, 700, 'easeOutCirc', function() {
                act = page;
            });
        }
    }

    function close_page(page) {
        $('#menu a').removeClass('active').find(' > span').stop().animate({
            opacity: '0'
        }, 600);
        location.hash = '#';
        $(act).find('.box1').stop().animate({
            height: '0'
        }, 700, 'easeOutCirc', function() {
            $(act).css({
                display: 'none'
            });
            act = '';
            fl = true;
            $('#content').stop().animate({
                height: '668'
            })
        });
        return false;
    }
})
