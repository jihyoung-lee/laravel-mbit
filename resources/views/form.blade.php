@extends('layouts.master')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/form.css')}}">
@endsection
@section('title')
    개발 유형 설문지
@endsection
@section('contents')
    <section id="survey">
        <div class="wrapper">
            <form id="form" action="">
                <div class="test">
                    <div class="question_container">
                        <h3 class="number">1/-</h3>
                        <h3 class="question">당신이 가장 재밌었던 수업은?</h3>
                    </div>
                    <div class="answer">
                        <div> <!-- div 1개에 질문 1개 -->
                            <!-- input 과 label을 같이 가져갑니다 -->
                            <input id="one" type="radio" name="answer_1">
                            <label for="one">게임 개발 유니티</label>
                        </div>
                        <div>
                            <input id="one" type="radio" name="answer_1">
                            <label for="one">어쩌구 개발</label>
                        </div>
                        <div>
                            <input id="one" type="radio" name="answer_1">
                            <label for="one">저쩌구 개발발</label>
                        </div>
                    </div>
                    <div class="btn_wrap">
                        <button class="next_btn">다 음</button>
                    </div>
                </div>
                <div class="test">
                    <div class="question_container">
                        <h3 class="number">2/-</h3>
                        <h3 class="question">당신이 가장 재밌었던 수업은?</h3>
                    </div>
                    <div class="answer">
                        <div> <!-- div 1개에 질문 1개 -->
                            <!-- input 과 label을 같이 가져갑니다 -->
                            <input id="one" type="radio" name="answer_1">
                            <label for="one">게임 개발 유니티</label>
                        </div>
                        <div>
                            <input id="one" type="radio" name="answer_1">
                            <label for="one">테스트 개발</label>
                        </div>
                        <div>
                            <input id="one" type="radio" name="answer_1">
                            <label for="one">테스트2 개발발</label>
                        </div>
                    </div>
                    <div class="btn_wrap btn_sort">
                        <button class="prev_btn">이 전</button>
                        <button class="next_btn">다 음</button>
                    </div>
                </div>
                <div class="test">
                    <div class="question_container">
                        <h3 class="number">3/-</h3>
                        <h3 class="question">당신이 가장 재밌었던 수업은?</h3>
                    </div>
                    <div class="answer">
                        <div> <!-- div 1개에 질문 1개 -->
                            <!-- input 과 label을 같이 가져갑니다 -->
                            <input id="one" type="radio" name="answer_1">
                            <label for="one">게임 개발 유니티</label>
                        </div>
                        <div>
                            <input id="one" type="radio" name="answer_1">
                            <label for="one">어쩌구 개발</label>
                        </div>
                        <div>
                            <input id="one" type="radio" name="answer_1">
                            <label for="one">저쩌구 개발발</label>
                        </div>
                    </div>
                    <div class="btn_wrap btn_sort">
                        <button class="prev_btn">이 전</button>
                        <input type="submit" value="제 출" class="submit_btn">
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="js/form.js"></script>

@endsection
