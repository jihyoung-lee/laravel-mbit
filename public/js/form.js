
function scrollDown(){
        const vheight = $('.test').height();
        $('html, body').animate({
            scrollTop: ((Math.floor($(window).scrollTop() / vheight)+1) * vheight)
        }, 500);
}
function scrollUp() {
    const vheight = $('.test').height();
    $('html, body').animate({
        scrollTop: ((Math.ceil($(window).scrollTop() / vheight)-1) * vheight)
    }, 500);
}
$(function (){
    $('.next_btn').click(function (e){
        e.preventDefault(); //btn 클릭 시의 기본 동작 중지
        scrollDown() //함수 호출
    });
    $('.prev_btn').click(function(e){
        e.preventDefault();
        scrollUp();
    });
});




