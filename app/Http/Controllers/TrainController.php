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
    public function select_today()
    {
        $title = 'Train list';
        $prova = new \DateTime('today');
        $prova2 = $prova->format('Y-m-d');
        $prova2 = $prova2 . '%';
        // dd($prova2);

        $trains = Train::where('date', 'LIKE', $prova2)->get();
        // dd($trains);
        return view('train_list', compact('title', 'trains'));
    }
    //
}