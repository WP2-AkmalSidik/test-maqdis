<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello()
    {
        return response()->json([
            'status' => 'success',
            'message' => 'welcome to Maqdis Academy'
        ]);
    }
}