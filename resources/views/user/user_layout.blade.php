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
<div class="container-fluid" style="margin-top: 30px;">
<!-- Page Heading -->

<!-- DataTales Example -->
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="https://abirhasanapon.com/" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">..he.</div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">..hi.</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">.ho.</div>
</div>
</div>



             

@endsection


