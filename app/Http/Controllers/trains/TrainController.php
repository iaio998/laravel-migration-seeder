<?php

namespace App\Http\Controllers\trains;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {

        return view('trains.index');
    }
}
