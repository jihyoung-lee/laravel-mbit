const copyBtn = document.querySelector('.copy_btn');
const facebookShare = document.querySelector('.facebook_share')

$(function (){
    let url = window.location.href /* url */
    let img = $('.result_img img').attr('src') ;/*  변수에 이미지 주소 담기 */
    $("meta[property='og\\:url']").attr('content', url)/*url에 담긴 값을 미리보기로 띄워주는 것*/
    $("meta[property='og\\:image']").attr('content', img)/*url에 담긴 값을 미리보기로 띄워주는 것*/
});

function copyUrl(){
    let tmp = document.createElement('input'); /* input이라는 요소를 doc에 추가하기 */
    let url = location.href

    document.body.appendChild(tmp);
    tmp.value = url;
    tmp.select();
    document.execCommand("copy");
    document.body.removeChild(tmp);

    alert("URL이 복사되었습니다.")
}

function shareFacebook(){
    let url = window.location.href;
    let facebook = 'http://www.facebook.com/sharer/sharer.php?u=';
    let link = facebook + url;
    window.open(link);
}

function shareKakao(){

}

copyBtn.addEventListener('click', copyUrl)
facebookShare.addEventListener('click',shareFacebook)
