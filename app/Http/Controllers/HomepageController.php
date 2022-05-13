<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Mail\emailTeste;
use Illuminate\Support\Facades\Mail;

class HomepageController extends Controller
{
    public function create(Request $request){
        $data = $request->all();
        $newCandidate = Candidate::create([
            'name' => $data['name'],
            'company' => $data['company'],
            'phone' => $data['phone'],
            'email' => $data['email'],
        ]);
        if ($newCandidate) {  
            return response()->json([
                'user' => $newCandidate->id
            ]);

        } else {
            return;
        }
    }
}


