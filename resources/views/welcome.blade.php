@extends('layout/primary')

@section('main_body')
<h1 class="h3 mb-4 text-gray-800">Blank Welcome Page</h1>
<h1 class="h3 mb-4 text-gray-800" style="font-size: 100px;">Point Of Sale</h1>
<div class="row">
    <div class="col-lg-4">
    </div>
    <div class="col-lg-8">
    <a href="" target="_blank" >Login Please</a>
    
    </div>
</div>
<?php
echo "12345678";
echo "<br>";
echo password_hash("12345678",PASSWORD_DEFAULT);
?>

<div class="row clearfix">
    <div class="col-lg-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
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
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
</div>

    </div>

</div>


@endsection