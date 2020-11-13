function addNDialog(n , dialogId , pathId){
    if(n >= 1) {
        $(function(){
            $(dialogId[0]).dialog({
                autoOpen: false,
                show: {
                    effect: "blind",
                    duration: 500
                },
                hide: {
                    effect: "explode",
                    duration: 500
                }
            });
    
            $(pathId[0]).on("click" , function() {
                $(dialogId[0]).dialog( "open" );
            });
        });
    }
    if(n >= 2) {
        $(function(){
            $(dialogId[1]).dialog({
                autoOpen: false,
                show: {
                    effect: "blind",
                    duration: 500
                },
                hide: {
                    effect: "explode",
                    duration: 500
                }
            });
    
            $(pathId[1]).on("click" , function() {
                $(dialogId[1]).dialog( "open" );
            });
        });
    }
    if(n >= 3){
        $(function(){
            $(dialogId[2]).dialog({
                autoOpen: false,
                show: {
                    effect: "blind",
                    duration: 500
                },
                hide: {
                    effect: "explode",
                    duration: 500
                }
            });
    
            $(pathId[2]).on("click" , function() {
                $(dialogId[2]).dialog( "open" );
            });
        });
    }
    if(n >= 4){
        $(function(){
            $(dialogId[3]).dialog({
                autoOpen: false,
                show: {
                    effect: "blind",
                    duration: 500
                },
                hide: {
                    effect: "explode",
                    duration: 500
                }
            });
    
            $(pathId[3]).on("click" , function() {
                $(dialogId[3]).dialog( "open" );
            });
        });
    }
    if(n >= 5){
        $(function(){
            $(dialogId[4]).dialog({
                autoOpen: false,
                show: {
                    effect: "blind",
                    duration: 500
                },
                hide: {
                    effect: "explode",
                    duration: 500
                }
            });
    
            $(pathId[4]).on("click" , function() {
                $(dialogId[4]).dialog( "open" );
            });
        });
    }
    if(n >= 6){
        $(function(){
            $(dialogId[5]).dialog({
                autoOpen: false,
                show: {
                    effect: "blind",
                    duration: 500
                },
                hide: {
                    effect: "explode",
                    duration: 500
                }
            });
    
            $(pathId[5]).on("click" , function() {
                $(dialogId[5]).dialog( "open" );
            });
        });
    }
 }


 // here is the functionality of this file
function addRightDialog(){

    var $sec = $('section#secion_dialogs');
    $sec.find('div').remove();

    for(var k in allStuffDialog){
        if(allStuffDialog[k]["image"] == currentPosition){
            $sec.append('<div id=\"dialog'+allStuffDialog[k]["id"]+'\" title=\"'+allStuffDialog[k]["name"]+'\"> <p>' + allStuffDialog[k]["content"] + '</p> </div>');
        }
    }

    var dialogId = [];
    var pathId = [];
    for(var k in allStuffDialog){
        if(allStuffDialog[k]["image"] == currentPosition) {
            dialogId.push("#dialog"+allStuffDialog[k]["id"]);
            pathId.push("#path"+allStuffDialog[k]["id"]);
        }
    }

    // neccesarry to put each one in individual block as folow , and it should be printed not only 
    // excuted as a statments , we need to print directly the below blocks
    // in database and doctrine we print here directly , but with jquery we are not!
    addNDialog(dialogId.length , dialogId , pathId);
}


