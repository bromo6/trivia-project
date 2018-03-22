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
        Username </br>
        <input type="text" name="username" class="newQuest"><br>
        User Email: </br>
        <input type="text" name="username" class="newQuest"><br>
        User password:<br>
        <input type="password" name="psw" class="newQuest">
      </form>
<br />

      <h2 id="newGame1">Password Reset</h2>
      <form>
         New Password:<br />
        <input type="password" name="psw" class="newQuest"><br>
        User password:<br>
        <input type="password" name="psw" class="newQuest">
      </form>
       <input type="submit">

    </div>

  </div>
</div>



@endsection
