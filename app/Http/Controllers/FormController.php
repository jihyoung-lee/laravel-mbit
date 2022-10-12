<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        $questions = Question::all();
        return view('form',['questions'=>$questions]);
    }
}
