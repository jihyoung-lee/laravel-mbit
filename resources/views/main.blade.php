@extends('layouts.master')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
@endsection
@section('title')
    나의 개발 유형 찾기
@endsection
@section('contents')
    <section id="main_contents">
        <div class="wrapper">
            <div class="title">
                <h3 class="main_title">나의 MBIT</h3>
                <h3 class="sub_title">My Best IT personalities</h3>
            </div>
            <div class="intro">
                <h1>나의 개발 유형은?</h1>
                <div class="type">
                    <ul class="type_list">
                        <li>개발자</li>
                        <li>데이터 분석과 인공지능</li>
                        <li>정보보안</li>
                        <li>게임 개발</li>
                        <li>개발자</li>
                    </ul>
                </div>
            </div>
            <div class="button">
                <a href="#">
                    <button class="start" type="button">시작하기</button>
                </a>
            </div>
            <div class="result_data">
                <div class="data_wrap">
                    <h3>참여자 수</h3>
                    <ul>
                        <li>백엔드 개발자 : -명</li>
                        <li>프론트엔드 개발자 : -명</li>
                        <li>데이터 분석과 인공지능 : -명</li>
                        <li>정보보안 : -명</li>
                        <li>게임 개발 : -명</li>
                    </ul>
                </div>
            </div>
            <div class="weniv"></div>
            <a href="#">img logo</a>
        </div>
    </section>
@endsection
