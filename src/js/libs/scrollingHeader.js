function scrollingHeader() {
    const $header = jQuery('.header');
    const addClass = 'header--scroll';
    const scrollHeight = 70;

    if (jQuery(this).scrollTop() > scrollHeight) {
        $header.addClass(addClass);
    }
    else {
        $header.removeClass(addClass);
    }

    if (window.pageYOffset > scrollHeight) {
        $header.addClass(addClass);
    }
    else {
        $header.removeClass(addClass);
    }
}

module.exports = scrollingHeader;