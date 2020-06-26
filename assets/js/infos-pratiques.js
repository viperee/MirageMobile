const btn = {
    BTN_HEBERGEMENT: "btn-hebergement",
    BTN_SUR_PLACE: "btn-sur-place",
    BTN_TRAJET: "btn-trajet",
}
$().ready(() => {
    $("#tabs-hebergement").hide();
    $("#tabs-sur-place").hide();
    $(".btn").hover(hoverIn, hoverOut);
    $(".content-accordeon").hide();
    $(".titre-accordeon-icon").click(function(){
        let isOpen = $(this).attr('src').includes("arrow-down");
        if(isOpen){
            $(this).attr('src', 'assets/icons/arrow-up.svg');
        }
        else{
            $(this).attr('src', 'assets/icons/arrow-down.svg');
        }
        $(this).parents(".row").siblings(".content-accordeon").slideToggle("slow");
    });
    $("#btn-trajet").click(function () {
        changeActiveButton($(this), btn.BTN_TRAJET);
        showTabTrajet();
    });
    $("#btn-sur-place").click(function () {
        changeActiveButton($(this), btn.BTN_SUR_PLACE);
        showTabSurPlace();
    });
    $("#btn-hebergement").click(function () {
        changeActiveButton($(this), btn.BTN_HEBERGEMENT);
        showTabHebergement();
    });
});


function changeActiveButton(activeBtn, btnName) {
    if (!activeBtn.hasClass('btn-active')) {
        let btnActive = $(".btn-active");
        btnActive.removeClass("btn-active").addClass("btn");
        let imgSrc = btnActive.find('img').attr('src');
        imgSrc = imgSrc.replace(".svg", "-black.svg");
        btnActive.find('img').attr('src', imgSrc);
        btnActive.hover(hoverIn, hoverOut);

        activeBtn.off("mouseenter mouseleave").removeClass("btn").addClass("btn-active");
    }
}

function showTabTrajet() {
    $("#tabs-hebergement").hide();
    $("#tabs-sur-place").hide();
    $("#tabs-trajet").show();
}
function showTabSurPlace() {
    $("#tabs-hebergement").hide();
    $("#tabs-trajet").hide();
    $("#tabs-sur-place").show();
}
function showTabHebergement() {
    $("#tabs-sur-place").hide();
    $("#tabs-trajet").hide();
    $("#tabs-hebergement").show();
}

function hoverIn() {
    let imgSrc = $(this).find('img').attr('src');
    imgSrc = imgSrc.replace("-black.svg", ".svg");
    $(this).find('img').attr('src', imgSrc);
}

function hoverOut() {
    let imgSrc = $(this).find('img').attr('src');
    imgSrc = imgSrc.replace(".svg", "-black.svg");
    $(this).find('img').attr('src', imgSrc);
}