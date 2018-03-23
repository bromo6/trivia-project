@extends('master')

@section('content')
    <div class="container-fluid questBack">

    <?php// dump($question); ?>
<section class="text-center">
<h1>How long can you Quack?!</h1>
<h3>Answer the following question below</h3>

</section>
<div class="container">
    <div class="row">
        <div class="col category">
            <p class="cat mt-2"> Category: {{$question['result'][0]['category']}}</p>
        </div>
    </div>
  <div class="row questBox">
    <div class="col quest">
      <p class="asked">{{$question['result'][0]['question']}}</p>
    </div>
  </div>
  <div class="row answersChoose">
    <div class="col">
        <form action="/submit-answer" method="post">
            @csrf
        @foreach($question['result'][0]['chooices'] as $answerChoice)

            <div class="row my-4">
                <div class="col">
                    <input type="hidden" name="questionId" value="{{ $questionId }}" />
                    <input type="radio" name="answerChoice" value="{{ $answerChoice }}" />
                    {{ $answerChoice }}

                </div>
            </div>
        @endforeach
        <button class="btn btn-outline-warning subMit">Submit</button>
        <!-- button goes here -->
    </form>
    {{-- <div class="row">
      {{['result'][0]['chooices'][1]}}
    </div>
    <div class="row">
      {{['result'][0]['chooices'][2]}}
    </div>
    <div class="row">
      {{['result'][0]['chooices'][3]}}
    </div> --}}
    </div>
  </div>
</div>

    @if (!empty($question))
    {{-- <div class="col-3 text-center"></div>
        <div class="card mb-3"></div>
            <div class="card-body"></div> --}}
    @endif

</div>

@endsection
