<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function top ()
    {
        $error_messages = []; 
        $subject = 'ご意見';

        return view('top', compact('error_messages', 'subject'));
    }
}
