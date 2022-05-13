<?php

namespace App\Http\Controllers;

use App\Mail\emailTeste;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuizController extends Controller
{
    public function quiz(Request $request)
    {
        $user = Candidate::where('id', $request->id)->first();
        return view('Quiz.mainquiz', [
            'user' => $user
        ]);
    }

    public function sendFormEmail(Request $request)
    {
        $whatsphone = preg_replace("/[^0-9]/", "", $request->user['phone']);
        $link = $whatsphone;

        Mail::to('paulo@heycomunicacao.com.br')->send(
            new emailTeste(
                $request->user,
                $request->sector,
                $request->socials,
                $request->questions,
                $request->concept,
                $link
            )
        );
    }
}
