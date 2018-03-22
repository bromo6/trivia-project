@extends('master')
@section('content')


<div class="container homeBod">
  <div class="row">
      <div class="col">
        <h1 class="text-center">Settings</h1>
      </div>
  </div>
  <div class="row">
    <div class="col">
      <p id="gamerTag"input="text">Username 12</p>
    </div>
  </div>
  <div class="row">
    <div class="col-6 newStuff">
      <h2 id="newGame">Login Info</h2>

      <form>
        First Name </br>
        <input type="text" name="username" class="settingsPro"><br>
        Last Name </br>
        <input type="text" name="username" class="settingsPro"><br>
        Username </br>
        <input type="text" name="username" class="settingsPro"><br>
        Email </br>
        <input type="text" name="username" class="settingsPro"><br>
        Password:<br>
        <input type="password" name="psw" class="settingsPro">
      </form>
<br />

      <h2 id="newGame1">Password Reset</h2>
      <form>
         New Password:<br />
        <input type="password" name="psw" class="settingsPro"><br>
        User password:<br>
        <input type="password" name="psw" class="settingsPro"></br>
        <button type="btn" class="btn btn-outline-secondary settingSubmit">Submit</button>
      </form>


    </div>

  </div>
</div>



@endsection
