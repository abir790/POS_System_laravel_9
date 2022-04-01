<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\SalesInvoice;
use App\Models\Group;

class SalesInvoiceController extends Controller
{
        public function index($id){
        //return "Sales1";
        //$sale=SalesInvoice::all();
        $user=User::findOrfail($id);
        return view('user.sales.index',compact('user'));
       // dd($user->SalesInvoice->id);
        //dd($user->group->title);
        //foreach ($user->SalesInvoice as $value) {
          //  echo $value->challan_no ;
        //}
    }
}
