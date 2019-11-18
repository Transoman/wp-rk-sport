function burgerMenu() {
    const $burgerBtn = jQuery('.header__burger-btn');
    const $burgerBtnAddClass = 'header__burger-btn--active';
    const $burgerHeader = jQuery('.header');
    const $addBurgerHeaderClass = 'header--active';
    const $burgerNavWrapper = jQuery('.header__nav');
    const $addBurgerNavClass = 'header__nav--active';
    const $burgerLinks = jQuery('.header__nav a');

    function addBurgerClass(e) {
        e.preventDefault();
        $burgerBtn.toggleClass($burgerBtnAddClass);
        $burgerNavWrapper.toggleClass($addBurgerNavClass);
        $burgerHeader.toggleClass($addBurgerHeaderClass);
    }

    function closeBurger() {
        $burgerBtn.removeClass($burgerBtnAddClass);
        $burgerNavWrapper.removeClass($addBurgerNavClass);
        $burgerHeader.removeClass($addBurgerHeaderClass);
    }

    jQuery(window).resize(function () {
        if (window.innerWidth > 1199) {
        closeBurger();
        }
    });

    $burgerBtn.click(addBurgerClass);
    $burgerLinks.click(closeBurger);

    jQuery(document).mouseup(function(e) {
        if (!$burgerHeader.is(e.target) && $burgerHeader.has(e.target).length === 0) {
        closeBurger();
        }
    });
    
}

module.exports = burgerMenu;
