<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SalesController extends Controller
{
    public function index($id){
        //return "Sales1";
        $sale=Sale::all();
        //return view('user.sales.index');
    }
}
