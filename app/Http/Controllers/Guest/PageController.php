<?php

namespace App\Http\Controllers\Guest;
use App\Models\Train;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $trains = Train::where('orario_partenza', '>=', now())->get();
        return view('home', compact('trains'));

    }
    
       
}
