$().ready(() => {
    $("#tabs").tabs();
    $('.timeline').timeline();
    $(".accordion-content").hide();
    $(".header-accordion-icon").click(function(){
        let isOpen = $(this).attr('src').includes("arrow-down");
        if(isOpen){
            $(this).attr('src', 'assets/icons/arrow-up.svg');
        }
        else{
            $(this).attr('src', 'assets/icons/arrow-down.svg');
        }
        $(this).parents(".header-accordion").siblings(".accordion-content").slideToggle("slow");
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