<?php

namespace App\Http\Controllers\Messages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        return view('message.index');
    }
}
