$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
        placement : 'right',
        html : true,
        delay : { show: 300, hide: 100 },
        viewport: {
            selector: 'popover',
            width: 100
        }
    });
});