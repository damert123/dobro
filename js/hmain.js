// фиксация шапки при прокрутке

window.onscroll = function showHeader() {
    var header = document.querySelector('.header');
    if (window.pageYOffset > 144) {
        header.classList.add('fixid');
        document.querySelector('.logoimg').style.height = '60px';
        document.querySelector('body').style.paddingTop = '144px';
        document.querySelector('.aaa').style.justifyContent = 'space-around';
        document.querySelector('.logoText').style.display = 'none';
    } else {
        header.classList.remove('fixid');
        document.querySelector('.logoimg').style.height = '140px';
        document.querySelector('body').style.paddingTop = '0px';
        document.querySelector('.aaa').style.justifyContent = 'space-between';
        document.querySelector('.logoText').style.display = 'block';
    }
}

// бургерменю
function burgerMenu(icon) {
    icon.classList.toggle("change");
    var nav = document.querySelector('.nav');
    nav.classList.toggle('showNav');
    document.querySelector('body').classList.toggle("overflow");
}