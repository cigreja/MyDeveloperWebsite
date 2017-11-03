
function hideFooter(value){
    var footer = document.getElementsByTagName("footer")[0];
    footer.style.visibility = value;
    console.log(footer);
}

window.onload = function () {
    <!-- Social Icon Behavior -->
    var footerSocialIcons = document.getElementsByClassName("footer-social-icon-image");
    for (var i = 0; i < footerSocialIcons.length; i++) {

        var icon = footerSocialIcons[i];
        icon.onmouseover = function (event) {event.target.style.marginTop = '-50px';};
        icon.onmouseout = function (event) {event.target.style.marginTop = '0px';};
    };
};
