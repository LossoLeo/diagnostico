<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

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
            return response()->json(['message' => 'Sucesss', 200]);
        } else {
            return;
        }
    }
}


