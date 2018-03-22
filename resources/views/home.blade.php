@extends('master')

@section('content')
<!--JUMBOTRON  --------------------------------------------------------------------------->
<div id="aboveJum" class="container-fluid px-0 mx-0">
  <div id="homeJumbo" class="container-fluid">
  <div class="row">
      <div class="col">
          <div class="row my-5 mx-5">
            <div class="col-2">
              <img class="rounded-circle emptyPro" height="100" width="100" src="images/empty-profile.png"/>
              <p class="proName">Username 12</p>
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col-5 homeText">
              <h2 id="helloQuaks">Hello WiseQuackers!</h2>
                <button id="button" class="btn btn-outline-warning">Start New Game</button>
              </div>
            <div class="col-3">
              <img id="dafADuck" height="350" src="https://vignette.wikia.nocookie.net/boomerang-from-cartoon-network/images/d/d7/Daffy_Duck.png/revision/latest?cb=20161123215131" />
            </div>
            <div class="col-2 topIcons">
              <div class="row topTwitter">
                <div class="col">
                  <i class="fab fa-twitter fa-3x tweet"></i>
                </div>
              </div>
              <div class="row topMail">
                <div class="col">
                  <i class="fas fa-envelope fa-3x mail"></i>
                </div>
              </div>
              <div class="row topFacebook">
                <div class="col">
                  <i class="fab fa-facebook fa-3x face"></i>
                </div>
              </div>
              <div class="row topInsta">
                <div class="col">
                  <i class="fab fa-instagram fa-3x finsta"></i>
                </div>
              </div>
            </div>
          </div>
      </div>
   </div>
</div></div>
<!--USER STATS  -------------------------------------------------------------------------->
<div class="container homeBod">
  <div class="row">
    <div class="col">
      <p id="gamerTag">Username 12</p>
    </div>
  </div>
  <div class="row">
    <div class="col-6 newStuff">
      <h2 id="newGame">Newest Games</h2>

      <p class="newQuest"> 12 questions correct </p>
      <p class="newQuest"> 24 questions correct </p>
      <p class="newQuest"> 8 questions correct </p>
      <p class="newQuest"> 15 questions correct </p>
    </div>
    <div class="col-6">
        <div class="row">
          <div class="col">
            <h2 id="highText">Highest Score</h2>
            <p id="highScore">2400 Quacks</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <h2 id="prevText">Previous Scores</h2>
            <p class="score">2347 Quacks</p>
            <p class="score">1580 Quacks</p>
            <p class="score">2225 Quacks</p>
          </div>
        </div>
    </div>
  </div>
</div>

@endsection
