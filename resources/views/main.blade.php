@extends('layouts.master')
@section('css')
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

                        @foreach ($developers as $developer)
                        <li>{{$developer->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="button">
                <a href="{{route('forms.index')}}">
                    <button class="start" type="button">시작하기</button>
                </a>
            </div>
            <div class="result_data">
                <div class="data_wrap">
                    <h3>참여자 수</h3>
                    <ul>
                        @foreach ($developers as $developer)
                        <li>{{$developer->name}} : {{$developer->count}}명</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="weniv"></div>
            <a href="#">img logo</a>
        </div>
    </section>
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="js/form.js"></script>

@endsection
