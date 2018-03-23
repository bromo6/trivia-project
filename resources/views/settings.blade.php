@extends('master')
@section('content')

<div class="container-fluid settingBack">
  <div class="container settingBod">
    <div class="row">
        <div class="col">
          <h1 class="text-center titleSet">Settings</h1>
        </div>
    </div>
    <div class="row">
      <div class="col">
        <p id="gamerTag"input="text">Username 12</p>
      </div>
    </div>
    <div class="row">
      <div class="col-6 ">
        <h2 id="newGame">Login Info</h2>

        <form>
          <p>First Name</p> </br>
          <div class="settingsPro"></div>
          <!-- <input type="text" name="username" class="settingsPro"><br> -->
          <p>Last Name</p> </br>
          <div class="settingsPro"></div>
          <!-- <input type="text" name="username" class="settingsPro"><br> -->
          <p>Email</p> </br>
          <div class="settingsPro"></div>
          <!-- <input type="text" name="username" class="settingsPro"><br> -->
        </form>
        <br />
        <h2 id="newGame1">Password Reset</h2>
        <form>
          Current password:<br>
          <input type="password" name="psw" class="settingsPro"></br>
           New Password:<br />
          <input type="password" name="psw" class="settingsPro"><br>
          Confirm Password:<br />
         <input type="password" name="psw" class="settingsPro"><br>
          <button type="btn" class="btn btn-outline-dark settingSubmit">Submit</button>
        </form>
      </div>
      <div class="col-6">
        <img src="images/setPic2.png" />
      </div>
    </div>
  </div>
</div>


@endsection
