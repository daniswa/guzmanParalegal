





$('language').ready(function(){
    languageSelect();
});
function languageSelect(){
    var element = document.getElementById('language');
    var setWidth = 1.0;
    var start = setInterval(moveOut,50);
    function moveOut(){
        setWidth += 0.5;
        element.style.width = setWidth + '%';
        if(setWidth == 13.0){
            clearInterval(start);
        }
    }
}