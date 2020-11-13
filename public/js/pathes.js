

/**
 * Simple (ugly) code to handle the comment vote up/down
 */
var $container = $('.img-overlay-wrap');

function makeSVG(tag , attrs) {
    var el = document.createElementNS('http://www.w3.org/2000/svg', tag);
    for (var k in attrs)
        el.setAttribute(k, attrs[k]);
    return el;
}

function addTheRightPathes(callback) {
    var $currentContainer = $('.img-overlay-wrap');

    $currentContainer.find('svg').remove();
    $currentContainer.append('<svg viewBox="0 0 3600 2160" id="svg" xmlns="http://www.w3.org/2000/svg"> </svg>');
    var $currentSVG = $('#svg');

    // iterate over all stuff in th whole house , it is stored in js array , and choose the ones holdings the image name , and add them as pathes!
    for(var k in allStuff) {
        if(allStuff[k]["image"] == currentPosition) {
            var tempPath;
            if(!allStuff[k]["icon"])
                tempPath = makeSVG('path', {d: allStuff[k]["coordinates"], id: "path"+allStuff[k]["id"] , style:"stroke: black; opacity: 0.0;", onmouseover: "show(\'path"+allStuff[k]["id"]+"\');", onmouseleave: "hide(\'path"+allStuff[k]["id"]+"\');" , "data-moveable" : allStuff[k]["moveable"] } );
            else
                tempPath = makeSVG('path', {d: allStuff[k]["coordinates"], id: "path"+allStuff[k]["id"] , style:"stroke: black; opacity: 0.0;", onmouseover: "showIcon(\'path"+allStuff[k]["id"]+"\' ,\'"+allStuff[k]["icon"]+"\');", onmouseleave: "hideIcon(\'path"+allStuff[k]["id"]+"\' ,\'"+allStuff[k]["icon"]+"\');" , "data-moveable" : allStuff[k]["moveable"] } );
            $currentSVG.append( tempPath );
        }
    }
    callback(); // to work in sequense with other functions

    // find every path and inject this event into!
    $currentSVG.find('path').on('click', function(e) { // e is the event happening
        e.preventDefault(); // no thing very important
        var $link = $(e.currentTarget); // getting the element that was clicked
        if($link.data('moveable') == null)return ;

        currentPosition = $link.data('moveable');
        $('#img').attr("src" , "img/" + $link.data('moveable') + ".jpg");

        updateWrap(
            function(){
                addTheRightPathes(
                    addRightDialog
                );
            }
        );
    });
}
