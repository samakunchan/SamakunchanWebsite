$(document).ready(function() {
    var $container = $('div#sam_portfoliobundle_certification_technologies');
    var index = $container.find(':input').length;
    $('#add_technology').click(function(e) {
        addTechnology($container);
        e.preventDefault();
        return false;
    });
    if (index === 0) {
        addTechnology($container);
    } else {
        $container.children('div').each(function() {
            addDeleteLink($(this));
        });
    }
    function addTechnology($container) {
        var template = $container.attr('data-prototype')
            .replace(/__name__label__/g, 'Technologie n°' + (index+1))
            .replace(/__name__/g, index);
        var $prototype = $(template);
        addDeleteLink($prototype);
        $container.append($prototype);
        index++;
    }
    function addDeleteLink($prototype) {
        var $deleteLink = $('<a href="#" class="btn btn-danger">Supprimer</a>');
        $prototype.append($deleteLink);
        $deleteLink.click(function(e) {
            $prototype.remove();
            e.preventDefault();
            return false;
        });
    }
});