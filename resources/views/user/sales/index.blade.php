@extends('user.user_layout')
@section('user_sales')
  <div class="card-body">
        <table class="table">
        	@foreach($user->SalesInvoice as $sal)
        	{{$sal->challan_no}}

        	@endforeach

       </table>
    </div>

    @stop