<?php

namespace App\Http\Controllers\Supplies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuppliesController extends Controller
{
    public function index(){
        return view('supplies.index');
    }
}
