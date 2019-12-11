/*
    - IA-MK - InteraApps Material Kit
*/

var iamk = {
    each: function(selection, func){
        [].forEach.call(document.querySelectorAll(selection), func);
    }
};

document.addEventListener("DOMContentLoaded", function(){

    iamk.each("[hewi]", function(element){
        element.style.width = element.getAttribute("hewi");
        element.style.height = element.getAttribute("hewi");
    });

});