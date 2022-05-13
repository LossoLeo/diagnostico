<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function create(Request $request ){
        $data = $request->all();
        $newQuiz = Quiz::create([
            'answers' => $data['answers'],
            'sum' => $data['sum'],
        ]);
    }
    public function quiz(){
        return view('Quiz.mainquiz');
    }
}
