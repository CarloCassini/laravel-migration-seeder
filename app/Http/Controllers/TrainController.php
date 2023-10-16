<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function train_list()
    {
        $title = 'Train list';
        return view('train_list', compact('title'));
    }
    //
}