<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formation;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
   public function index(){

    $formations = formation::all() ;
    $i = 1;
    return view('dashboard.index', compact('formations' , 'i'));
   }
}
