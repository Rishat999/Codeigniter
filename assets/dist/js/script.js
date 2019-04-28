$(function() {
    var url = window.location.pathname;
    var host = window.location.hostname;
    var filename = window.location.href;
    $('.sidebar-menu li a[href="'+filename+'"]').parent('li').addClass('active');
});

