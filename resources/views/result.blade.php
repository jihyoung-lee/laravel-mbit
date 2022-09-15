@extends('layouts.master')
@section('css')
@endsection
@section('title')
    나의 개발 유형 결과
@endsection
@section('contents')
    <section>
        <div class="wrapper">
            <div class="result">
                <div class="titles">
                    <h3>보이지 않는 것을 보는 당신은!</h3>
                    <h1>프론트엔드 개발자</h1>
                </div>
                <div class="result_img">
                    <img src="img/프론트엔드.png" alt="img">
                </div>
            </div>
            <div class="result_explains">
                <div class="explain">
                    <h3 class="title">나와 맞는 개발 유형은 프론트엔드 개발자?!</h3>
                    <ul>
                        <li>hello world</li>
                        <li>hello world</li>
                        <li>hello world</li>
                    </ul>
                </div>
            </div>
            <div class="lectures">
                <h3 class="title">   </h3>
                    <ul>
                        <li>
                            <a href="#" target="_blank">
                                <img src="" alt="img">
                                <h3>Python 어쩌고</h3>
                                <button type="button">강의 보러가기</button>
                            </a>
                        </li>
                    </ul>
            </div>
            <div class="share">
                <div class="url">
                    <button class="copy_btn" type="button">URL 복사하기</button>
                </div>
                <div class="facebook">
                    <button class="facebook_share" type="button">facebook 공유하기</button>
                </div>
                <div class="kakao">
                    <button class="kakao_share" type="button">kakao 공유하기</button>
                </div>
            </div>
            <div class="buttons">
                <ul>
                    <li>
                        <h3>... 이건 내가 아니야 ... 잘못된게 분명해!</h3>
                        <a href="#">
                            <button type="button">테스트 다시 하기</button>
                        </a>
                    </li>
                    <li>
                        <h3>다른 사람들은 어떤 유형일까?</h3>
                        <a href="#">
                            <button type="button">다른 결과 알아보기</button>
                        </a>
                    </li>
                    <li>
                        <h3>만든 사람</h3>
                        <a href="#">
                            <button type="button">제주코딩베이스캠프 클론코딩 laravel 버전</button>
                        </a>
                    </li>
                    <li>
                        <h3>며칠 동안 훈련해야 전문가가 될까</h3>
                        <a href="#">
                            <button type="button">1만시간의법칙</button>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="logo"></div>
        </div>
    </section>
@endsection
