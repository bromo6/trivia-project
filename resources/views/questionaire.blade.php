@extends('master')

@section('content')
    <?php dump($question); ?>
<section class="text-center">
<h1>Take a Quack at it?!</h1>
<h3>Answer the following question below</h3>

</section>
<div class="container">
  <div class="row">
    <div class="col quest">
      <p>{{$question['result'][0]['question']}}</p>
    </div>
  </div>
  <div class="row">
    <div class="col">
    <div class="row">
      {{['chooices'][0]['Rheumatic fever']}}
    </div>
    <div class="row">
      {{['chooices'][1]['Irritated  bowel syndrome']}}
    </div>
    <div class="row">
      {{['chooices'][2]['Dyslexia']}}
    </div>
    <div class="row">
      {{['chooices'][3]['Diabetes']}}
    </div>
    </div>
  </div>
</div>

    @if (!empty($question))
    <div class="col-3 text-center"></div>
        <div class="card mb-3"></div>
            <div class="card-body"></div>
    @endif


@endsection
