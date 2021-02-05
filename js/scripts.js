
/* Create Shadow Box */
function shadowBox(url) {
    var iframeID = document.getElementById("iframe-container");
    var bodySel = document.getElementById("bodyMain");
    var w = window.innerWidth;
    var newW = .8 * w;
    var newH = newW * .5625;
    iframeID.innerHTML = "<div class='iframe-wrapper' onclick='closeShadowBox()'><div class='iframe-content'><iframe src= "+ url +" frameborder='0' allow='autoplay; fullscreen; picture-in-picture' allowfullscreen></iframe><i class='fa fa-times' onclick='closeShadowBox()'></i></div></div>";
    bodySel.style.overflow = "hidden";
}

/* Close ShadowBox */
function closeShadowBox(){
    var iframeID = document.getElementById("iframe-container");
    iframeID.innerHTML = "";
    var bodySel = document.getElementById("bodyMain");
    bodySel.style.overflow = "unset";
}