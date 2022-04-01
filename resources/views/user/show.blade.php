@extends('user.user_layout')
@section('user_details')
  <div class="card-body">
        <table class="table">
                    <tr>
                        <th>Name</th>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                    <th>Group</th>
                        <td>{{$user->group->title}}</td>
                    </tr>
                    <tr>
                    <th>Address</th>
                        <td>{{$user->address}}</td>
                    </tr>
                    <tr>
                    <th>Email</th>
                        <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                    <th>Phone</th>
                        <td>{{$user->phone}}</td>
                    </tr>
       </table>
    </div>


    @stop