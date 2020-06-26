$().ready(() => {
    $("#tabs").tabs();
    $('.timeline').timeline();
    $(".accordion-content").hide();
    $(".header-accordion").click(function(){
        let isOpen = $(this).find('img').attr('src').includes("arrow-down");
        if(isOpen){
            $(this).find('img').attr('src', 'assets/icons/arrow-up.svg');
        }
        else{
            $(this).find('img').attr('src', 'assets/icons/arrow-down.svg');
        }
        $(this).siblings(".accordion-content").slideToggle("slow");
    })
    $('#checkbox-enfants').click(function () {
        let isChecked = $(this).is(':checked');
        if(isChecked){
            $(".no-enfant").slideUp("slow");
        }
        else{
            $(".no-enfant").slideDown("slow");

        }

    })
});