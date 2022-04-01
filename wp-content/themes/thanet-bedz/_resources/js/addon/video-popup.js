// --------------------------------------------------------------------------------------------------
// Video Popup
// --------------------------------------------------------------------------------------------------
var videoBtns = document.querySelectorAll('.video-popup-trigger');
function videoOpen(el) {
    el.nextElementSibling.classList.add('active');
    el.nextElementSibling.nextElementSibling.classList.add('active');
    var src = el.nextElementSibling.querySelector('iframe').getAttribute('data-src');
    el.nextElementSibling.querySelector('iframe').setAttribute('src', src);
}
videoBtns.forEach(function (btn) {
	btn.addEventListener('click', function () {
        videoOpen(this);
    });
    btn.addEventListener('keyup', function (event) {
        if (event.keyCode === 13) {
            videoOpen(this);
        }
    });
});
function videoClose() {
    document.querySelectorAll('.video-popup').forEach( function(pop) {
        pop.classList.remove('active');
    });
    document.querySelectorAll('.modal-underlay').forEach( function(modal) {
        modal.classList.remove('active');
    });
    document.querySelectorAll('.video-popup iframe').forEach( function(iframe) {
        iframe.setAttribute('src', '');
    });
}
document.querySelectorAll('.modal-underlay').forEach( function(modal) {
    modal.addEventListener('click', function () {
        videoClose();
    }, false);

    modal.addEventListener('keyup', function (event) {
        if (event.keyCode === 13) {
            videoClose();
        }
    }, false);
});