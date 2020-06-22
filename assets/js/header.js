$().ready(() => {
    $(".btn-icon-ticket").hover(hoverIn, hoverOut);
});

function hoverIn() {
    $(this).find('img').attr('src', 'assets/icons/ticket_black.svg');
}

function hoverOut() {
    $(this).find('img').attr('src', 'assets/icons/ticket.svg');
}