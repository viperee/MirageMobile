$().ready(() => {
    $(".img-ambiance").click(function(){
        let imgSrcMain = $(this).attr('src');
        $("#img-ambiance-main").attr('src', imgSrcMain);
    })
    }
);