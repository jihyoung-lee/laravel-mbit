<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Question;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        $questions = Question::all();
        $choices = Choice::all();
        return view('form',['questions'=>$questions, 'choices'=>$choices]);
    }
}
