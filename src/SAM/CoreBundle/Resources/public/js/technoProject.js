$(document).ready(function() {
    var $containerImg = $('div#sam_portfoliobundle_project_image');
    var indexImg = $containerImg.find(':input').length;
    $('#add_image').click(function(e) {
        addImage($containerImg);
        e.preventDefault();
        return false;
    });
    if (indexImg === 0) {
        addImage($containerImg);
    } else {
        $containerImg.children('div').each(function() {
            addDeleteLink($(this));
        });
    }
    function addImage($containerImg) {
        var template = $containerImg.attr('data-prototype')
            .replace(/__name__label__/g, 'Image n°' + (indexImg + 1))
            .replace(/__name__/g, indexImg);

        var $prototype = $(template);
        addDeleteLink($prototype);
        $containerImg.append($prototype);
        indexImg++;
    }
    var $container = $('div#sam_portfoliobundle_project_technologies');
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
console.log("salut");