@extends('layout/main')
@section('main')

    @if(session()->has('delete'))
    <div class="alert alert-danger" role="alert">
       {{session('delete')}}
    </div>
    @endif
    @if(session('create'))
        <div class="alert alert-success" role="alert">
  {{ session('create') }}
        </div>
    @endif
        @if(session()->has('update'))
    <div class="alert alert-primary" role="alert">
       {{session('update')}}
    </div>
    @endif

<div class="container">
    <div class="row clearfix">
        <div class="col-lg-4 text-left">
                    <a class="btn btn-primary" href="{{url('users/')}}"><i class="fa fa-"></i>Back</a>
        </div>
        <div class="col-lg-8 text-right">
                    <a class="btn btn-primary" href="{{url('users/create')}}"><i class="fa fa-plus"></i>New Sale</a>
                    <a class="btn btn-primary" href="{{url('users/create')}}"><i class="fa fa-plus"></i>New Purches</a>
                    <a class="btn btn-primary" href="{{url('users/create')}}"><i class="fa fa-plus"></i>New Payment</a>
                    <a class="btn btn-primary" href="{{url('users/create')}}"><i class="fa fa-plus"></i>New Receipt</a>
        </div>    
    </div>
    
</div>
<div class="container-fluid" style="margin-top: 30px; background: gray;">
<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$user->name}}  Information</h6>
    </div>
    <div class="row clearfix">
    <div class="col-lg-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Sales</a>
  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Purchase</a>
  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">User Details</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">payment</a>
</div>

    </div>
    <div class="col-lg-9">
    <div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi natus architecto, aut provident aspernatur, facere ipsam quod soluta
       numquam sed excepturi et dolor assumenda autem velit dignissimos quas ipsa labore.
  </div>
  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae corporis eius ratione a adipisci laborum sed nostrum
       aspernatur sit eveniet velit at labore doloribus, tempora harum blanditiis explicabo vel non!
    </div>
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
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
</div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

    </div>

</div>

    </div>

</div>
</div>



             
  


@endsection