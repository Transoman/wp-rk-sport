function modelsSlider(params) {
    
    let counter = 0;
    let counterTwo = 0;
    const slideItem = $('.models__slider .models-slider__slider');
    const slideNav = $('.models__slider .models-slider__nav');
    const parent = $('.models__item');
    const modelsImg = $('.models__img img');
    const modelsLink = $('.models__img a');
    const modelsSlickElem = $('.models-slider__elem');
    const modelsSlickElemLI = $('.models-slider__elem li');

    for (let i = 0; i < slideItem.length; i++) {
        counter++;
        let slideItemID = slideItem[i].id = `models-slider__slider--${counter}`;
        let slideItemElem = $(`#${slideItemID}`);
        let slideNavID = slideNav[i].id = `models-slider__nav--${counter}`;
        let slideNavElem = $(`#${slideNavID}`);

        slideItemElem.slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            focusOnSelect: true,
            vertical: true,
            infinite: false,
            focusOnSelect: true,
            asNavFor: slideNavElem
        });
        slideNavElem.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: false,
            arrows: false,
            dots: false,
            swipe: false,
            asNavFor: slideItemElem
        });
 
        function addActiveClass(params) {
            if($(this).hasClass('active') !== true) {
                $(this).closest(modelsSlickElem).find(modelsSlickElemLI).removeClass('active');
                $(this).addClass('active');
                let attr = $(this).attr('data-colorUrl');
                let findImg = $(this).closest(parent).find(modelsImg);
                let findLink = $(this).closest(parent).find(modelsLink);
                findImg.attr('src', attr);    
                findLink.attr('href', attr);    
            }
        }


        modelsSlickElemLI.click(addActiveClass);
        let current = $('.slick-current');
        let firstItemFind = slideNavElem.find(current).find(modelsSlickElemLI).first();
        let firstItemFindAttr = firstItemFind.attr('data-colorUrl');
        let thisModelImg = slideItemElem.closest(parent).find(modelsImg);
        let thisModelLink = slideItemElem.closest(parent).find(modelsLink);
        thisModelImg.attr('src', firstItemFindAttr);
        thisModelLink.attr('href', firstItemFindAttr);
        
        slideItemElem.click(function () {
            let attr = $(this).closest(parent).find(slideNavElem).find($('.slick-track')).children('.slick-current').find('li.active').attr('data-colorUrl');
            thisModelImg.attr('src', attr);
            thisModelLink.attr('href', attr);
        });
    }

    for (let j = 0; j < modelsSlickElem.length; j++) {
        let findFirstItemList = modelsSlickElem.closest(modelsSlickElem[j]).find(modelsSlickElemLI).first();
        findFirstItemList.addClass('active');
    }

    modelsLink.each(function (i) {
        counterTwo++;
        modelsLink[i].setAttribute('data-fancybox', `view-${counterTwo}`);
    });



}

module.exports = modelsSlider;