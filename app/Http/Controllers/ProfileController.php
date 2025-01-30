<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{


    public function viewProfile() {
        return view('welcome');
    }


    public function api() {
        return response()->json([
            'success' => true,
            'data' => [
                'usernmae' => "test"
            ]
        ]);
    }
}


