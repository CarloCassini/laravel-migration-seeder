<?php

namespace App\Http\Controllers;

// mi ero dimenticato di inserire lo use
use App\Models\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function train_list()
    {
        $title = 'Train list';
        $trains = Train::all();
        return view('train_list', compact('title', 'trains'));
    }
    //
}