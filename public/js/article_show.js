$(document).ready(function() {
    alert('ready');
    $('.js-like-article').on('click', function(e) {
        e.preventDefault();

        var $link = $(e.currentTarget);
        $('.js-like-article').html('test');
    })
});